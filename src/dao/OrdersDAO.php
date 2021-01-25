<?php


require_once (__DIR__ . '/DAO.php');

class OrdersDAO extends DAO {

  public function placeOrder($data) {
    $errors = $this->validate($data);
    if(empty($errors)) {
      $sql = "INSERT INTO `orders` (`materials`, `first_name`, `name`, `email`, `street`, `number`, `zip`, `city`, `payment`) VALUES (:materials, :first_name, :name, :email, :street, :number, :zip, :city, :payment)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':materials', $data['materials']);
      $stmt->bindValue(':first_name', $data['first_name']);
      $stmt->bindValue(':name', $data['name']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':street', $data['street']);
      $stmt->bindValue(':number', $data['number']);
      $stmt->bindValue(':zip', $data['zip']);
      $stmt->bindValue(':city', $data['city']);
      $stmt->bindValue(':payment', $data['payment']);
      $stmt->execute();
    }
    return false;
  }

  public function validate($data) {
    $errors = [];
        if (empty($data['materials'])) {
            $errors['materials'] = "Gelieve minstens één materiaal te kiezen.";
        }
        if (empty($data['first_name'])) {
            $errors['first_name'] = "Gelieve een naam in te vullen.";
        }
        if (empty($data['name'])) {
            $errors['name'] = "Gelieve een familienaam in te vullen.";
        }
        if (empty($data['street'])) {
            $errors['street'] = "Gelieve een straatnaam in te vullen.";
        }
        if(empty($data['number'])) {
            $errors['number'] = "Gelieve een huisnummer in te vullen.";
        }
        if(empty($data['zip'])) {
            $errors['zip'] = "Gelieve een correcte postcode in te vullen.";
        }
        if(empty($data['city'])) {
          $errors['city'] = "Gelieve je woonplaats (gemeente/ stad) in te vullen.";
        }
        if(empty($data['payment'])) {
          $errors['payment'] = "Gelieve een betalingsmethode te kiezen.";
        }
    }
}
