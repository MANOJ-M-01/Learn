<?php 
namespace UserModel;

class User{
	private static $userName="Ram";
	private static $age=20;

	protected static function viewData(){
        $name=self::$userName;
        $age=self::$age;
        $data=["name"=>$name,"age"=>$age];
        return $data;
	}

	protected static function viewAllData(){
        $name=self::$userName;
        $age=self::$age;
        $data=[["name"=>$name,"age"=>$age],["name"=>$name,"age"=>$age],["name"=>$name,"age"=>$age]];
        return $data;
	}
}