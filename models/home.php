<?php
class HomeModel extends Model{
	public function Index(){
		$this->query('SELECT GatunekNazwaPL, GatunekNazwaLAT, GatunekIMG FROM Gatunek ORDER BY GatunekID DESC LIMIT 6');
		$rows=$this->resultSet();
		return $rows;
	}
}