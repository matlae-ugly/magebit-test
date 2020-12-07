<?php

class email extends Controller
{
    //Render add page
    public function list() {
        $filter = $_GET['filter'] ? $_GET['filter'] : '';
        $provider = $_GET['provider'] ? $_GET['provider'] : '';
        $emails = (new EmailModel)->getEmails('', '');
        $providers = [];
        foreach ($emails as $email) {
          $domain = end(explode('@', $email['email']));
          if (!in_array($domain , $providers)) {
            $providers[] = $domain;
          }
        }
        $emails = (new EmailModel)->getEmails($filter, $provider);
        $this->render('list', ['emails' => $emails, 'providers' => $providers]);
    }

    //render view
    public function subscribe() {
        $this->render('subscribe');
    }

    //create new email
    public function create() {
        $email = new EmailModel();
        $email->setEmail($_POST['email']);
        echo $email->save();
        die();
    }

    //delete email
    public function delete(){
        $id = $_POST['id'];
        (new EmailModel)->delete($id);
    }
}
