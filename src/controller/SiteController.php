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

    public function tutorial() {

        $this->set('title', "Let's Build");
    }

    public function shop() {

      $this->set('title', 'Building Box');
    }
}
