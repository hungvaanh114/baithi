<?php
class Controller
{
    public function model($model)
    {
        require_once "baithi/MVC/Models/" . $model . ".php";
        return new $model;
    }
    public function view($view, $data = [])
    {
        require_once "baithi/MVC/Views/" . $view . ".php";
    }
}
