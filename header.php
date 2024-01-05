<?php session_start(); 
include ('function.php');

$logout = $_GET['logout'] ?? null;

if ($logout) {
    unset($_SESSION['auth']);
}

$username = $_POST['name'] ?? null;
$password = $_POST['pass'] ?? null;
$registration = $_POST['registration'] ?? null;

if ($registration && $username && $password) {
    $birthday = $_POST['birthday'] ?? null;
    if (addUser($username, $password, $birthday)){
        header("Location: index.php");
    }
}

if (!isset($_COOKIE['promotimer'])) {
    setcookie("promotimer", time()+86400, time()+86400);
}

if (checkPassword($username, $password)) {

    // Пишем в сессию информацию о том, что мы авторизовались:
    $_SESSION['auth'] = true; 
    
    // Пишем в сессию логин пользователя
    $_SESSION['login'] = $username; 

}

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 

    <title>SPA</title>
</head>
<body>
      
            <header class="mb-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">        
                        <a class="navbar-brand" href="index.php">SPA салон</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#services">Услуги</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#promo">Акции</a>
                                </li>
                            </ul>
                            <?php if (getCurrentUser()): ?>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= getCurrentUser(); ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="login.php">Личный кабинет</a>
                                        <a class="dropdown-item" href="/?logout=1">Выйти</a>
                                    </div>                              
                                </div>
                            <?php else: ?>    
                                <div>
                                    <a href="login.php" class="btn btn-primary my-2 my-sm-0">Личный кабинет</a>
                                </div>
                            <?php endif; ?>    
                        </div>
                    </div>
                </nav>  
            </header>
 