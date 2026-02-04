<?php  
require('config.php');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM `prayer_request` ORDER BY `id` DESC";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1" style="border: 1px solid #080808;">  
    <tr>  
         <th style="border: 1px solid #080808; background-color: #498a61;">Name</th>  
         <th style="border: 1px solid #080808; background-color: #498a61;">Email (Not For Public Display)</th>  
         <th style="border: 1px solid #080808; background-color: #498a61;">Phone Number (Not For Public Display)</th>
         <th style="border: 1px solid #080808; background-color: #498a61; width: 400px;">Prayer Request Message</th>
         <th style="border: 1px solid #080808; background-color: #498a61;">Submitted Date</th>   
    </tr>
  ';
  
     while($row = mysqli_fetch_array($result)){
       $output .= '
        <tr>  
            <td style="border: 1px solid #080808;">'.$row["name"].'</td>
            <td style="border: 1px solid #080808;">'.$row["email"].'</td>  
            <td style="border: 1px solid #080808;">'.$row["phone_number"].'</td>
            <td style="border: 1px solid #080808; width: 400px;">'.$row["message"].'</td>
            <td style="border: 1px solid #080808;">'.$row["created_at"].'</td>  
       </tr>';
       
    }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=prayer_request_'.date('d-M-Y').'.xls');
  echo $output;
  }
}
?>