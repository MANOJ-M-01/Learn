<?php


// class A{
// public function getValue(): ?string
//     {
//     //return $this->getResolver($typeResolver)?->getValue();
//     return "sd";
//     }
// }

// $sd=new A();
// var_dump($sd->getValue());

// getValue();

//     function foo(){
//         return true;
//     }
//     function too(){
//         echo 'foo()->too() is called'.'<br>';
//     }
// if(foo()->too()){

//     echo "sd";
// }



// class QueryResolver
// {
//     public a(
//         echo "sd";
//         )
// }
// $sd=new QueryResolver();
// var_dump($sd->a());


// class setTag {
//     private $id = '';        // tag id attribute
//     private $class = '';     // tag class attribute
  
//     // sets $id
//     public function setId($id){
//       $this->id = ' id="'. $id .'"';
  
//       return $this;     // returns object instance
//     }
  
//     // sets $class
//     public function setClass($class){
//       $this->class = ' class="'. $class .'"';
  
//       return $this;     // returns object instance
//     }
  
//     // returns the HTML tag and its content
//     public function getTagCnt($tag, $cnt){
//       return '<'. $tag .$this->id. $this->class .'>'. $cnt .'</'. $tag. '>';
//     }
//   }
  
//   // creates an object of the class
//   $obTag = new setTag;
  
//   // variables with tag type and content
//   $tag = 'div';
//   $cnt = 'https://coursesweb.net';
  
//   // chains methods to set ID, Class, and output HTML <div> tag with these attributes and content in a single instruction
//   echo $obTag->setId('some_id')->setClass('cls')->getTagCnt($tag, $cnt);
  
//   /* Outputs:
//    <div id="some_id" class="cls">https://coursesweb.net</div>
//   */



// https://coursesweb.net/php-mysql/chain-methods-php-class
//https://phpenthusiast.com/object-oriented-php-tutorials/chaining-methods-and-properties

class setTag {
    private $id = '';        // tag id attribute
    private $class = '';     // tag class attribute
  
    
    public function setId($id){
      $this->id = ' id="'. $id .'"';
  
      return $this;     // returns object instance
    }
  
    public function setClass($class){
      $this->class = ' class="'. $class .'"';
  
      return $this;     // returns object instance
    }
    public function auth(){
        return "sd";
    }
}
$sd=new setTag();

var_dump($sd->setId(1)->setClass("sd")->auth())

?>
