const app = require('http');
const server = app.createServer();
const GetData = require('./controller/getdata');
const operation = require('./controller/calculate');

const addition = operation.add(10, 5);
const subraction = operation.subtract(10, 5);
console.log(addition);
console.log(subraction);

server.on('request', async (req, res) => {

    var url = req.url;

    if (url === '/about') {
        res.writeHead(200, { 'Content-Type': 'text/html' });
        res.write(' Welcome to about us page');
        res.end('<h1>Hello World</h1>');
    }
    else if (url === '/todo') {
        var url = 'https://jsonplaceholder.typicode.com/todos/1';
        var data = await GetData.getdatas(url);
        let userId = data.userId;
        let title = data.title;
        let status = data.completed;
        let Page = `
            <div>
                <h1>Welcome to home page</h1>
                <h2>UserId: ${userId}</h2>
                <h2>Title: ${title}</h2>
                <h2>Status: ${status}</h2>
            <div>
            `;
        res.writeHead(200, { 'Content-Type': 'text/html' });
        res.write(' Welcome to single todo page');
        res.end(Page);
    }
    else if (url === '/todos') {
        let url = 'https://jsonplaceholder.typicode.com/todos';
        var data = await GetData.getdatas(url);
        let Page = `<div> 
                    <h1>Welcome to TodoPage page</h1>
                    ${data.map(function (datas) {
            return `<div>
                            <h1>Welcome to home page</h1>
                            <h2>UserId: ${datas.userId}</h2>
                            <h2>Title: ${datas.title}</h2>
                            <h2>Status: ${datas.status}</h2>
                            <div>`
        }).join("")}
                </div>`;
        res.writeHead(200, { 'Content-Type': 'text/html' });
        res.write('TodoPage!');
        res.end(Page);
    }
    else if (url === '/todos-api') {
        let url = 'https://jsonplaceholder.typicode.com/todos';
        var data = await GetData.getdatas(url);
        res.writeHead(200, { 'Content-Type': 'application/json' });
        res.write(JSON.stringify(data));
        res.end();
    }
    else if (url === '/meals-api') {
        let url = 'https://www.themealdb.com/api/json/v1/1/search.php?s=';
        var data = await GetData.getdatas(url);
        res.writeHead(200, { 'Content-Type': 'application/json' });
        res.write(JSON.stringify(data));
        res.end();
    }
    else {
        res.writeHead(200, { 'Content-Type': 'text/html' });
        res.write('Hello World!');
        res.end();
    }
});

server.listen(3000);