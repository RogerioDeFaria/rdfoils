<?php

namespace RDFOils\Model;

use \RDFOils\DB\Sql;
use \RDFOils\Model;

class Oils extends Model {

	public static function listAll()
	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_oils ORDER BY desenglishname");
	}

	public function save()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_oils_save(:idoil, :desenglishname, :desportuguesename)", array(
			":idoil"=>$this->getidoil(),
			"desenglishname"=>$this->getdesenglishname(),
			"desportuguesename"=>$this->getdesportuguesename()
		));

		$this->setData($results[0]);
	}

	public function get($idoil)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_oils WHERE idoil = :idoil", [
			':idoil'=>$idoil
		]);

		$this->setData($results[0]);
	}

	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_oils WHERE idoil = :idoil", [
			':idoil'=>$this->getidoil()
		]);
	}

}

?>