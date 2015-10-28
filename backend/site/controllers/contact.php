<?php

return function($site, $pages, $page) {

  $alert = null;

  if(get('submit')) {

    $data = array(
      'name'  => get('name'),
      'email' => get('email'),
      'text'  => get('text')
    );

    $rules = array(
      'name'  => array('required'),
      'email' => array('required', 'email'),
      'text'  => array('required', 'min' => 3, 'max' => 3000),
    );

    $messages = array(
      'name'  => 'Entrer un nom et prénom valide',
      'email' => 'Entrer une adresse mail valide',
      'text'  => 'Votre texte doit comprendre au moins dix caractères'
    );

    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;

    // the data is fine, let's send the email
    } else {

      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);

      // build the email
      $email = email(array(
        'to'      => 'sim.leyder@gmail.com',
        'from'    => $data['email'],
        'subject' => 'Tu viens de recevoir un message de la part d’un visiteur !',
        'replyTo' => $data['email'],
        'body'    => $body
      ));

      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        $sended = true;

        return compact('sended');
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }

    }

  }

  return compact('alert');

};
