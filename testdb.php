<?php
include "public/DBClassPDO.php";

$objdb = new DBClassPDO();

$selCmd = "select * from user";
$param = array();
$rs = $objdb->Recordset($selCmd, $param);
$count = $objdb->RecordCount($rs);

echo "count = $count<br/>";
if ($count > 0) {
	$rows = $objdb->GetRows($rs);
	for ($idx=0; $idx < $count; $idx++) { 
		$currentRow = $rows[$idx];
		echo $currentRow["username"] . "<br/>";
	}
}



?>