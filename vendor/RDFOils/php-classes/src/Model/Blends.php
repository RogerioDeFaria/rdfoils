<?php

namespace RDFOils\Model;

use \RDFOils\DB\Sql;
use \RDFOils\Model;

class Blends extends Model {

	public static function listAll()
	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_blends ORDER BY desenglishname");
	}

	public function save()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_blends_save(:idblend, :desenglishname, :desportuguesename)", array(
			":idblend"=>$this->getidblend(),
			"desenglishname"=>$this->getdesenglishname(),
			"desportuguesename"=>$this->getdesportuguesename()
		));

		$this->setData($results[0]);
	}

	public function get($idblend)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_blends WHERE idblend = :idblend", [
			':idblend'=>$idblend
		]);

		$this->setData($results[0]);
	}

	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_blends WHERE idblend = :idblend", [
			':idblend'=>$this->getidblend()
		]);
	}

}

?>