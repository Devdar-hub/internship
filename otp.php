<?php require "nav.html"?>
<!doctype html>
<html lang="en">
  <head>
    <title>mobileotp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
    <style>
    .card {
    width: 500px;
    padding: 10px;
    /* border-radius: 20px; */
    background: #fff;
    border: none;
    height: 350px;
    position: relative;
}

.container {
    height: 100vh;
}

body {
    background: #eee;
}

.mobile-text {
    color: #252525;
    font-size: 15px;
}

.form-control {
    margin-right: 12px;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color:black;
    outline: 0;
    box-shadow: none;
}

.cursor {
    cursor: pointer;
}
    </style>
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center container">
        <div class="card py-5 px-3" style="border-radius:0px;">
            <h5 class="m-0 text-center">Mobile phone verification</h5><span class="mobile-text text-center">Enter your phone number below for sending OTP</span>
            <div class="d-flex flex-row mt-5">
                <input type="tel" class="form-control" autofocus="" id="num" style=" color:black; background-color: white; border-radius:0%; text-align:center; border-color:black; ">
                <div id="recaptcha-container"></div><br>
            </div>
            <div class="text-center mt-5" data-toggle="modal" data-target="#details"><button  onclick="pauth(event)"; class="font-weight-bold cursor" style="background-color:black; color:white;border-radius:0px; border-style:solid; border-color:rgba(143, 4, 34, 0.973); width:30%; background-color:rgba(143, 4, 34, 0.973);">Verify</button></div>
            <div class="modal fade" id="details" style="width:100%;">
                <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header text-center">
                        <h4 class="modal-title text-center w-100 font-weight-bold">Enter the code we just sent on your mobile phone <b class="text-danger">+91 9586135105</b></span></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button> 
                     </div>
                     <div class="modal-body mx-3">
                        <div class="d-flex flex-row mt-5">
                            <input type="number" class="form-control" autofocus="" id="num1" style=" color:black; background-color: white; border-radius:0%; text-align:center; border-color:black;  ">
                            
                        </div>
                     </div>
          
                     <div class="modal-footer d-flex justify-content-center">
                     <button class="btn" style="background-color:black; color:white;border-radius:0px; border-style:solid; border-color:rgba(143, 4, 34, 0.973); width:30%; background-color:rgba(143, 4, 34, 0.973);" onclick="verifyCode(event);" data-toggle="modal" data-target="#details1">Submit</button>
                     </div>
                   </div>
                </div>
              </div>
          
        </div>
    </div>
    <div class="modal fade" id="details1" style="width:100%;">
      <div class="modal-dialog">
         <div class="modal-content" style="text-align:center;">
           <div class="modal-header text-center">
              <h4 class="modal-title text-center w-100 font-weight-bold">Please Provide The Following details!!</h4>
              <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button> 
           </div>
           <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-user prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Your Name</label>
              <input type="text" id="name" class="form-control validate"  style=" color:black; background-color: white; border-radius:0%; text-align:center; border-color:black; ">
              </div>
              <div class="md-form mb-5">
              <i class="fas fa-user-edit prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Create Your Username</label>
              <input type="text" id="uname"class="form-control validate" style=" color:black; background-color: white; border-radius:0%; text-align:center; border-color:black; ">
            </div>
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Your Email</label>
              <input type="email" id="email" class="form-control validate" style=" color:black; background-color: white; border-radius:0%; text-align:center; border-color:black; ">
            </div>
           </div>

           <div class="modal-footer d-flex justify-content-center">
           <button class="btn btn-primary" style="background-color:black; color:white;border-radius:0px; border-style:solid; border-color:rgba(143, 4, 34, 0.973); width:30%; background-color:rgba(143, 4, 34, 0.973);" onclick="data()">Submit</button>
           </div>
         </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

    <!-- <script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-app.js"></script> -->

<!-- TODO: Add SDKs for Firebase products that you want to use
https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-database.js"></script>

<script>

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional

  // var firebaseConfig = {

	// apiKey: "AIzaSyAe_khBjSfyamG4qM3f_kr09UlNZ0izzNQ",
	// authDomain: "test-project-89dc8.firebaseapp.com",
	// databaseURL: "https://test-project-89dc8-default-rtdb.firebaseio.com",
	// projectId: "test-project-89dc8",
	// storageBucket: "test-project-89dc8.appspot.com",
	// messagingSenderId: "533975996944",
	// appId: "1:533975996944:web:54bad50505b9bfbe878895",
	// measurementId: "G-XB90JFQZXT"
  // };
  // // Initialize Firebase
  // firebase.initializeApp(firebaseConfig);
  // firebase.analytics();
  // const db = firebase.firestore();
    
         async function pauth(e){
    alert("hi");
    
		window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container' , {'size' : 'invisible'});
	
   
		var num=document.getElementById('num').value;
    console.log(num);
		firebase.auth().signInWithPhoneNumber(num,window.recaptchaVerifier).then(function (confirmationResult) {
			window.confirmationResult=confirmationResult;
			coderesult=confirmationResult;
			console.log(coderesult);
			alert("msg sent");

		}).catch((error) => {
      // Error; SMS not sent
      // ...

    });
	
	
	}

    async function verifyCode(e){
	  alert("hi");
	const code = document.getElementById('num1').value;
confirmationResult.confirm(code).then((result) => {
  // User signed in successfully.
  const user = result.user;
  console.log(user);
  
 
  // ...
}).catch((error) => {
  // User couldn't sign in (bad verification code?)
  // ...
  console.log(error)
});
  }

  async function data(){
    var user = firebase.auth().currentUser;
    userId = user.uid;
    var username = document.getElementById("uname").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
  db.collection("Users").doc(userId).set({
                username: username,
                email: email,
                // profile_picture: photoUrl,
                name : name
              })
                .then(() => {
                  console.log("Document successfully written!");
                  window.location="index.php";
                })
                .catch((error) => {
                  console.error("Error writing document: ", error);
                });
  }

    </script>
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'dfa9290e39e68576c5a119414ec78591b5cba96b';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
  </body>
  <!-- <?php require "footer.php"?> -->
</html>