<?php
class HomeController {
    public function index() {
        $user = new User('Пётр Кузнецов');
        
        include ROOT . '/app/views/layouts/main.php';
    }
}
