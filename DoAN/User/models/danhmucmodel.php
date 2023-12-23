<?php
class danhmucmodel extends Db{
	function theloai()
	{
		return $this->selectQuery('select * from theloai');
	}
}