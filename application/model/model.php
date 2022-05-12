<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;

	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}

	public function dbCreateTable2()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Obj_Description (Id INTEGER PRIMARY KEY, modelDescription TEXT)");
			return "table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}


	//already inserted data are commented out
	public function dbInsertData2()
	{
		try{
			$this->dbhandle->exec(
				// "INSERT INTO Obj_Description (Id, modelDescription) 
			    //   	VALUES (9, 'It was 1886, and in New York Harbour, workers were constructing the statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. 	One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special.  
			 	// So Jacobs Pharmacy put it on sale for five cents (about 3p) a glass.'); ".
				"INSERT INTO Obj_Description (Id, modelDescription) 
				    VALUES (10,
				'Crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon 
				and lime flavoured soft drink and is sold in more than 190 different countries. 
				Sprite Zero, part of Coca Colas no sugar Zero range, 
				offers the delicious lemon lime taste of Sprite without the sugar or calories.'); ".
				"INSERT INTO Obj_Description (Id, modelDescription) 
				    VALUES (12,
				'The modern Fanta was created in Naples, Italy in 1955. It was produced using locally sourced citrus.'); "
				);
			return "Model Description inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}


	public function dbGetData2(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Obj_Description';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['modelDescription'] = $data['modelDescription'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	
	
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'TEST ABC',

		);
	}

	

}
?>