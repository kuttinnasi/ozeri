<?php  
require('config.php');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM `petition` ORDER BY `id` DESC";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1" style="border: 1px solid #080808;">  
    <tr>  
         <th style="border: 1px solid #080808; background-color: #498a61;">Full Name or Initials Only</th>  
         <th style="border: 1px solid #080808; background-color: #498a61;">Country</th>  
         <th style="border: 1px solid #080808; background-color: #498a61;">State of Residence( if USA )</th>
         <th style="border: 1px solid #080808; background-color: #498a61;">Other Country Name</th>
         <th style="border: 1px solid #080808; background-color: #498a61;">Email (Not For Public Display)</th>
         <th style="border: 1px solid #080808; background-color: #498a61;">Submitted Date</th>   
    </tr>
  ';
  
     while($row = mysqli_fetch_array($result)){
       $output .= '
        <tr>  
            <td style="border: 1px solid #080808;">'.$row["name"].'</td>
            <td style="border: 1px solid #080808;">'.$row["country"].'</td>  
            <td style="border: 1px solid #080808;">'.$row["state"].'</td> 
            <td style="border: 1px solid #080808;">'.$row["other_state"].'</td> 
            <td style="border: 1px solid #080808;">'.$row["email"].'</td>  
            <td style="border: 1px solid #080808;">'.$row["created_at"].'</td>  
       </tr>';
       
    }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=petitions_'.date('d-M-Y').'.xls');
  echo $output;
  }
}
?>