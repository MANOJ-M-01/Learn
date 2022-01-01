// 1
let id:number=5
id=5

// 2
type objs={
  width:number,
  height:number
}
const parmh:objs={width:100,height:100};

let sd=parmh.height;
console.log(sd);

// 3

interface User {
  name: string;
  id: number;
}

const user:User  = {
  name: "Hayes",
  id: 0,
};