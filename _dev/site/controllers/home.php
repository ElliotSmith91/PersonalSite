<?php
return function($site, $pages, $page) {
  $alert = null;
  if(r::is('post') && get('submit')) {
    if(!empty(get('comments_notes'))){
      // honeypot for bots, go to home url and exit
      go($page->url());
      exit;
    }
    $data = array(
      'name'  => esc(get('name')),
      'email' => esc(get('email')),
      'message'  => esc(get('message'))
    );
    $rules = array(
      'name'  => array('required'),
      'email' => array('required', 'email'),
      'message'  => array('required', 'min' => 3, 'max' => 3000),
    );
    $messages = array(
      'name'  => 'Please enter a valid name',
      'email' => 'Please enter a valid email address',
      'message'  => 'Please enter a message more than 3 characters long'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('homeSections/contact/contactmail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'youremail@email.com',
        'from'    => 'youremail@email.com',
        'subject' => 'New contact request',
        'replyTo' => $data['email'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        $success = 'Thank you for getting in contact!';
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }
    }
  }
  $photographyImage= new Asset('assets/images/Photography_montage.jpg');
  $designImage = new Asset('assets/images/designbydawnscreenshot.jpg');
  return compact('alert', 'success', 'photographyImage', 'designImage');
};
