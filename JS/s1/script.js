console.log(123);
const body = document.body;

const content = document.querySelector(".content");



function plas() {
    const button = document.querySelector(".button");
    let x =  Number(button.textContent);     
    x++;
    button.textContent = x;  
}
//elem.classList.add/remove("class") 

let flag = true;
function tema() {
    
    if (flag){
        const body = document.querySelector(".body_nait");
        body.classList.remove("body_nait");
        body.classList.add("body_day");
        flag = ! flag;
    }
    else{
        const body = document.querySelector(".body_day");
        body.classList.remove("body_day");
        body.classList.add("body_nait");
        flag = ! flag;
    }
}

// button.addEventListener('click', function () {
//     console.log('click');
//   });
// const button = document.querySelector(".num");
// console.log(button);
// button.addEventListener('click', click);
// function click() {
//     console.log('click');
// }
const button = document.querySelector('.num');
button.addEventListener('click', function () {
  console.log('click');
});


function randNum() {
    document.querySelector(".num").textContent = Math.round(Math.random()*100);
}

let flag1 = true;
function f1() {
    if (flag1){
        const body = document.querySelector(".text");
        body.classList.add("text_non");
        flag1 = ! flag1;
    }
    else{
        const body = document.querySelector(".text");
        body.classList.remove("text_non");
        flag1 = ! flag1;
    }
}