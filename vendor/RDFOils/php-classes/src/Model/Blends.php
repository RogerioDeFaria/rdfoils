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

	public static function listAllFacts()
	{
		$sql = new Sql();

		return $sql->select("
			SELECT * FROM tb_blends a 
			INNER JOIN tb_blends_facts b 
			ON a.idblend = b.tb_blends_idblend"
		);
	}

	public function save()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_blends_save(:idblend, :desenglishname, :desportuguesename, :descomponents, :description, :desdilution, :dessecurity, :desapplications, :desbenefit, :desbenefittype, :desprimaryuses, :inaromatic_use, :intopical_use, :internal_use, :desphoto1, :desphoto2, :desphoto3, :desurl)", array(
			":idblend"=>$this->getidblend(),
			":desenglishname"=>$this->getdesenglishname(),
			":desportuguesename"=>$this->getdesportuguesename(),
			":descomponents"=>$this->getdescomponents(),
			":description"=>$this->getdescription(),
			":desdilution"=>$this->getdesdilution(),
			":dessecurity"=>$this->getdessecurity(),
			":desapplications"=>$this->getdesapplications(),
			":desbenefit"=>$this->getdesbenefit(),
			":desbenefittype"=>1,
			":desprimaryuses"=>$this->getdesprimaryuses(),
			":inaromatic_use"=>$this->getinaromatic_use(),
			":intopical_use"=>$this->getintopical_use(),
			":internal_use"=>$this->getinternal_use(),
			":desphoto1"=>$this->getdesphoto1(),
			":desphoto2"=>$this->getdesphoto2(),
			":desphoto3"=>$this->getdesphoto3(),
			":desurl"=>$this->getdesurl()
		));

		$this->setData($results[0]);
	}

	public function get($idblend)
	{
		$sql = new Sql();

		$results = $sql->select("
			SELECT * FROM tb_blends a 
			INNER JOIN tb_blends_facts b 
			ON a.idblend = b.tb_blends_idblend
			WHERE idblend = :idblend", [
			':idblend'=>$idblend
		]);

		$this->setData($results[0]);
	}

	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_blends_facts WHERE tb_blends_idblend = :idblend", [
			':idblend'=>$this->getidblend()
		]);

		$sql->query("DELETE FROM tb_blends WHERE idblend = :idblend", [
			':idblend'=>$this->getidblend()
		]);
	}

	public function getBlendsPage($page = 1, $itemsPerPage = 12)
	{
		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_blends a
			INNER JOIN tb_blends_facts b
			ON a.idblend = b.tb_blends_idblend
			LIMIT $start, $itemsPerPage;
		");

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
		];
	}

	public function getBlendsPageSearch($search, $page = 1, $itemsPerPage = 6)
	{
		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_blends a
			INNER JOIN tb_blends_facts b
			ON a.idblend = b.tb_blends_idblend
			WHERE a.desenglishname    LIKE :search OR
				  a.desportuguesename LIKE :search
			ORDER BY a.desenglishname
			LIMIT $start, $itemsPerPage;
		", [
			':search'=>'%'.$search.'%'
		]);

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
		];
	}

	public function getFromURL($desurl)
	{
		$sql = new Sql();

		$results = $sql->select("
			SELECT * FROM tb_blends a 
			INNER JOIN tb_blends_facts b 
			ON a.idblend = b.tb_blends_idblend
			WHERE desurl = :desurl LIMIT 1;", [
			':desurl'=>$desurl
		]);

		$this->setData($results[0]);
	}


}

?>