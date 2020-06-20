<?php

include 'model.php';
include 'view.php';

class Controller
{
        public function action()
        {
                $message = (new Model())->getMessage();
                return (new View($message))->render();
        }
}