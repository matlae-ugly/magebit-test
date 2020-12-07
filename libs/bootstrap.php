<?php
class Bootstrap {

    public function __construct()
    {
        //Getting the URL params as array where $url[0] is a controller name and $url[1] is a controller method
        if ($_GET['url'] == NULL) {
            $url = explode('/', env('defaultRoute'));
        } else {
            $url = explode('/', rtrim($_GET['url'],'/'));
        }

        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
            $controller = new $url[0];

            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        } else {
            echo "404 not found";
        }
    }

}
