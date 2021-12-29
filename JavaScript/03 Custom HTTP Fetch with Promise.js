function getData(url){
    return new Promise(function(resolve,reject){
        const xhr=new XMLHttpRequest();
        xhr.open('GET',url,true);
        xhr.onload=function(){
            if(xhr.status=200){
                resolve(JSON.parse(this.responseText));
            }else{
                reject();
            }
        }
        xhr.send();
    })
}

let url='https://jsonplaceholder.typicode.com/todos';
getData(url).then(console.log);


// Reference

// Async JavaScript Part 1: What is AJAX?
// https://www.youtube.com/watch?v=wdvruTuWvW8

// Wrap AJAX in a Promise - JavaScript Promises Tutorial
// https://www.youtube.com/watch?v=MYOaw8ZrwGU


