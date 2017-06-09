<?php 
require 'vendor/autoload.php';
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		$objId=$_GET['objid'];
		$item = conectarBD()->findOne(['_id'=>new MongoDB\BSON\ObjectID($objId)]);
		$item = iterator_to_array($item);
		$obligatorios=$item['Muestra']['obligatorios'];
		$opcionales=$item['Muestra']['opcionales'];
		require 'view_author.php';
	}
	function conectarBD(){
		//Base datos
		try {
	        $connection = new MongoDB\Client;
	        $bd = 'MonitoreoAgua';
	        $collection='puntosMuestreo';
	        $database = $connection->$bd;
	        $collection = $database->$collection;
	    } catch (MongoConnectionException $e) {
	        echo "Error: " . $e->getMessage();
	    }
	    return $collection;
	}

 ?>