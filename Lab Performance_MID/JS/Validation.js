const price = 1000;
const days = 30;

const quantityInput = document.getElementById("quantity");  
const total = document.getElementById("total"); 

quantityInput.addEventListener("input", function() {
    let q = parseInt(quantityInput.value);
    if(q < 0){
        alert("Quantity cannot be negative.");
        quantityInput.value = 0;
        q= 0;
    }

    let result = q * price * days;

    total.value = result;   

    if(result > 1000){
        alert("You are eligible for a Gift Coupon!");
    }
})