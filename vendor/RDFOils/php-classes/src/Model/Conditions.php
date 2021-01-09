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

		$results = $sql->select("CALL sp_conditions_save(:idcondition, :desconditionname, :description, :desapplications, :desprimaryuses)", array(
			":idcondition"=>$this->getidcondition(),
			"desconditionname"=>$this->getdesconditionname(),
			"description"=>$this->getdescription(),
			"desapplications"=>$this->getdesapplications(),
			"desprimaryuses"=>$this->getdesprimaryuses()
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

}

?>