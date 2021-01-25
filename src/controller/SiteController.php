<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/OrdersDAO.php';

class SiteController extends Controller {

    private $ordersDAO;

    function __construct() {
        $this->ordersDAO = new OrdersDAO();
    }

    public function index() {

        $this->set('title', 'Home');
    }

    public function tutorial() {

        $this->set('title', "Let's Build");
    }

    public function shop() {

      $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
      if($contentType === "application/json") {
        $content = trim(file_get_contents("php://input"));
        $data = json_decode($content, true);

        $placedOrder = $this->ordersDAO->placeORder($data);
          if (!$placedOrder) {
            $errors = $this->orderDAO->validate($data);
            $errors['error'] = 'Er is een fout opgetreden';
            echo json_encode($errors);
          } else {
            var_dump(`succes`);
          }
      exit();
    }

      if (!empty($_POST['action'])) {
        if ($_POST['action'] == 'placeOrder') {
          $data = array(
            'materials' => $_POST['materials'],
            'first_name' => $_POST['first_name'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'street' => $_POST['street'],
            'number' => $_POST['number'],
            'zip' => $_POST['zip'],
            'city' => $_POST['city'],
            'payment' => $_POST['payment']
          );
          $order = $this->ordersDAO->placeOrder($data);
          if (!$order) {
            $errors = $this->ordersDAO->validate($_POST);
            $this->set('errors', $errors);
          }
        }
      }

      $this->set('title', 'Building Box');
    }
}
