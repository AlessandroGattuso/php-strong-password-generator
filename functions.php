<?php

  function setDictionary(){
    if(!empty($_SESSION['upper_letters'])){
      $_SESSION['dictionary'] .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if(!empty($_SESSION['numbers'])){
      $_SESSION['dictionary'] .= '0123456789';
    }
    if(!empty($_SESSION['symbols'])){
      $_SESSION['dictionary'] .= '!@$%&^§()*/^#';
    }
  }

  function generatePassword(){
    if(empty($_SESSION['chars_rep'])){
      if(!empty($_SESSION['password_length'])){
        for($i = 0; $i < $_SESSION['password_length']; ++$i){
          $_SESSION['password'] .= $_SESSION['dictionary'][rand(0, strlen($_SESSION['dictionary']) - 1)];
        }
      }
      else
        header('location:./index.php?error=invalid length');
    }
    else{
      if(!empty($_SESSION['password_length']) && $_SESSION['password_length'] < strlen($_SESSION['dictionary'])){
        $i = 0;
        while($i < $_SESSION['password_length']){
          $dict = $_SESSION['dictionary'];
          $char = $dict[rand(0, strlen($_SESSION['dictionary']) - 1)];
          if(!preg_match('/'.$char.'/i', $_SESSION['password'])){
            $_SESSION['password'] .= $char;
            ++$i;
          }
        }
      }
      else
        header('location:./index.php?error=invalid length');
    }
  }
  

?>