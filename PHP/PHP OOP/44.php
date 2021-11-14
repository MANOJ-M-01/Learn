<?php


// https://coursesweb.net/php-mysql/chain-methods-php-class
//https://phpenthusiast.com/object-oriented-php-tutorials/chaining-methods-and-properties

class clsData {
  // private property to cannot be accessed outside class
  private static $data;

  // static method that sets $data value
  public static function setData(){
    self::$data = 'https://coursesweb.net/php-mysql/';

    return new self;      // returns class instance
  }

  // method to return $data value
  public function getData(){
    return self::$data;
  }
}

// accessing getData() method after setData()
echo clsData::setData()->getData();       // https://coursesweb.net/php-mysql/

var_dump(clsData::setData()->getData())

?>
