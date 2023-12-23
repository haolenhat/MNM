<?php 
class hoadonmodel extends Db 
{
    function all()
    {
        return $this->selectQuery('select DISTINCT hoadon.id_hd,email,tennguoinhan,tongtien,dienthoainguoinhan from hoadon join chitiethoadon on hoadon.id_hd = chitiethoadon.id_hd join dianhac on dianhac.id_dianhac = chitiethoadon.id_dianhac');
    }
    
    function chitiet($id_hd)
    {
     $sql="SELECT * from hoadon join chitiethoadon on hoadon.id_hd = chitiethoadon.id_hd join dianhac on dianhac.id_dianhac = chitiethoadon.id_dianhac WHERE hoadon.id_hd='$_GET[id]'";
     $a=[$id_hd];
     return $this->selectQuery($sql, $a);
    }

    function chitiet1($id_hd)
    {
         $sql="SELECT DISTINCT tongtien,hoadon.id_hd,tennguoinhan,email,dienthoainguoinhan,ngaynhan from hoadon join chitiethoadon on hoadon.id_hd = chitiethoadon.id_hd join dianhac on dianhac.id_dianhac = chitiethoadon.id_dianhac WHERE hoadon.id_hd='$_GET[id]'";
     $a=[$id_hd];
     return $this->selectQuery($sql, $a);
    }
}