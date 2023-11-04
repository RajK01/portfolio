<?php 
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
if (session_id()) {
    session_destroy();
}
session_start();
$_SESSION['config'] = json_decode(file_get_contents('config.json'));

        $request = $_SERVER['REQUEST_URI'];
        $_SESSION['config']->Request_URI = $request;
        $uri = explode('/',$request);
        
        $uri = array_filter($uri);
        $uri = array_values($uri);
        $viewDir = '/public/'; 
        if(count($uri)>0){
            $file = $uri[0];
            
            $file_url = __DIR__ . $viewDir . "$file.php";
            
            if(file_exists($file_url)){
                require $file_url;
            }     
            else{
                http_response_code(404);
                require __DIR__ . $viewDir . '404.php';
            } 
        }
        else {
            require __DIR__ . $viewDir . 'home.php';
        }
?> 