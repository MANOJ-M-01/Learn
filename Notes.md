
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
