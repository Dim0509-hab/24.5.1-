<!DOCTYPE html>
<html>
<head>
    <title>Визитка <?php echo $user->name; ?></title>
</head>
<body>
    <header>
        <h1>Визитка <?php echo $user->name; ?></h1>
        <nav>
            <a href="?controller=home">Главная</a>
            <a href="?controller=about">Обо мне</a>
            <a href="?controller=contacts">Контакты</a>
            <a href="?controller=dreams">Мечты</a>
        </nav>
    </header>
    
    <?php 
    $viewFile = ROOT . '/app/views/' . 
                strtolower(basename(get_called_class(), 'Controller')) . 
                '/index.php';
    
    if (file_exists($viewFile)) {
        include $viewFile;
    }
    ?>
    
    <footer>
        &copy; 2025 <?php echo $user->name; ?>
    </footer>
</body>
</html>
