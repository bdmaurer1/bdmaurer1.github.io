
const tax_rate = parseFloat(prompt('Enter tax rate (e.g. 0.10)'));
const shipping_threshold = parseFloat(prompt('Enter shipping threshold (e.g. 1000)'));

let subtotal = 0;

for (let i = 0; i < cart.length; i++) {
  let item = cart[i];
  let total = calculateTotal(item.quantity, item.product.price);
  subtotal += total;
  outputCartRow(item, total);
}

let tax = subtotal * tax_rate;
let shipping = subtotal > shipping_threshold ? 0 : 40;
let grandTotal = subtotal + tax + shipping;

document.write(`<tr><td colspan="4">Subtotal</td><td>$${subtotal.toFixed(2)}</td></tr>`);
document.write(`<tr><td colspan="4">Tax</td><td>$${tax.toFixed(2)}</td></tr>`);
document.write(`<tr><td colspan="4">Shipping</td><td>$${shipping.toFixed(2)}</td></tr>`);
document.write(`<tr><td colspan="4">Grand Total</td><td>$${grandTotal.toFixed(2)}</td></tr>`);

/* Used ChatGPT for help with the function and loop */
/* add loop and other code here ... in this simple exercise we are not
   going to concern ourselves with minimizing globals, etc */