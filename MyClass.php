<?php
// This is a simple class created to deal with database manipulation for this simple application
class Example {
	
	public $dbh;
	
	public function __construct(){
		// initialise PDO object to connect and query database
		$this->dbh = new PDO('mysql:host=localhost;dbname=dbname', 'dbusername', 'dbpassword');	
	}
	
	// method used to get the data used to load index.php dataTable
	public function fetch_active_table_data(){
		$query = "SELECT id, name, location, age, occupation FROM smsgrupp WHERE account_status = ?";
		$stmt = $this->dbh->prepare($query);
		$stmt->execute(array("0"));
		
		$active_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		return $active_data;
	}
	
	// method used to add a new entry into the database, called from add-entry.php
	public function add_new_account($name, $location, $age, $occupation, $account_status){
		$query = "INSERT INTO smsgrupp (name, location, age, occupation, account_status) VALUES (?,?,?,?,?)";
		$stmt = $this->dbh->prepare($query);
		$stmt->execute(array($name, $location, $age, $occupation, $account_status));
		
	}
} 
