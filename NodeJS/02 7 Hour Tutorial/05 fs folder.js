const fs=require('fs')

if(!fs.existsSync('./sd')){
    fs.mkdir('sd',(err)=>{
        if(err) throw err
        console.log('Directory Created')
    })
}
if(fs.existsSync('./sd')){
    fs.rmdir('sd',(err)=>{
        if(err) throw err
        console.log('Directory removed')
    })
}


process.on('uncaughtException',(err)=>{
    console.error(`There was an uncaught exception: ${err.message}`);
    process.exit(1);
});