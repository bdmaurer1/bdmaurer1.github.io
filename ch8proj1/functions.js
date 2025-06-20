function calculateTotal(quantity, price) {
  return quantity * price;
}
function outputCartRow(item, total) {
  document.write("<tr>");
  document.write(`<td><img src='images/${item.product.filename}'></td>`);
  document.write(`<td>${item.product.title}</td>`);
  document.write(`<td>${item.quantity}</td>`);
  document.write(`<td>$${item.product.price.toFixed(2)}</td>`);
  document.write(`<td>$${total.toFixed(2)}</td>`);
  document.write("</tr>");
}
let subtotal = 0;

for (let i = 0; i < cart.length; i++) {
  let item = cart[i];
  let total = calculateTotal(item.quantity, item.product.price);
  subtotal += total;
  outputCartRow(item, total);
}

let tax = subtotal * 0.1; 
let grandTotal = subtotal + tax;

document.write(`<tr><td colspan="4">Subtotal</td><td>$${subtotal.toFixed(2)}</td></tr>`);
document.write(`<tr><td colspan="4">Tax</td><td>$${tax.toFixed(2)}</td></tr>`);
document.write(`<tr><td colspan="4">Total</td><td>$${grandTotal.toFixed(2)}</td></tr>`);

/* Used ChatGPT for help with writing the function */







        
