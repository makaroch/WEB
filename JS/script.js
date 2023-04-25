// arr = [1,2,34,4];




// let summ = 0;
// arr.forEach(el => {
//    summ+=el; 
// });
// summ = arr.reduce((pred, curent)=>{return pred+curent});
// console.log(summ);

// const user1 = {
//     name: "alex",
//     age: 23,
//     color: "red",
//     arr: [1,2,3]
// }
// const user2 = {

// }
// for (const key in user1) {
//     user2[key] = user1[key];
// }
// user1.arr[2] = 55
// console.log(user1);
// console.log(user2);

// const str = JSON.stringify(user1);  
// const user3 = JSON.parse(str)
// console.log(user3);

// class Student{
//     name= "defolt";

//     say(){
//         console.log("Hi")
//     }
//     info(){
//       for (const key in this) {
//         console.log(this[key]);
//       }
//     }
    
// }

// const st1 = new Student;
// st1.info();
let x = "";
let arr = [];
function one(){
    x += "1"
}
function two(){
    x += "2"
}
function thre(){
    x += "3"
}
function fo(){
    x += "4"
}
function fi(){
    x += "5"
}
function six(){
    x += "6"
}
function seven(){
    x += "7"
}
function au(){
    x += "8"
}
function nine(){
    x += "9"
}
function add() {
    arr.push(Number(x));
    x = "";
}

function show() {
    console.log(arr);
}
function max() {
    console.log(Math.max.apply(null, arr));
}
function min() {
    console.log(Math.min.apply(null, arr));
}
function sort() {
    console.log(arr.sort((a, b) => a - b));
}