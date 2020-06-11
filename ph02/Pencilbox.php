<?php


class Pencilbox
{
public $name='Rahim';
protected $city='Dhaka';
private $country='Bangladesh';

 public function add(){
    echo 'in add';
}
    protected function sum(){
        echo 'in sum';
    }
    private function rem(){
        echo 'in rem';
    }
}
