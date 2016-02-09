<?php

class Router{
    private $routes;
    private $replaceMask='/demchenko/shop/index.php/';
    public function __construct(){
        $routes = include_once(ROOT.'/config/routes.php');
        $this->routes = $routes;
        
    }
    
    public function GetURI(){
        $request = $_SERVER['REQUEST_URI'];
        $request = str_replace($this->replaceMask,'',$request);
        $request = trim($request,'/');
        return $request;
    }

        public function run(){
            //�������� ������ �� ������������
          $uri = $this->GetURI();
          //�������� ���������� ��������, ������� � ��� ����
       foreach($this->routes as $path=>$logic){
           //���� ������ ������������ ������ � ���������
           if($uri===$path){
               //����������� ������������ �� ����
               echo "Get logic 4 this link: ";
               echo "<br>{$logic}<br>";
               
               $segments = explode('/', $logic);
               $controllerName = array_shift($segments);
               
               $controllerName = ucfirst($controllerName)."Controller";
               $controllerFileName = $controllerName.'.php';
               
               echo "This is controller";
               echo $controllerName;
               echo "<br>";
               
               $actionName = array_shift($segments);
               $actionName = $actionName.'Action';
               
               echo "This is action<br>";
               echo $actionName;
               echo "<br>";
               
               exit();
               
           }
       }
    }
}
?>