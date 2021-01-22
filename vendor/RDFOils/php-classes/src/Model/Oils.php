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

	public static function listAllFacts()
	{
		$sql = new Sql();

		return $sql->select("
			SELECT * FROM tb_oils a 
			INNER JOIN tb_oil_facts b 
			ON a.idoil = b.tb_oils_idoil"
		);
	}

	public function save()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_oils_save(:idoil, :desenglishname, :desportuguesename, :desscientificname, :descommonname , :desfamily, :desorigin, :desextrmethod, :description, :desdilution, :dessecurity, :desapplications, :desbenefit, :desbenefittype, :desprimaryuses, :inaromatic_use, :intopical_use, :internal_use, :desphoto1, :desphoto2, :desphoto3, :desurl)", array(
			":idoil"=>$this->getidoil(),
			":desenglishname"=>$this->getdesenglishname(),
			":desportuguesename"=>$this->getdesportuguesename(),
			":desscientificname"=>$this->getdesscientificname(),
			":descommonname"=>$this->getdescommonname(),
			":desfamily"=>$this->getdesfamily(),
			":desorigin"=>$this->getdesorigin(),
			":desextrmethod"=>$this->getdesextrmethod(),
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

	public function get($idoil)
	{
		$sql = new Sql();

		$results = $sql->select("
			SELECT * FROM tb_oils a 
			INNER JOIN tb_oil_facts b 
			ON a.idoil = b.tb_oils_idoil
			WHERE idoil = :idoil", [
			':idoil'=>$idoil
		]);

		$this->setData($results[0]);
	}

	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_oil_facts WHERE tb_oils_idoil = :idoil", [
			':idoil'=>$this->getidoil()
		]);

		$sql->query("DELETE FROM tb_oils WHERE idoil = :idoil", [
			':idoil'=>$this->getidoil()
		]);
		
	}

	public function getOilsPage($page = 1, $itemsPerPage = 12)
	{
		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_oils a
			INNER JOIN tb_oil_facts b
			ON a.idoil = b.tb_oils_idoil
			ORDER BY a.desenglishname
			LIMIT $start, $itemsPerPage;
		");

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
		];
	}

	public function getOilsPageSearch($search, $page = 1, $itemsPerPage = 12)
	{
		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_oils a
			INNER JOIN tb_oil_facts b
			ON a.idoil = b.tb_oils_idoil
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
			SELECT * FROM tb_oils a 
			INNER JOIN tb_oil_facts b 
			ON a.idoil = b.tb_oils_idoil
			WHERE desurl = :desurl LIMIT 1;", [
			':desurl'=>$desurl
		]);

		$this->setData($results[0]);
	}

}

?>