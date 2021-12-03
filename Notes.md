
## 1. Method chaining Notes
  return this or void but any other

  Just return this; from the methods instead of returning nothing.
  So for example  
  https://stackoverflow.com/questions/2872222/how-to-do-method-chaining-in-java-o-m1-m2-m3-m4/28221688  
  https://en.wikipedia.org/wiki/Fluent_interface  
  https://www.geeksforgeeks.org/method-chaining-in-java-with-examples/  
  https://www.unleashed-technologies.com/blog/method-chaining-php  


  public function a($text) {
      this.text = $text;
  }

  would become

  public function a($text) {
      this.text = $text;
      return this;
  }


    https://www.simonholywell.com/post/2015/04/php-function-objects/
    https://www.php.net/manual/en/closure.bindto.php



    https://stackoverflow.com/questions/8940825/get-key-of-multidimensional-array
    array_key()
    get array key name

    public function store($datas){
     $name=$datas['name'];
      return  $this->$$name=$key;
    }
    
    https://stackoverflow.com/questions/8289307/array-push-for-associative-arrays
    $datas=(array) $json;
    https://stackoverflow.com/questions/4345554/convert-a-php-object-to-an-associative-array


## 2 Unique ID in php

    echo md5(uniqid(rand(), true));
  
  
## 3 Binary 

select with case sensitive

https://www.w3schools.com/sql/func_mysql_binary.asp  

    SELECT * FROM users WHERE BINARY user_name="manoj";  


