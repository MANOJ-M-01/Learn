<?php 

class User{
	protected $userName="Ram";
	protected $age=20;

	protected function viewData(){
        $name=$this->userName;
        $age=$this->age;
        $data=["name"=>$name,"age"=>$age];
        return $data;
	}

	protected function viewAllData(){
        $name=$this->userName;
        $age=$this->age;
        $data=[["name"=>$name,"age"=>$age],["name"=>$name,"age"=>$age],["name"=>$name,"age"=>$age]];
        return $data;
	}
}