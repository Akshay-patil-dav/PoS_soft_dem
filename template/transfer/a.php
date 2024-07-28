<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <div>
        <h2>Products</h2>
        <div>
            <span>Product 1</span>
            <button onclick="addToCart('Product 1', 10.00)">Add to Cart</button>
        </div>
        <div>
            <span>Product 2</span>
            <button onclick="addToCart('Product 2', 20.00)">Add to Cart</button>
        </div>
    </div>

    <h2>Cart</h2>
    <ul id="cart-items">
        <!-- Cart items will be added here -->
    </ul>
    <p>Total: $<span id="cart-total">0.00</span></p>

    <script >
        let cart = [];

function addToCart(productName, productPrice) {
    // Check if product is already in the cart
    const existingProduct = cart.find(item => item.name === productName);

    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        cart.push({ name: productName, price: productPrice, quantity: 1 });
    }

    updateCart();
}

function updateCart() {
    const cartItemsElement = document.getElementById('cart-items');
    const cartTotalElement = document.getElementById('cart-total');

    // Clear current cart items
    cartItemsElement.innerHTML = '';

    let total = 0;

    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - $${item.price.toFixed(2)} x ${item.quantity}`;
        cartItemsElement.appendChild(li);

        total += item.price * item.quantity;
    });

    cartTotalElement.textContent = total.toFixed(2);
}

    </script>
</body>
</html>
