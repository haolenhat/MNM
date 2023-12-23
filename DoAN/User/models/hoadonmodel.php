<?php 
class hoadonmodel extends Db{


    function insert($id_hd,$email, $tennguoinhan, $diachi, $sodienthoainguoinhan, $tongtien)
	{
		$sql="INSERT into hoadon values ('$id_hd', '$email',  CURRENT_TIMESTAMP, '$tennguoinhan', '$diachi', CURRENT_TIMESTAMP, '$sodienthoainguoinhan', '$tongtien')";
		return $this->updateQuery($sql);

    }
}



