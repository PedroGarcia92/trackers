
<?php
header('Content-Type: application/json');
$post=json_decode(file_get_contents("php://input"),true);
if (is_array($post)) {
	if (!empty($post)) {
		require_once "conctrl.php";
		$ob=new control($post["TimeZone"]);
		$ob->enviarDatos($post);
		/*switch ($post["option"]) {
			case 'Programar':
				$ob->enviarDatos($post);
				break;
			default:
				break;
		}*/
	}else{
		echo json_encode(array("success"=>false,
	"message"=>"Datos invalidos..."),JSON_PRETTY_PRINT);
	}
}else{
	echo json_encode(array("success"=>false,
	"message"=>"No se ha realizado petición con datos validados..."),JSON_UNESCAPED_UNICODE);
}


?>
