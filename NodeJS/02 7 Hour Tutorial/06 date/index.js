const {format}=require('date-fns')
const {v4:uuid}=require('uuid')

console.log(format(new Date(),'yyy-mm-dd\tHH-mm-ss a'))
// console.log(format(new Date(),'hh-mm-ss a'))
 
console.log(uuid()) 

console.log("Main Head")
console.group()
    console.log("Sub Head")
    console.group()
        console.log("Sub items")
        console.group()
        console.log("Sub Sub item");
        console.groupEnd()
        console.log("Sub items")
        console.log("Sub items")
    console.groupEnd()
console.groupEnd()