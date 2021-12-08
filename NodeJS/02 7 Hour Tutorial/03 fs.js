const fs=require('fs')
const path=require('path')

// 1 
fs.readFile('./files/loream.txt',(err,data)=>{
    if(err) throw err
    console.log(data)
    console.log(data.toString())
});

// 2 insterd of tostring we can use utf-8 specifier berfore callback
fs.readFile('./files/loream.txt','utf-8',(err,data)=>{
    if(err) throw err
    console.log(data)
});

// fs readFile is async function 
console.log('end of file');

// 3 insterd of tostring we can use utf-8 specifier berfore callback
// this url parsing is better apporoach then hardcoding the path
fs.readFile(path.join(__dirname,'files','loream.txt'),'utf-8',(err,data)=>{
    if(err) throw err
    console.log(data)
})



// write file, append file, rename file

fs.writeFile(path.join(__dirname,'files','newfile.txt'),'hello',(err)=>{
    if(err) throw err
    console.log('file written')

    fs.appendFile(path.join(__dirname,'files','newfile.txt'),'\n\n welcome',(err)=>{
        if(err) throw err
        console.log('file appended')

        fs.rename(path.join(__dirname,'files','newfile.txt'),path.join(__dirname,'files','newfiles.txt'),(err)=>{
            if(err) throw err
            console.log('file renamed')
        })
    })
})

// if you remove the file just before it create then it wont remove the file cause writefile is async function

// fs.unlink(path.join(__dirname,'files','newfiles.txt'),(err)=>{
//     if(err) throw err
//     console.log('file deleted')
// })



fs.readFile(path.join(__dirname,'files','newfile.txt'),'utf-8',(err,data)=>{
    if(err) throw err
    console.log(data)
})



// exit on uncaught exception
process.on('uncaughtException',(err)=>{
    console.error(`There was an uncaught exception: ${err.message}`);
    process.exit(1);
});