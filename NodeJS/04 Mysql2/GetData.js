// 1
/*
// get the client
const mysql = require('mysql2');
const Connection = require('mysql2/typings/mysql/lib/Connection');


// create the connection to database
const connection = mysql.createConnection({
  host: 'localhost',
  port:3308,
  user: 'root',
  password:'',
  database: 'todo'
});

// simple query
connection.query( 'SELECT * FROM `task` ',
  function(err, results, fields) {
    console.log(results); // results contains rows returned by server
    console.log(fields); // fields contains extra meta data about results, if available
  }
);
*/

// 2
/*
async function main() {
  // get the client
  const mysql = require('mysql2/promise');
  // create the connection
  const connection = await mysql.createConnection({
    host: 'localhost',
    port:3308,
    user: 'root',
    password:'',
    database: 'todo'
  });
  // query database
  const [rows, fields] = await connection.execute('SELECT * FROM `task` ');
  console.log(rows);
  process.exit();
}

main()
*/

const mysql = require('mysql2/promise');
async function Conn(){
  const connection = await mysql.createConnection({
    host: 'localhost',
    port:3308,
    user: 'root',
    password:'',
    database: 'todo'
  })
  return connection
}


const GetData=async()=>{
  const conect=await Conn();
  const [rows, fields] = await conect.execute('SELECT * FROM `task`')
  return rows
}

const PrintData=async()=>{
  let data=await GetData();
  console.log(data);
  process.exit()
}

PrintData()