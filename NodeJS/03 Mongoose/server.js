const dotenv = require('dotenv')
const connectDB = require('./db')
const mongoose=require('mongoose')
const http=require('http')
const app=http.createServer()

dotenv.config()

// creaete collection

// const playListSchema=new mongoose.Schema({
//     name:{
//         type:String,
//         required:true
//     },
//     ctype:String,
//     videos:Number,
//     active:Boolean,
//     date:{
//         type:Date,
//         default:Date.now
//     }
// })

// const PlayList=mongoose.model('PlayList',playListSchema)



// insert one
var myobj = { name: "Company Inc", address: "Highway 37" }
const set=async()=>{
    await connectDB()
    const connection =await mongoose.connection
    let data=await connection.collection('playlists').insertOne(myobj)
    console.log(data)
}
// set();


// insert multiple
let myobj2=([
    {name: "Steve", address: "MTM"},
    { name: "Anya", address: "KUZ" }
 ])
const setAll=async()=>{
    await connectDB()
    const connection =await mongoose.connection
    var myobj = { name: "Company Inc", address: "Highway 37" }
    let data=await connection.collection('playlists').insertMany(myobj2)
    console.log(data)
}
// setAll();


// find all
const getAll=async()=>{
    await connectDB()
    const connection =await mongoose.connection 
    let data=await connection.collection('playlists').find({}).toArray()
    //console.log(data)
    data.map(item=>{
        console.log(item.name)
        console.log(item.address)
    })
}

// getAll();

// https://stackoverflow.com/questions/33627238/mongoose-find-with-multiple-conditions
// https://stackoverflow.com/questions/18969916/mongodb-sum-query
// https://stackoverflow.com/questions/3305561/how-to-query-mongodb-with-like


// find
const get=async()=>{
    await connectDB()
    const connection =await mongoose.connection
    // let data=await connection.collection('playlists').find({$or:[{name: "ram"},{address:"address"}]}).toArray()
    let data=await connection.collection('playlists').find({name: "ram"}).toArray()
    // let data=await connection.collection('playlists').find({name: /.*y.*/}).toArray()
    // console.log(data)
    data.map(item=>{
        console.log(item.name)
        console.log(item.address)
    })
}

get();





// connection.on('error', console.error.bind(console, 'connection error:'));
// connection.once('open', function () {

//     connection.db.collection("testing.playlists", function(err, collection){
//         // collection.find({}).toArray(function(err, data){
//         //     console.log(data); // it will print your collection data
//         // })
//         console.log("sd");
//     });

// });



// app.listen(process.env.PORT,()=>{console.log(`Server running on port ${process.env.PORT}`)})