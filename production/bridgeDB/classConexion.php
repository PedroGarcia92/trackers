<?php

class ConnectionDB{
// Definicion de atributos
private $host;
private $user;
private $password;
private $database;
private $conn;
 
public function __construct(){ 
//Constructor
require_once "config_vars.php";
$this->host=HOST;
$this->user=USER;
$this->password=PASSWORD;
$this->database=DATABASE;

}
public function CreateConnection(){
// Metodo que crea y retorna la conexion a la BD.
$this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);


 if($this->conn->connect_errno) {
  die("Error al conectarse a la base de datos: (" . $this->conn->connect_errno.") ". $this->conn->connect_error);

	
 }
 else{
 	echo "";
 }
}
public function conexDatabase(){
       $NewConn = new ConnectionDB();// se crea instancia a la clase ConnectionMySQL
      $NewConn=$this->CreateConnection();//Se crea una nueva conexion
      return $NewConn;
	} 
public function ExecuteQuery($sql){
/* Metodo que ejecuta un query sql
 Retorna un resultado si es un SELECT*/
 $result = $this->conn->query($sql);
 if($this->conn->error){
 	//echo "<br>";
	echo "<h4 align='center'><strong>".$this->conn->error."</strong></h4";
	$this->CloseConnection();
	exit(0);
 }else{
 return $result;
}
}
public function real_scape($sql){
/* Metodo que ejecuta un query sql */
 $result =mysqli_real_escape_string($this->conn,$sql);
 if($this->conn->error){
 	//echo "<br>";
	echo "<h4 align='center'><strong>".$this->conn->error."</strong></h4";
	$this->CloseConnection();
	exit(0);
 }else{
 return $result;
}
}
public function RS($sql){
/* Metodo que ejecuta un query sql */
 $result =mysqli_real_escape_string($this->conn,$sql);
 if($this->conn->error){
 	//echo "<br>";
	echo "<h4 align='center'><strong>".$this->conn->error."</strong></h4";
	$this->CloseConnection();
	exit(0);
 }else{
 return $result;
}
}

public function Query($sql){
/* Metodo que ejecuta un query sql
 Retorna un resultado si es un SELECT*/
 $result = $this->conn->query($sql);
 if($this->conn->error){
 	//echo "<br>";
	echo "<h4 align='center'><strong>".$this->conn->error."</strong></h4";
	$this->CloseConnection();
	exit(0);
 }else{
  return $this->conn->insert_id;
}
}

  
public function GetCountAffectedRows(){
/* Metodo que retorna la cantidad de filas
 afectadas con el ultimo query realizado.*/
 return $this->conn->affected_rows;
}
  
public function GetRows($result){
/*Metodo que retorna la ultima fila
 de un resultado en forma de arreglo.*/

 return $result->fetch_array(MYSQLI_BOTH); //fetch_array(MYSQLI_ASSOC);//fetch_row();fetch_array(MYSQLI_BOTH);
}

  
public function SetFreeResult($result){
//Metodo que libera el resultado del query.
 $result->free_result();
}
public function CloseConnection(){
//Metodo que cierra la conexion a la BD
 $this->conn->close();
}
  
}
 ?>