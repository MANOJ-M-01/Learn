class Calculate{
    a:number;
    b:number;
    constructor(a:number,b:number){
        this.a=a;
        this.b=b;
    }
    add(){
        return this.a+this.b;
    }
    subract(){
        return this.a-this.b;
    }
    multiply(){
        return this.a*this.b;
    }
    divide(){
        return this.a/this.b;
    }
}

var Operation=new Calculate(4,3);

var Result=Operation.add();

console.log(Result);

console.log(Operation.add());
console.log(Operation.subract());
console.log(Operation.multiply());
console.log(Operation.divide());