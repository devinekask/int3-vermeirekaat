<?php 

require_once __DIR__ . '/Controller.php'; 

class SiteController extends Controller {
    
    // private $xxDAO; 

    function __construct() {
        // $this->xxDAO = new xxDAO();
    }

    public function index() {

        $this->set('title', 'Home'); 
    }
}