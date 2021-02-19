
<?php
/**
 *
 */
 require_once "model.php";
class control extends model
{
	function __construct($timeZone){
		//$ob = new	model();
		$this->con=$this->getConection();
		if ($timeZone!='') {
			date_default_timezone_set($timeZone);
		}

	}


	public function mensaje($p){
		echo json_encode($p);
	}

public function enviarDatos($p){
	unset($p["option"]);
	$rsp=$this->datos($p);
	if (array_key_exists('error', $rsp)) {
			$this->mensaje(array("success"=>false,"message"=>$rsp["error"]));
	}elseif (array_key_exists('success', $rsp)&&$rsp["success"]==true) {
		$this->mensaje(array("success"=>true,"message"=>"Los datos se guardaron con exito"));
	}else{
			$this->mensaje(array("success"=>false,"message"=>"No se guardaron los datos"));
	}
}
}

?>
