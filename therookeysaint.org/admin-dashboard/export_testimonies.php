<?php  
require('config.php');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM `testimonials` ORDER BY `id` DESC";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1" style="border: 1px solid #080808;">  
    <tr>  
         <th style="border: 1px solid #080808; background-color: #498a61;">ID</th>
         <th style="border: 1px solid #080808; background-color: #498a61;">Name</th>
         <th style="border: 1px solid #080808; background-color: #498a61;">Email</th>
         <th style="border: 1px solid #080808; background-color: #498a61;">Phone</th>
         <th style="border: 1px solid #080808; background-color: #498a61;">Testimony</th>
         <th style="border: 1px solid #080808; background-color: #498a61;">Submitted Date</th>
    </tr>
  ';
  
     while($row = mysqli_fetch_array($result)){
       $output .= '
        <tr>  
            <td style="border: 1px solid #080808;">'.$row["id"].'</td>
            <td style="border: 1px solid #080808;">'.$row["name"].'</td>
            <td style="border: 1px solid #080808;">'.$row["email"].'</td>  
            <td style="border: 1px solid #080808;">'.$row["phone"].'</td> 
            <td style="border: 1px solid #080808;">'.$row["testimony"].'</td> 
            <td style="border: 1px solid #080808;">'.$row["created_at"].'</td>  
       </tr>';
       
    }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=testimonies_'.date('d-M-Y').'.xls');
  echo $output;
  }
}
?>
