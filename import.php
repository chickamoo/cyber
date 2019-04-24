<?php

//import.php

if(!empty($_FILES['csv_file']['name']))
{
 $file_data = fopen($_FILES['csv_file']['tmp_name'], 'r');
 fgetcsv($file_data);
 while($row = fgetcsv($file_data))
 {
  $data[] = array(
  	'id'  => $row[0],
   'column_1'  => $row[1],
   'column_2'  => $row[2],
   'column_3'  => $row[3],
   'column_4'  => $row[4],
   'column_5'  => $row[5],
   'column_6'  => $row[6],
   'column_7'  => $row[7],
   'column_8'  => $row[8],
   'column_9'  => $row[9],
   'column_10'  => $row[10],
   'column_11'  => $row[11],
   'column_12'  => $row[12],
   'column_13'  => $row[13],
   'column_14'  => $row[14],
   'column_15'  => $row[15],
   'column_16'  => $row[16],
   'column_17'  => $row[17],
   'column_18'  => $row[18],
   'column_19'  => $row[19],
   'column_20'  => $row[20],
   'column_21'  => $row[21],
   'column_22'  => $row[22],
   'column_23'  => $row[23],
   'column_24'  => $row[24],
   'column_25'  => $row[25],
   'column_26'  => $row[26],
   'column_27'  => $row[27],
   'column_28'  => $row[28],
   'column_29'  => $row[29],
   'column_30'  => $row[30],
   'column_31'  => $row[31],
   'column_32'  => $row[32],
   'column_33'  => $row[33],
   'column_34'  => $row[34],
   'column_35'  => $row[35],
   'column_36'  => $row[36],
   'column_37'  => $row[37],
   'column_38'  => $row[38],
   'column_39'  => $row[39],
   'column_40'  => $row[40],
   'column_41'  => $row[41]





  );
 }
 echo json_encode($data);
}

?>