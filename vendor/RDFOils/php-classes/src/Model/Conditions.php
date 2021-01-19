<?php

namespace RDFOils\Model;

use \RDFOils\DB\Sql;
use \RDFOils\Model;

class Conditions extends Model {

	public static function listAll()
	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_conditions ORDER BY desconditionname");
	}

	public function save()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_conditions_save(:idcondition, :desconditionname, :description, :desapplications, :desprimaryuses, :desURL)", array(
			":idcondition"=>$this->getidcondition(),
			"desconditionname"=>$this->getdesconditionname(),
			"description"=>$this->getdescription(),
			"desapplications"=>$this->getdesapplications(),
			"desprimaryuses"=>$this->getdesprimaryuses(),
			"desURL"=>$this->getdesURL()
		));

		$this->setData($results[0]);
	}

	public function get($idcondition)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_conditions WHERE idcondition = :idcondition", [
			':idcondition'=>$idcondition
		]);

		$this->setData($results[0]);
	}

	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_conditions WHERE idcondition = :idcondition", [
			':idcondition'=>$this->getidcondition()
		]);
	}

	public function getConditionsPage($page = 1, $itemsPerPage = 16)
	{
		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_conditions
			ORDER BY desconditionname
			LIMIT $start, $itemsPerPage;
		");

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
		];
	}

	public function getConditionsPageSearch($search, $page = 1, $itemsPerPage = 16)
	{
		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_conditions
			WHERE desconditionname LIKE :search
			ORDER BY desconditionname
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
			INNER JOIN tb_oil_facts aa ON a.idoil = aa.tb_oils_idoil
			JOIN tb_oils_conditions b ON b.tb_oils_idoil = a.idoil
			JOIN tb_conditions c ON c.idcondition = b.tb_conditions_idcondition
			WHERE c.desURL = :desurl
			ORDER BY c.desconditionname;", [
			':desurl'=>$desurl
		]);

		// return $results;

		$this->setData($results);
	}

	public function getBlendFromURL($desurl)
	{
		$sql = new Sql();

		$results = $sql->select("
			SELECT * FROM tb_blends a
			INNER JOIN tb_blends_facts aa ON a.idblend = aa.tb_blends_idblend
			JOIN tb_blends_conditions b ON b.tb_blends_idblend = a.idblend
			JOIN tb_conditions c ON c.idcondition = b.tb_conditions_idcondition
			WHERE c.desURL = :desurl
			ORDER BY c.desconditionname;", [
			':desurl'=>$desurl
		]);

		// return $results;

		$this->setData($results);
	}

}

?>