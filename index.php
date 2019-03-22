<?php
    use Controller\CollectionController;
    use Controller\RouteController;
    use Session\Session;
    
    require('src\Autoloader.class.php');
    Autoloader::register();
    
    $session = new Session();
    if(isset($_GET['action'])){
        $route = new RouteController();
        $content = $route->route($_SERVER['REQUEST_METHOD'],$_GET['action'],$session); 
        include_once 'src/Vue/template.php';
    } else {
        $content = 'Acceuil';
        include_once 'src/Vue/template.php';
    }
?>