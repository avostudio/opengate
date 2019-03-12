<?php
// Test CVS

require_once 'Excel/reader.php';


// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();


// Set output Encoding.
$data->setOutputEncoding('CP1251');

/***
* if you want you can change 'iconv' to mb_convert_encoding:
* $data->setUTFEncoder('mb');
*
**/

/***
* By default rows & cols indeces start with 1
* For change initial index use:
* $data->setRowColOffset(0);
*
**/



/***
*  Some function for formatting output.
* $data->setDefaultFormat('%.2f');
* setDefaultFormat - set format for columns with unknown formatting
*
* $data->setColumnFormat(4, '%.3f');
* setColumnFormat - set format for column (apply only to number fields)
*
**/

$data->read('test.xls');

/*


 $data->sheets[0]['numRows'] - count rows
 $data->sheets[0]['numCols'] - count columns
 $data->sheets[0]['cells'][$i][$j] - data from $i-row $j-column

 $data->sheets[0]['cellsInfo'][$i][$j] - extended info about cell
    
    $data->sheets[0]['cellsInfo'][$i][$j]['type'] = "date" | "number" | "unknown"
        if 'type' == "unknown" - use 'raw' value, because  cell contain value with format '0.00';
    $data->sheets[0]['cellsInfo'][$i][$j]['raw'] = value if cell without format 
    $data->sheets[0]['cellsInfo'][$i][$j]['colspan'] 
    $data->sheets[0]['cellsInfo'][$i][$j]['rowspan'] 
*/

error_reporting(E_ALL ^ E_NOTICE);


for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		//echo $data->sheets[0]['cells'][1][$j].", ";
    $x = $j-1;
    $str_width[$x] = $data->sheets[0]['cells'][1][$j];
}

for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
    $y = $i-1;
    $str_height[$y] = $data->sheets[0]['cells'][$i][1];
}

/*
echo "sizeof str_width = " . sizeof($str_width) . "<br>";
echo "sizeof str_height = " . sizeof($str_height) . "<br>";

echo $data->sheets[0]['cells'][1][1] . "<br>";
echo $data->sheets[0]['cells'][1][2] . "<br>";
echo $data->sheets[0]['cells'][1][3] . "<br>";
echo $data->sheets[0]['cells'][1][4] . "<br>";

echo $data->sheets[0]['cells'][2][1] . "<br>";
echo $data->sheets[0]['cells'][2][2] . "<br>";
echo $data->sheets[0]['cells'][2][3] . "<br>";
echo $data->sheets[0]['cells'][2][4] . "<br>";
*/


for ($x=1; $x<=sizeof($str_width)-1; $x++) {

  for ($y=1; $y<=sizeof($str_height)-1; $y++) {

    $i = $x+1;
    $j = $y+1;
    $one_percent = $data->sheets[0]['cells'][$j][$i]/100; 
    $str_price = ceil($one_percent*30 + $data->sheets[0]['cells'][$j][$i]);
    
    echo "new Array(\"".$str_width[$x]."\", \"".$str_height[$y]."\", \"".$str_price."\"), <br>\n";

  }

}

/*

for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		echo "\"".$data->sheets[0]['cells'][$i][$j]."\",";
	}
	echo "\n";

}

*/

//print_r($data);
//print_r($data->formatRecords);
?>
