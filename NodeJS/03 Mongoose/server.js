const dotenv = require('dotenv')
const connectDB = require('./db')
const mongoose=require('mongoose')
const http=require('http')
const app=http.createServer()

dotenv.config()
connectDB()
const playListSchema=new mongoose.Schema({
    name:{
        type:String,
        required:true
    },
    ctype:String,
    videos:Number,
    active:Boolean,
    date:{
        type:Date,
        default:Date.now
    }
})

const PlayList=mongoose.model('PlayList',playListSchema)

app.listen(process.env.PORT,()=>{console.log(`Server running on port ${process.env.PORT}`)})