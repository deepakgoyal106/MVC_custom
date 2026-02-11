<?php
class Bootstrap{
    private $controller;
    private $action;
    private $request;

    //constructor
    public function __construct($request){
        //getting array due to rules in .htaccess
        $this->request = $request;
        //setting variable
        $this->controller = $this->request['controller'] == "" ?'home' : $this->request['controller'];
        $this->action = $this->request['action'] == '' ? 'index' : $this->request['action']; 
    }

    public function createController(){
        //check Class
        if(class_exists($this->controller)){
            $parents = class_parents($this->controller);
            //check extend
            if(in_array("Controller", $parents)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
                }
                else {
                    //method doesn't exist
                    echo('<h1>Method doesnot exist</h1>');
                    return;
                }
            }else{
                // base controller doesn;t exist
                 echo('<h1>Base Controller doesnot exist</h1>');
                 return;
            }
        }
        else{
            //  controller class doesn;t exist
             echo('<h1>Controller class doesnot exist</h1>');
             return;
            }
    }

}