<?php
   
   $dummy_data = [
       ['email' => 'noemi@gmail.com', 'password' => '12345'],
       ['email' => 'nde@gmail.com', 'password' => 'nde'],
       ['email' => 'yoo@gmail.com', 'password' => 'yooG'],
       ['email' => 'camilamougang@gmail.com', 'password' => '12345'],
   ];

   //Submittig the form
   $email = $_POST['email'];
   $password = $_POST['password'];

   foreach ($dummy_data as $data) {
       if ($data['email'] === $email && $data['password'] === $password) {
           echo 200;
           exit;
       }
   }
