<?php

if (array_key_exists('controller',$_GET) && array_key_exists('method',$_GET))
{
    

     if($_GET['controller'] === null || $_GET['method'] === null)
    {
        include_once('controllers/homeController.php');
        $controller = new HomeController();
        $controller -> show();
    }
    else
    {
        switch ($_GET['controller']) 
        {
            case 'home':
            include_once('controllers/homeController.php');
            $controller = new HomeController();
            break;
        case 'post':
            include_once('controllers/postController.php');
            $controller = new PostController();
            break;
        default:
            include_once('controllers/notFoundController.php');
            $controller = new NotFoundController();
            $controller->show();
            exit;
        }
    
        switch ($_GET['method']) 
        {
            case 'show':
                $controller->show();
                break;
            case 'list':
                $controller->list();
                break;
            default:
                $controller->show();
                break;
        }
    }
}
else
{
    include_once('controllers/homeController.php');
    $controller = new HomeController();
    $controller -> show();
}
