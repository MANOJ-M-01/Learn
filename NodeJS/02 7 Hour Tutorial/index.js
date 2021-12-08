const app = require('http');
const server = app.createServer();
const fs = require('fs');
const os = require('os');
const path = require('path');

const Math = require('./02 module');

console.log(Math.add(1, 2));
return



console.log(path);

console.log(global);

console.log(os.type());
console.log(os.version());
console.log(os.homedir());

console.log(__dirname)
console.log(__filename)
console.log(path.dirname(__filename))
console.log(path.basename(__filename))
console.log(path.extname(__filename))

console.log(path.parse(__filename))

server.on('request', (req, res) => {
    let route = req.url;
    let routtype = req.method;


    if (route == '/') {
        //fs.createWriteStream("index.html").pipe(res);
        let s = fs.createReadStream("index.html").pipe(res);
        console.log(s);
        res.write('Hello World');
        res.end();
    }
    if (route == '/api') {
        res.writeHead(200, { 'Content-Type': 'application/json' });

        let data = {
            user_1: {
                user_id: 1,
                name: 'Raj',
                age: 23,
            }, user_2: {
                user_id: 1,
                name: 'Raj',
                age: 23,
            }
        };

        // let a=[];
        // a['s']="1";
        // a['d']=3;
        // console.log(a);


        res.write(JSON.stringify(data));
        res.end();
    }
});

server.listen(3000);