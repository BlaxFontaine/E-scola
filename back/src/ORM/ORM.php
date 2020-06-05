<?php

// define('ACTION_CREATE', 'create');
// define('ACTION_READ', 'read');
// define('ACTION_UPDATE', 'update');
// define('ACTION_DELETE', 'delete');
// define('ACTION_ALL', 'all');


class ORM{

	public $connection;
	private $object;

	public function __construct(){


	}

	public function load_mysql()
	{	//connection à la bdd
		$this->connection = new PDO("mysql:host=127.0.0.1;dbname=e_scola;port=3306",'root','');

      //Vérification de la connexion
		if ($this->connection==null)
		{
			echo "Échec de la connexion : %s\n";
		}
	}

	//setter de l'objet
	public function setObject($_object)
	{
		$this->object=$_object;
	}

	//getter de l'objet
	public function getObject()
	{
		return $this->object;
	}

	//getter de la connection
	public function getConnection()
	{
		return $this->connection;
	}
	//fermer la connection
	public function Connection_close()
	{
		$this->connection=null;
	}
	//générer une requête à la bdd
	public function generate_query($_action)
	{
		//recupère le nom de la table à partir du nom de la classe.
		$table = strtolower(get_class($this->object))."s";
		//liste des colonnes.
		$attributes = "";
		//lister les propriétés de l'objet
		$properties = $this->object->properties();
		//lister le nom des propriétés
		$properties_names = $this->object->properties_names();
  		//récupérer le nombre d'attributs
		$nb_attribute = count($properties_names);

		foreach ($properties_names as $key => $value)
		{
			if($key != 'id')
      			//créer la chaine de colonnes à partir des attributs
				$attributes .= ($key < $nb_attribute - 1) ? $value . "," : $value;
		}

		$values = "";
		$settings = "";
		$object_id = "";

		foreach ($properties as $key => $value)
		{
    		// récupérer l'id
			if($key == 'id') $object_id = $value;

			if($key != 'id')
			{
      			// lister les valeurs
				$values .= ($key != end($properties_names))
				? "'".$value."'," : "'".$value."'";

      			// lister les assignations
				$settings .= ($key != end($properties_names))
				? $key."='".$value."'," : $key."='".$value."'";

			}
		}

		// construire la requête en fonction de l'action
		switch ($_action)
		{
			case 'ACTION_CREATE':
			return  "INSERT INTO ".$table." (".$attributes.") VALUES (".$values.");";
			break;

			case 'ACTION_READ':
			return  "SELECT * FROM ".$table." WHERE id = ".$object_id.";";
			break;

			case 'ACTION_UPDATE':
			return  "UPDATE ".$table." SET ".$settings." WHERE id = ".$object_id.";";
			break;

			case 'ACTION_DELETE':
			return  "DELETE FROM ".$table." WHERE id = ".$object_id.";";
			break;

			case 'ACTION_ALL':
				if($table=='users'){
				return "SELECT * FROM ".$table."ORDER BY lastname DESC;";
				break;
				}
				

			default:
			return "";
			break;
		}


	}

	public function execute_and_result($_action)
	{
		$result = null;

		switch ($_action)
		{
			case 'ACTION_CREATE':
			$this->load_mysql();
			$query = $this->generate_query($_action);
			$sthc = $this->connection->prepare($query);
			$result = $sthc->execute();
			$this->Connection_close();
			return $result;
			break;

			case 'ACTION_READ':
			$this->load_mysql();
			$query = $this->generate_query($_action);
			$sthr = $this->connection->prepare($query);
			$sthr->execute();
			$result = $sthr->fetch(PDO::FETCH_ASSOC);
			$this->Connection_close();
			return $result;
			break;

			case 'ACTION_UPDATE':
			$this->load_mysql();
			$query = $this->generate_query($_action);
			$sthu = $this->connection->prepare($query);
			$result = $sthu->execute();
			$this->Connection_close();
			return $result;
			break;

			case 'ACTION_DELETE':
			$this->load_mysql();
			$query = $this->generate_query($_action);
			$sthd = $this->connection->prepare($query);
			$result = $sthd->execute();
			$this->Connection_close();
			return $result;
			break;

			case 'ACTION_ALL':
			$this->load_mysql();
			$query = $this->generate_query($_action);
			$sth = $this->connection->prepare($query);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			$this->Connection_close();
			return $result;
			break;

			default:
			$this->Connection_close();
			return "";
			break;
		}
	}



}
?>