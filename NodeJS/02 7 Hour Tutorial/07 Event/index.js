const logEvents=require('./logEvents')
const EventEmitter=require('events')

class MyEmitter extends EventEmitter {};

const myEmitter=new MyEmitter();

myEmitter.on('log',(msg)=>logEvents(msg))

// logEvents("message here");

setTimeout(()=>{
    myEmitter.emit('log','log event emitted!')
},5000)
