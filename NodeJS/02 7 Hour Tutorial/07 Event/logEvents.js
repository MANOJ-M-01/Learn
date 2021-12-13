const {format}=require('date-fns')
const {v4:uuid}=require('uuid')
const fs=require('fs')
const fsPromise=require('fs').promises
const path=require('path')

const logEvents=async(message)=>{
    const dateTime=`${format(new Date(),'yyy-mm-dd\tHH-mm-ss a')}`
    const LogItems=`${dateTime}\t${uuid()}\t ${message}`
    try{
        if(!fs.existsSync(path.join(__dirname,'logs'))){ 
            await fsPromise.mkdir(path.join(__dirname,'logs')) 
        } 
        await fsPromise.appendFile(path.join(__dirname,'logs','eventlog.txt'),`\n${LogItems}`)
     
    }
    catch(err){
        console.log(err)
    }
}
 
 
module.exports =logEvents;