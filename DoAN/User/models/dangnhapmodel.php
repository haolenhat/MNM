<?php
class dangnhapmodel extends Db{
	
	
    function dangnhap($email,$matkhau)
    {
    	$sql='select * from khachhang where email=? and matkhau = ?';
    	$arr=[$email,$matkhau];
    	return $this->updateQuery($sql, $arr);
    }


	function insert($email,$matkhau, $tenkh, $diachi, $sodienthoai)
	{
		$sql="insert into khachhang (email, matkhau,tenkh, diachi, sodienthoai) values (?,?,?,?,?)";
		$arr=[$email,$matkhau, $tenkh, $diachi, $sodienthoai];
		return $this->updateQuery($sql, $arr);
	}
	function khachhangcoemail($email)
    {
    	$sql='select * from khachhang where email=?';
    	$arr=[$email];
    	return $this->selectQuery($sql, $arr);
    }

	

}
?>