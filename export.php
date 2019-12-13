<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "calling");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM table1";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Team</th>  
                         <th>Sip</th>
                         <th>Sim Number</th>  
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["team"].'</td>  
                         <td>'.$row["slot_no"].'</td>
                         <td>'.$row["sim_no"].'</td>  
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