<?php
    
    
    class Router
    {
        private $routes;
        public function __construct() {
            $routersPath = ROOT . '/config/routes.php';
            $this->routes = include($routersPath);
        }
        
        /**
         * Returns request string
         * @return string
         */
        private function getURI() {
            if (!empty($_SERVER['REQUEST_URI'])) {
                return trim($_SERVER['REQUEST_URI'], '/');
            }
        }
        
        /**
         * Page load function
         */
        public function run() {
            // Get the query string
            $uri = $this->getURI();
    
            // Check for such a request in routes.php
            foreach ($this->routes as $uriPattern => $path) {
    
                // Compare $ uriPattern and $ uri
                if (preg_match("~$uriPattern~", $uri)) {
    
    
                    // Get the inner path from the outer one according to the rule
                    $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
    
                    // Determine which controller and action is handling the request
                    $segments = explode('/', $internalRoute);
                    
                    $controllerName = array_shift($segments) . 'Controller';
                    $controllerName = ucfirst($controllerName);
                    
                    $actionName = array_shift($segments) . 'Action';
                    
                    $parameters =$segments;
                    
                    
                    $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                    
                    if (file_exists($controllerFile)) {
                        include_once ($controllerFile);
                    }
    
                    // Create an object, call the action method
                    $controllerObject = new $controllerName;
                    
                   
                    $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                    
                    
                    if ($result != null) {
                        break;
                    }
                }
            }
            
        }
        
    }