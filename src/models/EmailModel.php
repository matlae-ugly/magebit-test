<?php

class EmailModel extends EmailAbstractModel {

    public static function delete($id)
    {
        $del = self::$con->prepare("DELETE FROM emails WHERE id = ?");
        $del->execute([$id]);
    }

    public static function getEmails($filter, $provider = '')
    {
        if (empty($filter)) {
          $filter = 'timestamp';
        }
        if (!empty($provider)) {
          $provider = substr_replace($provider, '%', 0, 0);
          $emails = self::$con->prepare('SELECT * FROM emails WHERE email LIKE :provider ORDER BY '.$filter);
          $emails->bindParam(':provider', $provider, PDO::PARAM_STR);
          $emails->execute();
        } else {
          $emails = self::$con->query('SELECT * FROM emails ORDER BY '.$filter);
        }

        return $emails->fetchAll();
    }

    public function save() {
      if ($this->validateEmail($this->getEmail())) {
        $insert = 'INSERT INTO emails (email) VALUES (?)';
        $check = self::$con->prepare($insert);
        $check->execute([$this->getEmail()]);

        if ($check) {
            return 'true';
        } else {
            return $check->errorCode();
        }
      } else {
        return $this->validateEmail($this->getEmail());
      }
    }

    public function validateEmail($email) {
      if ($email === "") {
        return 'Email address is required';
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Please provide a valid e-mail address';
      }
        return true;
    }
}
