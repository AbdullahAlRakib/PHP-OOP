<?php
require_once './Pencilbox.php';

class Example extends Pencilbox  //relation between pencilbox.Here ->Example is "Child" and ->Pencilbox is "Parent"
{
    public $mobile='01881868586';
    protected $email='info@gmail.com';
    private $location='Dhaka';

    public function one($name){
        echo $name; //two(); //location; //access in property
    }

    protected function two(){
        echo $this->name;
    }
    private function three(){
        echo 'In three';
    }
}