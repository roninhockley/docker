<?php

class User extends Db_object {

protected static $db_table = "users";
protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name');
public $id;
public $username;
public $first_name;
public $last_name;
public $password;

public static function verify_user($username, $password){
	global $database;
	$username = $database->escape_string($username);
	$password = $database->escape_string($password);

	$sql  = "SELECT * FROM users WHERE ";
	$sql .= "username = '{$username}' ";
	$sql .= "AND password = '{$password}' ";
	$sql .= "LIMIT 1";

	$the_result_array = self::find_this_query($sql);

	return !empty($the_result_array) ? array_shift($the_result_array) : false;
}

protected function properties(){

	$properties = array();

	foreach (self::$db_table_fields as $db_field) {
		if(property_exists($this, $db_field)) {

			$properties[$db_field] = $this->$db_field;  // use $ in 'this' db_field because this is not a property, but a created variable of the foreach loop  
		}

	}
	return $properties;
}

protected function clean_properties(){
	global $database;

	$clean_properties = array();

	foreach($this->properties() as $key =>$value){

		$clean_properties[$key] = $database->escape_string($value);
	}
	return $clean_properties;

}

public function save(){

	return isset($this->id) ? $this->update() : $this->create();

}

// Create method
public function create() {
	global $database;

	//$properties = $this->properties();
	$properties = $this->clean_properties();



	//$sql =  "INSERT INTO ".self::$db_table. " (username, password, first_name, last_name)";
	$sql =  "INSERT INTO ".self::$db_table. "(".  implode(",", array_keys($properties))   .")";
	$sql .= " VALUES('" .implode("','", array_values($properties)) ."')";
	//$cnt = 0;
	//$len = count($properties);
	//echo "cnt=".$cnt." and len =".$len."<br>";
	//foreach (array_values($properties) as $value) {
		//$sql .=  "'".$value."'";
		//if ($cnt != $len-1)
			//$sql .= ", ";
		//else
			//$sql .= ")";
		//$cnt++;
    //}
    //echo $sql;
    // die();
	
	
	//$sql .= $database->escape_string($this->password)."', '";
	//$sql .= $database->escape_string($this->first_name)."', '";
	//$sql .= $database->escape_string($this->last_name)."')";

	return $database->query($sql)? true : false;

	//if($database->query($sql)){
		//return true;
	//} else {
		//return false;
	//}
}

// Update method
public function update() {
	global $database;

	//$properties = $this->properties();
	$properties = $this->clean_properties();

	$property_pairs = array();

	foreach ($properties as $key => $value){

		$property_pairs[] = "{$key}='{$value}'";
	}

	$sql  = "UPDATE ".self::$db_table." SET "; 
	$sql .= implode(", ", $property_pairs);
	$sql .= " WHERE id= "    . $database->escape_string($this->id);

	$database->query($sql);
		
	return (mysqli_affected_rows($database->connection)==1) ? true : false;

  /*$sql =  "INSERT INTO ".self::$db_table. "(".  implode(",", array_keys($properties))   .")";
	$sql .= " VALUES('" .implode("','", array_values($properties)) ."')"; */

	//echo "<br>properties =<br><pre>";
	//print_r ($properties);
	//echo "</pre><br><br>";
	//$i = 0;
	//$len = sizeof($properties);
	//$sql  = "UPDATE ".self::$db_table." SET "; 
	//foreach (array_keys($properties) as $property){
		//$sql .= $property."= '".$database->escape_string($properties[$property]);
		//$sql .= ($i < ($len - 1)) ? "', " : "' ";
		//$i++;
	//}
	//$sql .= "WHERE id="    . $database->escape_string($this->id) ." LIMIT 1" ;

	//echo ("sql = ".$sql);


	//$database->query($sql);
	//if($database->query($sql)){
		//return true;
	//} else {
		//return false;
	//}
		
	//return (mysqli_affected_rows($database->connection)==1) ? true : false;
	
}

// Delete method
public function delete() {
	global $database;

	$sql =  "DELETE FROM ".self::$db_table;
	$sql .= " WHERE id= " . $database->escape_string($this->id);
	$sql .= " LIMIT 1";

	$database->query($sql);
		
	return (mysqli_affected_rows($database->connection)==1) ? true : false;
	
}


} // End of Class User

?>