<?php 
class chitiethoadonmodel extends Db{


    function insert($id_hd, $id_dianhac, $soluong, $gia)
	{
		$sql="INSERT into chitiethoadon values ('$id_hd','$id_dianhac', '$soluong', '$gia')";
		
		return $this->updateQuery($sql);

    }
}



