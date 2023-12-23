<?php
class sanphammodel extends Db{
	function all()
	{
		return $this->selectQuery('select * from dianhac');
	}

  function theloai()
	{
		return $this->selectQuery('select * from dianhac join theloai on dianhac.id_theloai = theloai.id_theloai');
	}

	function search($kw)
    {
        $sql="select * from dianhac where tendianhac like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }


    function hiensua($id_dianhac)
    {
     $sql="select * from dianhac join theloai on dianhac.id_theloai = theloai.id_theloai WHERE id_dianhac='$_GET[id]'";
     $a=[$id_dianhac];
     return $this->selectQuery($sql, $a);
    }

    
    function sptrongcart()
    {
      if(!empty($_SESSION["cart"])){
        $sql ="SELECT * FROM dianhac WHERE id_dianhac IN ('".implode("','", array_keys($_SESSION["cart"]))."')";
        return $this->selectQuery($sql);
      }
    
    }

 

  function hientheloai($id_theloai)
  {
    $sql="select * from dianhac join theloai on dianhac.id_theloai = theloai.id_theloai WHERE dianhac.id_theloai='$_GET[id]'";
    $a=[$id_theloai];
    return $this->selectQuery($sql, $a);
  }

  
  

}


?>