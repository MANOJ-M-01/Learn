const app=require('http');
const server=app.createServer();

server.on('request',(req,res)=>{
    let route=req.url;
    if(route=='/'){
        res.write('Hello World');
        res.end();
    }
});

server.listen(3000);