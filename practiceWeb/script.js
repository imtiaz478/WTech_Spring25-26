document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();

    const firstname = document.getElementById("fname").value;
    const lastname = document.getElementById("lname").value;    
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const message = document.getElementById("message").value;

    if(!firstname || !lastname || !email || !phone || !message) {
        alert("Please fill in all fields.");
        return;
    }   

    console.log("First Name:", firstname);  
    console.log("Last Name:", lastname);
    console.log("Email:", email);   
    console.log("Phone:", phone);
    console.log("Message:", message);

    
});