closecursor php
https://youtu.be/rVt3UsEg4CQ?list=TLPQMDcxMjIwMjEEIgPLzPvzEQ&t=1510
https://www.php.net/manual/en/pdostatement.closecursor.php

Dave Gray
https://www.youtube.com/playlist?list=PLUunMkZlWdP1GM0Ti_c1SMR5xehD57ghX


https://www.youtube.com/watch?v=rVt3UsEg4CQ&list=TLPQMDcxMjIwMjEEIgPLzPvzEQ&index=9

https://github.com/gitdagray/mvc_assignment_tracker/blob/main/model/course_db.php
https://github.com/gitdagray/mvc_php_functions/blob/main/model/city_db.php

<?php
$id=filter_input(INPUT_POST,'id',FILTER_VALIDATE_INT);
$name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);

var_dump($id);
var_dump($name);
?>

<form action="44.php" method="post">
<input type="text" name="id" />
<input type="text" name="name" />
<input type="submit" value="submit" name="submit" />
</form>

<script>
function a(){
const data = { id:1,name:"20" };

fetch('server.php', {
  method: 'POST', // or 'PUT'
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(data),
})
.then(response => response.json())
.then(data => {
  console.log('Success:', data);
})
.catch((error) => {
  console.error('Error:', error);
});
}
a();
</script>

