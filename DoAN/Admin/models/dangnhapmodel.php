<?php
class dangnhapmodel extends Db{
	
    function dangnhap($email,$matkhau)
    {
    	$sql='select * from admin where email=? and matkhau = ?';
    	$arr=[$email,$matkhau];
    	return $this->updateQuery($sql, $arr);
    }

}
?>