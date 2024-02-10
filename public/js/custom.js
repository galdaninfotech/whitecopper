// // BOOKINGS
// var tour = '';
//   function setTour(value) {
//      tour = value;
//   }

// function onBookings(){
//     // debugger
//     // if (document.getElementById("cpatchaTextBox").value == code) {
//     //     alert("Valid Captcha")
//     // }else{
//     //     alert("Invalid Captcha. try Again");
//     //     createCaptcha();
//     // }

//     // alert(tour+' - onBookings');
//     document.getElementById("cfgelement").textContent="Submitting";
//     let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

//     // prepare data
//     let url = 'bookings';
//     let name = document.getElementById('b-name').value;
//     let phone = document.getElementById('b-phone').value;
//     let email = document.getElementById('b-email').value;
//     let date = document.getElementById('b-date').value;
//     let message = document.getElementById('b-message').value;

//     // Post Request
//     fetch(url, {
//         headers: {
//             "Content-Type": "application/json",
//             "Accept": "application/json, text-plain, */*",
//             "X-Requested-With": "XMLHttpRequest",
//             "X-CSRF-TOKEN": token
//             },
//         method: 'post',
//         credentials: "same-origin",
//         body: JSON.stringify({
//             name: name,
//             date: date,
//             email: email,
//             tour: tour,
//             message: message

//         })
//     })
//     .then((data) => {
//         // Hide Form
//         document.getElementById("booking-form").style.display="none";
//         document.getElementById("booking-title").textContent="Thank you for your mail!";

//         // Display Form after 20sec
//         setTimeout(function(){
//             document.getElementById("booking-form").style.display="block";
//             // Reset Form
//             document.getElementById('b-name').value = '';
//             document.getElementById('b-phone').value = '';
//             document.getElementById('b-email').value = '';
//             document.getElementById('b-date').value = '';
//             document.getElementById('b-message').value = '';
            

//             document.getElementById("booking-title").textContent="Book Now!";
//             document.getElementById("cfgelement").textContent="Submit";
//             tour = '';
//         }, 20000);
//        // window.location.href = redirect;
//     })
//     .catch(function(error) {
//         // console.log(error);
//     });
// }

// Captcha
var code;
function createCaptcha() {
    //clear the contents of captcha div first 
    document.getElementById('captcha').innerHTML = "";
    var charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
    var lengthOtp = 6;
    var captcha = [];
    for (var i = 0; i < lengthOtp; i++) {
        //below code will not allow Repetition of Characters
        var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
        if (captcha.indexOf(charsArray[index]) == -1)
        captcha.push(charsArray[index]);
        else i--;
    }
    var canv = document.createElement("canvas");
    canv.id = "captcha";
    canv.width = 100;
    canv.height = 50;
    var ctx = canv.getContext("2d");
    ctx.font = "25px Georgia";
    ctx.strokeText(captcha.join(""), 0, 30);
    //storing captcha so that can validate you can save it somewhere else according to your specific requirements
    code = captcha.join("");
    document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
function validateCaptcha(event) {
    event.preventDefault();
    // debugger
    if (document.getElementById("cpatchaTextBox").value == code) {
        alert("Valid Captcha")
        document.getElementById("contact-form").submit();
        // window.location.href = 'contact-us';
        return false;
    }else{
        alert("Invalid Captcha. try Again");
        createCaptcha();
        event.preventDefault();
        // document.getElementById("contact-form").submit('contact-us');
        // window.location = '#contact';
        // window.location = 'contact-us';
    }
}