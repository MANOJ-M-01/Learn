const http=require('http')
const app=http.createServer()

const PORT=4000
const server=app.listen(PORT)

 
server.on('request',(req,res)=>{
    console.log("server is running")
    const route=req.url
    if(route==='/'){
        res.writeHead(200,{'Content-Type':'text/html'})
        res.write('<h1>Hello World</h1>')
        res.end();
    }
    if(route==='/user'){
        res.writeHead(200,{'Content-Type':'text/html'})
        res.write('<h1>Hello User</h1>')
        res.end()
    }
})