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
