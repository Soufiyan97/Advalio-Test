function sendMail(){
    var params = {
        name : document.getElementById('name').value,
        email : document.getElementById('email').value,
        message : document.getElementById('message').value
    };
const serviceID = "service_2yh9zac";
const templateID = "template_f0i5tgv";

emailjs
.send(serviceID,templateID,params)
.then((res) => {
        document.getElementById("name").value="";
        document.getElementById("email").value="";
        document.getElementById("message").value="";
        console.log(res);
        alert("Your message sent successfuly");
    })
.catch((err)=>console.log(err));
}
