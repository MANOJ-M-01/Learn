const fsPromises=require('fs').promises
const path=require('path')


const fileOps=async()=>{
    try{
        const data=await fsPromises.readFile(path.join(__dirname,'files','loream.txt'),'utf-8');
        console.log(data)
        console.log("after read promise finished")
        await fsPromises.writeFile(path.join(__dirname,'files','newfilrpromies.txt'),'new file promises',{encoding:'utf-8'})
        console.log("after write promise finished")
        await fsPromises.rename(path.join(__dirname,'files','newfilrpromies.txt'),path.join(__dirname,'files','newfilrpromiesrenamed.txt'))
        console.log("after rename promise finished")

    }
    catch(err){
        console.log(err.message)
    }
}

fileOps()