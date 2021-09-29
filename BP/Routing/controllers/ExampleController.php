<?php

Class Example extends Controller {
  //Optional -- Runs querys inside controller - file = Database.php
  public static function printData(){
    print_r(self::query("SELECT * FROM table"));
  }
}
?>
