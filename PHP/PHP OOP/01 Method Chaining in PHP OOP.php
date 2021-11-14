<?php

// method chaining in PHP OOP

// https://stitcher.io/blog/php-8-nullsafe-operator
// https://coursesweb.net/php-mysql/chain-methods-php-class
// https://coursesweb.net/php-mysql/getelementbyid-getelementsbytagname
// https://www.zend.com/blog/what-php-class

class Auth{
  private $role='';
  private $level='';
  private  $stmt='';
  public function hasRole($role){
    $this->role='WHERE role="'.$role.'"';
    return $this;
  }
  public function hasLevel($level){
    $this->level='WHERE level="'.$level.'"';
    return $this;
  }
  public function Get(){
    $and='';
    if($this->role!='' && $this->level!=''){
      $and=" AND " ;
    }
    $this->stmt=$this->role.$and.$this->level;
    return $this->stmt;
  }
}

$Auth=new Auth();
$Query=$Auth->hasRole('ADMIN')->hasLevel('1')->Get();
print_r($Query);


$Auth2=new Auth();
$Query2=$Auth2->hasRole('ADMIN')->Get();
print_r($Query2);




class Auth2{
  private static  $role='';
  private static  $level='';
  private static $stmt='';
  public static function hasRole($role){
    self::$role='WHERE role="'.$role.'"';
    return new self;
  }
  public static function hasLevel($level){
    self::$level='WHERE level="'.$level.'"';
    return new self;
  }
  public function Get(){
    $and='';
    if(self::$role!='' && self::$level!=''){
      $and=" AND " ;
    }
    self::$stmt=self::$role.$and.self::$level;
    return self::$stmt;
  }
}

$Query3=Auth2::hasRole('ADMIN')->hasLevel('1')->Get();

print_r($Query3);