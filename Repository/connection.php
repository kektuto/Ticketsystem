<?php
//namespace Ticketsystem\Repository;
/**
 * Klasee Datenuebertragung erstellen
 */
class Connection {

	//Eigenschaften der Klasse Datenuebertragung deklarieren
	private $servername;
	private $user;
	private $pw;
	private $database;
	private $status;
	private $termine = array();
	private $db;

	public function __construct($servername, $user, $pw, $database){
		$this -> connectToDatabase($servername, $user, $pw, $database);
	}

	/**
	* Methode um die Verbindungsdaten zu bekommen und eine Verbindung zur Datenbank herzustellen
	* @param	varchar	$servername, $user, $pw, $database VerbindungsDaten bekommen und verbinden
	*/
	public function connectToDatabase($servername, $user, $pw, $database){
			$db = mysqli_connect($servername, $user, $pw, $database);
			$this->db = $db;
			if(!$db)
			{
 			 $this->status = exit("Verbindungsfehler: ".mysqli_connect_error());
			}
			else {
				$this->status = 'Verbindung erfolgreich ';
			}
	}

	/**
	 * Methode um den servername zu setzen
	 * @param	varchar	$servername	Name des Datenbankservers
	 */
	public function setServername($servername){
		$this->servername = $servername;
	}

	/**
	 * Methode um den username zu setzen
	 * @param	varchar	$user	Name des users
	 */
	public function setUser($user){
		$this->user = $user;
	}

	/**
	 * Methode um den pw zu setzen
	 * @param	varchar	$pw	Passwort der Datenbank
	 */
	public function setPw($pw){
		$this->pw = $pw;
	}

	/**
	 * Methode um den Datenbankname zu setzen
	 * @param	varchar	$database	Name der Datenbank
	 */
	public function setDatabase($database){
		$this->database = $database;
	}
	public function getDatabase(){
		return $this->db;
	}

	/**
	 * Methode um den Status der Verbindung zur Datenbank zu bekommen
	 * @return	$status
	 */
	public function getStatus($status){
		return $this->status;
	}
}
?>
