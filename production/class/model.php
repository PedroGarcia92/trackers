
<?php
class model
{

	function __construct()
	{	}
	protected function getConection(){
		require_once "../bridgeDB/config_vars.php";
		$conn = new mysqli(HOST, USER,PASSWORD,DATABASE);

		return $conn;
	}
	protected function datos($p){
		$rspData=[];
		$estimacion=strtotime('now');
		//$p["Estimacion"]
		 $query="INSERT INTO `planners` (`Estimacion`,`Folio`,`Cliente`,`Proveedor`";
		 $query.=",`TipoDeUnidad`,`TarifaIva`,`Maniobras`,`Estadia`,`NombreOperador`,`CelularOperador`";
		 $query.=",`Tractor`,`PlacasTractor`,`NumRemolque1`,`PlacasRemolque1`,`NumRemolque2`,`PlacasRemolque2`";
		 $query.=",`DomicilioDeCarga`,`CitaDeCarga`,`DomicilioDescarga`,`CitaDescarga`,`Reporte Tms`,`Factura`,`Status`)";
		 $query.="VALUES ('".$estimacion."','".$p["Folio"]."','".$p["Cliente"]."','".$p["Proveedor"];
		 $query.="','".$p["TipoDeUnidad"]."','".$p["TarifaIva"]."','".$p["Maniobras"]."','".$p["Estadia"];
		 $query.="','".$p["NombreOperador"]."','".$p["CelularOperador"]."','".$p["Tractor"];
		 $query.="','".$p["PlacasTractor"]."','".$p["NumRemolque1"]."','".$p["PlacasRemolque1"];
		 $query.="','".$p["NumRemolque2"]."','".$p["PlacasRemolque2"]."','".$p["DomicilioDeCarga"];
		 $query.="','".date('Y-m-d H:i:s',strtotime($p["CitaDeCarga"]))."','".$p["DomicilioDescarga"]."','".date('Y-m-d H:i:s',strtotime($p["CitaDescarga"]))."','".$p["Tms"]."','".$p["Factura"]."','".$p["activoCerrado"]."');";
		 $result=$this->con->query($query);
		 if ($this->con->error) {
			 //print_r($this->con);
			 $rspData["error"]=$this->con->error;
			return $rspData;
		 }else{
		if ($this->con->affected_rows>0) {
						$rspData["success"]=true;
			return $rspData;
		}else{
				$rspData["success"]=false;
			return $rspData;
		}
	}




	}

}

?>
