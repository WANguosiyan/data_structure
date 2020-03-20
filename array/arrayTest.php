<?php
 require './Myarray.php';
 $myArr1 = new Myarray(10);
for($i=0;$i<9;$i++) {
    $myArr1->insert($i, $i+1);
}
$myArr1->printData();

$code = $myArr1->insert(6, 999);
echo "insert at 6: code:{$code}\n";
$myArr1->printData();

list($code, $value) = $myArr1->delete(6);
echo "delete at 6: code:{$code}, value:{$value}\n";
$myArr1->printData();

$code = $myArr1->insert(11, 999);
echo "insert at 11: code:{$code}\n";
$myArr1->printData();

list($code, $value) = $myArr1->delete(0);
echo "delete at 0: code:{$code}, value:{$value}\n";
$myArr1->printData();

list($code, $value) = $myArr1->search(0);
echo "find at 0: code:{$code}, value:{$value}\n";

?>