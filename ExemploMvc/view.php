<?php

class View
{
        private $message;

        public function __construct($message) {
                $this->message = $message;
        }

        public function render()
        {
                print_r($this->message);
        }
}