function SendMail(event) {
    event.preventDefault(); // Prevent form from submitting normally
    
    var params = {
        from_name: document.getElementById("fullName").value,
        email_id: document.getElementById("email_id").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value
    };

    emailjs.send("service_hnt20yh", "template_8njwlle", params).then(function (res) {
        alert("Success! Message sent.");
        document.getElementById("contact-form").reset(); // Optionally reset the form
    }).catch(function (error) {
        alert("Failed to send message. Error: " + error);
    });
}
