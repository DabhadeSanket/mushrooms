function validateEmail(emailField){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailField) == false) 
    {
        return false;
    }

    return true;

}
function sendMail() {
    console.log("hello");
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var msg = document.getElementById('message').value;
    if(name.length != 0 && email.length != 0 && msg.length != 0 && validateEmail(email) == true ) {
        console.log(name+'('+email+') has filled the contact us form of ankurmushrooms.in.\nMessage :- '+msg+'.');
        //for Client's mail
        Email.send({
            Host: "smtp.gmail.com",
            Username: "dabhadesanket97@gmail.com",
            Password: "Dabhade@97",
            SSL: "Required",
            To: email,
            From: " dabhadesanket97@gmail.com",
            Subject: "Thank You for contacting Ankur Mushrooms!",
            Body: `Hi ${name},<br>Thanks for filling the contact us form at ankurmushrooms.in. We will get back to you soon.<br><br><b>Regards,</b><br>Ankur Mushrooms.`
        }).then(
            message => console.log(message)
        );
        console.log(message.value);

        // for republic's mail
        Email.send({
            Host: "smtp.gmail.com",
            Username: "dabhadesanket97@gmail.com",
            Password: "Dabhade@97",
            SSL: "Required",
            To: " dabhadesanket97@gmail.com",
            From: "dabhadesanket97@gmail.com",
            Subject: name+" has filled Contact us form on ankurmashroom.in",
            Body:
            `${name}(${email}) has filled the contact us form of ankurmashroom.in.<br>Contact :- ${contact}<br>Message :- ${msg}.`
        }).then(
            message => console.log(message)
        );

        swal({
            title: "Form Submission Successful!",
            text: "Thank You for filling contact form we'll contact you soon!",
            icon: "success",
            button: "Thank You",
          });

        // to do textfields blank
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('contact').value = '';
        document.getElementById('message').value = '';

        // frm.reset();
    }
    else if(name.length == 0) {
        swal({
            title: "Name is not entered!",
            text: "All Fields must be Filled to proceed further!",
            icon: "error",
            button: "Try Again!",
          });

          document.getElementById('name').focus();
    }
    else if(email.length == 0) {
        swal({
            title: "Email id is not entered!",
            text: "All Fields must be Filled to proceed further!",
            icon: "error",
            button: "Try Again!",
          });        
          document.getElementById('email').focus();
    }
    else if(msg.length == 0) {
        swal({
            title: "Message is not entered!",
            text: "All Fields must be Filled to proceed further!",
            icon: "error",
            button: "Try Again!",
          });
          document.getElementById('message').focus();
    }
    else if(validateEmail(email) == false) {
        swal({
            title: "Invalid Email id!",
            text: "Enter Valid Email Id",
            icon: "error",
            button: "Try Again!",
          });
          document.getElementById('email').focus();
    }
}

function sendEnquiry() {
    console.log("hello");
    var product = document.getElementById('product').value;
    var quantity = document.getElementById('quantity').value;
    var frequency = document.getElementById('frequency').value;
    var location = document.getElementById('location').value;
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var msg = document.getElementById('message').value;
    if(name.length != 0 && email.length != 0 && msg.length != 0 && validateEmail(email) == true ) {
        console.log(name+'('+email+') has filled the Enquiry form of ankurmushrooms.in.\nMessage :- '+msg+'.');
        //for Client's mail
        Email.send({
            Host: "smtp.gmail.com",
            Username: "ankurmashroom@gmail.com",
            Password: "Rudra@@9",
            SSL: "Required",
            To: email,
            From: " ankurmashroom@gmail.com",
            Subject: "Thank You for contacting Ankur Mushrooms!",
            Body: `Hi ${name},<br>Thanks for filling the Enquiry form at ankurmushrooms.in. We will get back to you soon.<br><br><b>Regards,</b><br>Ankur Mushrooms.`
        }).then(
            message => console.log(message)
        );
        console.log(message.value);

        // for republic's mail
        Email.send({
            Host: "smtp.gmail.com",
            Username: "ankurmashroom@gmail.com",
            Password: "Rudra@@9",
            SSL: "Required",
            To: " ankurmashroom@gmail.com",
            From: " ankurmashroom@gmail.com",
            Subject: name+" has filled Enquiry form for product "+product+" on ankurmashroom.in",
            Body:
            `${name} has filled the contact us form of ankurmashroom.in.<br>
            Product Name :- ${product}<br>
            Quantity :- ${quantity}<br>
            Frequency :- ${frequency}<br>
            Location :- ${location}<br>
            Name :- ${name}<br>
            Email :- ${email}<br>
            Contact :- ${contact}<br>
            Message :- ${msg}.`
        }).then(
            message => console.log(message)
        );

        swal({
            title: "Form Submission Successful!",
            text: "Thank You for filling Enquiry form we'll contact you soon!",
            icon: "success",
            button: "Thank You",
          });

        // to do textfields blank
        document.getElementById('product').value = '';
        document.getElementById('quantity').value = '';
        document.getElementById('frequency').value = '';
        document.getElementById('location').value = '';
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('contact').value = '';
        document.getElementById('message').value = '';
        // frm.reset();
    }
    else if(name.length == 0) {
        swal({
            title: "Name is not entered!",
            text: "All Fields must be Filled to proceed further!",
            icon: "error",
            button: "Try Again!",
          });

          document.getElementById('name').focus();
    }
    else if(email.length == 0) {
        swal({
            title: "Email id is not entered!",
            text: "All Fields must be Filled to proceed further!",
            icon: "error",
            button: "Try Again!",
          });        
          document.getElementById('email').focus();
    }
    else if(msg.length == 0) {
        swal({
            title: "Message is not entered!",
            text: "All Fields must be Filled to proceed further!",
            icon: "error",
            button: "Try Again!",
          });
          document.getElementById('message').focus();
    }
    else if(validateEmail(email) == false) {
        swal({
            title: "Invalid Email id!",
            text: "Enter Valid Email Id",
            icon: "error",
            button: "Try Again!",
          });
          document.getElementById('email').focus();
    }
}

