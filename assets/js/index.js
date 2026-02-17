//high order fn
// function multiplier(x) {
//   return function(y) {
//     return y * x;
//   };
// }

// const double = multiplier(2);
// let z = double(5)
// console.log(z); // 10

//iven an array of strings, return a new array of objects where each object has keys `name` (the string) 
// and `length` (the length of the string).
// function nameLengths(arr) {
    
//   return arr.map(str => ({
//     name: str,
//     length: str.length
//   }));
// }
// console.log(nameLengths(["apple", "banana", "kiwi"]))

// function a(arr) {
//   const result = [];

//what is promise

let myPromise = new Promise((resolve, reject) => {
 
    resolve("Task completed");
 
})
.then(res => console.log(res))
.catch(err=>console.log(err));
