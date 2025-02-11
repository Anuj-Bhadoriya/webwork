
function sendEmail() {
    var params = {
     name : document.getElementById('name').value,
    email : document.getElementById('email').value, 
    fathername : document.getElementById('fatherName').value,
    mothername : document.getElementById('motherName').value,
    gender : document.getElementById('gender').value,
    contactnumber : document.getElementById('contactNumber').value,
    dob : document.getElementById('dob').value,
    emergencyNumber : document.getElementById('emergencyNumber').value,
    address : document.getElementById('address').value,
    //idNumber : document.getElementById('idNumber').value,
    acting : document.getElementById('acting').value,
    photography : document.getElementById('photography').value,
    screenplay : document.getElementById('screenplay').value,
    };

const serviceID = "service_1qovxrl";
const templateID = "template_whmuemj";

emailjs.send(serviceID,templateID,params)
.then(
    res=>{
        document.getElementById('name').value="";
         document.getElementById('email').value="";
         document.getElementById('fatherName').value="";
         document.getElementById('motherName').value="";
        document.getElementById('gender').value="";
        document.getElementById('contactNumber').value ="";
        document.getElementById('dob').value = "";
        document.getElementById('emergencyNumber').value = "";
        document.getElementById('email').value = "";
        document.getElementById('address').value= "";
        //idNumber : document.getElementById('idNumber').value= "";
        document.getElementById('acting').value="";
        document.getElementById('photography').value = "";
        document.getElementById('screenplay').value = "" ;
        console.log(res);
        alert("your message sent succefully")
    })
    .catch((err) =>console.log(err));
}

// participantName,
// fatherName,
// motherName,
// gender,
// contactNumber,
// email,
// dob,
// emergencyNumber,
// address,
// idNumber,
// workshops