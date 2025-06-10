<?php
class AboutController {
    public function index() {
        $user = new User('Пётр Кузнецов');
        
        include ROOT . '/app/views/layouts/main.php';
    }
}
