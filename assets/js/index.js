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

fetch("https://fakestoreapi.com/products")
  .then(response => response.json())
  .then(products => {
    const container = document.getElementById("product");

    products.forEach(product => {
      const div = document.createElement("div");
      div.className = "product-card";

      div.innerHTML = `
        <img src="${product.image}" alt="${product.title}">
        <h4>${product.title}</h4>
        <p>Price: $${product.price}</p>
      `;

      container.appendChild(div);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });
