<?php
class HomeController {
 public function index() {
 $user = new User('Шакиров Дмитрий');
 
 include ROOT. '/app/views/layouts/main.php';
 }
}
