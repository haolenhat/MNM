<?php 
class nhacmodel extends Db {
    function all()
    {
        return $this->selectQuery('select * from nhac');
    }

    function search($kw)
    {
        $sql="select * from nhac where tennhac like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
}