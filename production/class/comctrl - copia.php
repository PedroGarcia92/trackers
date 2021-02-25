
<?php
header('Content-Type: application/json');
$post=json_decode(file_get_contents("php://input"),true);
if (is_array($post)) {
	if (array_key_exists('option', $post)) {
		require_once "conctrl.php";
		$ob=new control($post["TimeZone"]);
		switch ($post["option"]) {
			case 'Programar':
				//unset($post["option"]);
				//$ob->listUser($post);
				$ob->enviarDatos($post);
        //print_r($post);

        //echo json_encode(array("success"=>true,
     //"message"=>"hi"));
				break;
			default:
				break;
		}
	}else{
		echo json_encode(array("success"=>false,
	"message"=>"Datos invalidos..."),JSON_PRETTY_PRINT);
	}
}else{
	echo json_encode(array("success"=>false,
	"message"=>"No se ha realizado petición con datos validados..."),JSON_UNESCAPED_UNICODE);
}


?>
