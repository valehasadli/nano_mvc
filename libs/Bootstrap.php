<?php

class Bootstrap {
    

    function __construct() 
    {
        $url = isset($_GET['url']) ? $_GET['url'] : NULL;
        $url = rtrim($url, "/");
        $url = explode("/", $url);
        


        // eger basic url sonra heçne yazılmayıbsa avtomatik olaraq index controllerinin index methoduna yönlendirir...
        if (empty($url[0]))
        {

            require 'controllers/site.php';
            
            $controller = new Site();
            $controller->index();
            
            return FALSE;
            
        }

        
        $file = 'controllers/' . $url[0] . '.php'; // index controllerinin pathi teyin edilir
        
        // eger bele bir fayl varsa fayl require olunur yoxdursa errora yönledirilir...

        if (file_exists($file)) {
            require $file;
        } else {
            $this->Error();
            return FALSE;
        }

        $controller = new $url[0]; // route hazırlanır ...
        $controller->loadModel($url[0]); // model automatik şekilde yüklenir ...

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            } else {
                $controller->index();
            }
        }
    }
    public function Error()    
    {
        require 'controllers/error.php';
        $controller = new Error;
        $controller->error();
        return FALSE;
    }


}
