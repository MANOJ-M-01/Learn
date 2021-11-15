<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>

<!-- Form Request -->
<form action="./Form.php" method="POST">
  <input type="text" name="name" >
  <input type="text" name="age" >
  <input type="submit" value="ok">
</form>

<script>
  
  // Axios Request

  var QtyUpdate2 = (name,age) => {
    let data = {
        "name": name,
        "age": age
    };
      async function setDate(data) {
        try {
            var status = await axios.post('./Form.php',data);
            var res = await status.data;
            console.log(res);
        }
        catch (e) {
            console.log(e);
        }
      } 
      setDate(data);
  }

  QtyUpdate2("Sam",19);


// Fetch  Request

  var QtyUpdate = (name,age) => {
    let data = {
        "name": name,
        "age": age
    };
      async function setDate(data) {
        try {
            var status = await fetch('./Form.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            });
            var res = await status.json();
            console.log(res);
        }
        catch (e) {
            console.log(e);
        }
      } 
      setDate(data);
  }
  QtyUpdate("Ram",18);


</script>