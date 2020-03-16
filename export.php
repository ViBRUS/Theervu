<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "contact");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM contacttable";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Phone</th>  
                         <th>Email</th>  
                         <th>Message</th>
                         
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["phone"].'</td>  
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["message"].'</td>  
                         
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
