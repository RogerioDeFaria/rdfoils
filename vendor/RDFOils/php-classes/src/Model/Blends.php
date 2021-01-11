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

		$results = $sql->select("CALL sp_blends_save(:idblend, :desenglishname, :desportuguesename, :descomponents, :description, :desdilution, :dessecurity, :desapplications, :desbenefit, :desbenefittype, :desprimaryuses, :inaromatic_use, :intopical_use, :internal_use, :desphoto1, :desphoto2)", array(
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
			":desphoto2"=>$this->getdesphoto2()
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

}

?>