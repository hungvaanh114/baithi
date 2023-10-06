<?php
class App
{
    protected $controller = 'Login';
    protected $action = 'Get_data';
    protected $params = [];

    function __construct()
    {
        $arr = $this->Urlprocess();

        // Xử lý Controller
        if (file_exists("baithi/MVC/Controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "baithi/MVC/Controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // Xử lý Action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Xử lý params
        $this->params = $arr ? array_values($arr) : [];

        // Gọi phương thức controller và action
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function Urlprocess()
    {
        if (isset($_GET["url"])) {
            $flags = NULL ? "/" : 0;
            $arr = explode("/", filter_var(trim($_GET["url"]), FILTER_DEFAULT, $flags));
            return array_values($arr);
        }
    }
}
