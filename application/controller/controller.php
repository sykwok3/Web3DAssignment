<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageMethod = null)
	{
		// echo $pageURI;
		$this->load = new Load();
		$this->model = new Model();
		// Determine what page you are on
		$this->$pageMethod();
	}

	// Load the home page mmethod — this method is loaded by default — http://localhost:8888/3D_Apps_2019/lab9/index.php/
	// The view here is my Coca Cola Virtual Museum, which s simply a repository of all the things we have done from lab 1 to Lab 8
    function home()
	{
		// At the moment data is input from a JSON file directly from the getJsonData.js file using the JQuery AJAX method .getJson()
		// $.getJSON('../application/model/data.json', function(jsonObj) {handler goes here} — The URL here should really be a path to this home() method.
		// Then you would:
		
		// Insert code to access a method in the Model class that returns a PHP array with the data you need, e.g.
		// $data = $this->model->apiGetJsonMuseumData();

		$data = $this->model->dbGetData2();
		$this->load->view('viewCocaCola', $data);
		// echo json_encode($data);
		// Echo the data out to the browser and trap it in the $.getJSON() handler and inject it into the view as before
		// echo ($data);

	}



	function apiCreateTable2()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable2();
		// $this->load->view('viewMessage', $data);
	}
	function apiInsertData2()
	{
		$data = $this->model->dbInsertData2();
	   	// $this->load->view('viewMessage', $data);
	}  
	function apiGetData2()
	{
		$data = $this->model->dbGetData2();
		// $this->load->view('view3DAppData', $data);
	}  	

	
	
}
?>    