<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			margin: 0;
			color: #6a6f8c;
			background: #c8c8c8;
			font: 600 16px/18px 'Open Sans', sans-serif;
		}

		*,
		:after,
		:before {
			box-sizing: border-box
		}

		.clearfix:after,
		.clearfix:before {
			content: '';
			display: table
		}

		.clearfix:after {
			clear: both;
			display: block
		}

		a {
			color: inherit;
			text-decoration: none
		}

		.login-wrap {
			width: 100%;
			margin: auto;
			margin-top: 50px;
			max-width: 525px;
			min-height: 700px;
			position: relative;
			background: url(download1.jpg) no-repeat center;
			box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
		}

		.login-html {
			width: 100%;
			height: 100%;
			position: absolute;
			padding: 90px 70px 50px 70px;
			background: rgba(40, 57, 101, .7);
		}

		.login-html .sign-in-htm,
		.login-html .sign-up-htm {
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			position: absolute;
			transform: rotateY(180deg);
			backface-visibility: hidden;
			transition: all .4s linear;
		}

		.login-html .sign-in,
		.login-html .sign-up,
		.login-form .group .check {
			display: none;
		}

		.login-html .tab,
		.login-form .group .label,
		.login-form .group .button {
			text-transform: uppercase;
		}

		.login-html .tab {
			font-size: 22px;
			margin-right: 15px;
			padding-bottom: 5px;
			margin: 0 15px 10px 0;
			display: inline-block;
			border-bottom: 2px solid transparent;
		}

		.login-html .sign-in:checked+.tab,
		.login-html .sign-up:checked+.tab {
			color: #fff;
			border-color: #1161ee;
		}

		.login-form {
			min-height: 345px;
			position: relative;
			perspective: 1000px;
			transform-style: preserve-3d;
		}

		.login-form .group {
			margin-bottom: 15px;
		}

		.login-form .group .label,
		.login-form .group .input,
		.login-form .group .button {
			width: 100%;
			color: #fff;
			display: block;
		}

		.login-form .group .input,
		.login-form .group .button {
			border: none;
			padding: 15px 20px;
			border-radius: 25px;
			background: rgba(255, 255, 255, .1);
		}

		.login-form .group input[data-type="password"] {
			/* text-security: circle; */
			-webkit-text-security: circle;
		}

		.login-form .group .label {
			color: #aaa;
			font-size: 12px;
		}

		.login-form .group .button {
			background: #1161ee;
		}

		.login-form .group label .icon {
			width: 15px;
			height: 15px;
			border-radius: 2px;
			position: relative;
			display: inline-block;
			background: rgba(255, 255, 255, .1);
		}

		.login-form .group label .icon:before,
		.login-form .group label .icon:after {
			content: '';
			width: 10px;
			height: 2px;
			background: #fff;
			position: absolute;
			transition: all .2s ease-in-out 0s;
		}

		.login-form .group label .icon:before {
			left: 3px;
			width: 5px;
			bottom: 6px;
			transform: scale(0) rotate(0);
		}

		.login-form .group label .icon:after {
			top: 6px;
			right: 0;
			transform: scale(0) rotate(0);
		}

		.login-form .group .check:checked+label {
			color: #fff;
		}

		.login-form .group .check:checked+label .icon {
			background: #1161ee;
		}

		.login-form .group .check:checked+label .icon:before {
			transform: scale(1) rotate(45deg);
		}

		.login-form .group .check:checked+label .icon:after {
			transform: scale(1) rotate(-45deg);
		}

		.login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
			transform: rotate(0);
		}

		.login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
			transform: rotate(0);
		}

		.hr {
			height: 2px;
			margin: 60px 0 50px 0;
			background: rgba(255, 255, 255, .2);
		}

		.foot-lnk {
			text-align: center;
			color: white;
		}

		.btn-google {
			color: white;
			background-color: #ea4335;
		}

		.btn-facebook {
			color: white;
			background-color: #3b5998;
		}

		.btn {
			font-size: 80%;
			width: 100%;
			border-radius: 5rem;
			letter-spacing: .1rem;
			font-weight: bold;
			padding: 1rem;
			transition: all 0.2s;
		}

		#message {
			display: none;
			background: #6a6f8c;
			color: #000;
			position: relative;
			padding: 20px;
			margin-top: 10px;
		}

		#message p {
			padding: 10px 35px;
			font-size: 18px;
		}

		/* Add a green text color and a checkmark when the requirements are right */
		.valid {
			color: green;
		}

		.valid:before {
			position: relative;
			left: -35px;
			content: "✔";
		}

		/* Add a red text color and an "x" when the requirements are wrong */
		.invalid {
			color: red;
		}

		.invalid:before {
			position: relative;
			left: -35px;
			content: "✖";
		}
	</style>


</head>

<body>
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
				class="tab">SignIn</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">SignUp</label>
			<form class="login-form" onsubmit="lfunc(event)">
				<div>
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Email</label>
							<input id="user" type="Email" class="input" name="lname" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="lpassword"
								required>
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In">
						</div>
						<h4 style="color:white; text-align:center;">OR</h4>
						<button class="btn btn-lg btn-google btn-block text-uppercase" onclick="glogin(event)"><i
								class="fab fa-google mr-2"></i> Sign in with Google</button>
						<br><br>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="forgotps.html">Forgot Password?</a>
						</div>
					</div>
			</form>
			<form name="Signup" onsubmit="sfunc(event)">
				<div class="sign-up-htm">
					<!-- <div class="group">
						<label for="user" class="label">Username</label>
						<input  type="text" class="input" name="Username" id="Username" required>
					</div> -->
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="input"
							data-type="password" id="Password" name="Password" required>
					</div>
					<div id="message">
						<h3>Password must contain the following:</h3>
						<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
						<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
						<p id="number" class="invalid">A <b>number</b></p>
						<p id="length" class="invalid">Minimum <b>8 characters</b></p>
					</div>
					<!-- <div class="group">
						<label for="pass" class="label">Repeat Password</label>
						<input type="password" class="input" data-type="password" name="Confirmpassword" id="Confirmpassword" required>
					</div> -->
					<div class="group">
						<label for="pass" class="label">Email Address</label>
						<input type="email" class="input" id="Email" name="Email" required>

					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign Up" name="butsignup">

					</div>
					<div class="group">
						<label for="pass" class="label">Enter number</label>
						<input type="text" class="input" id="num" name="num">
						<div id="recaptcha-container"></div><br>
						<button type="button" class="button" onclick="pauth(event);">Send Code</button>
					</div>
					<div class="group">
						<label for="pass" class="label">Enter Verification Code</label>
						<input type="text" class="input" id="num1" name="num1">
						<br>
						<button type="button" class="button" onclick="verifyCode(event);">Verify Code</button>
					</div>
			</form>
			<div class="hr"></div>
			<div class="foot-lnk">
				<label for="tab-1">Already Member?</a>
			</div>
		</div>


	</div>
	</div>
	</div>
	

  <script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-database.js"></script>

<script>

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional

  var firebaseConfig = {

	apiKey: "AIzaSyAe_khBjSfyamG4qM3f_kr09UlNZ0izzNQ",
	authDomain: "test-project-89dc8.firebaseapp.com",
	databaseURL: "https://test-project-89dc8-default-rtdb.firebaseio.com",
	projectId: "test-project-89dc8",
	storageBucket: "test-project-89dc8.appspot.com",
	messagingSenderId: "533975996944",
	appId: "1:533975996944:web:54bad50505b9bfbe878895",
	measurementId: "G-XB90JFQZXT"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  

		var myInput = document.getElementById("Password");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function () {
			document.getElementById("message").style.display = "block";
		}

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function () {
			document.getElementById("message").style.display = "none";
		}

		// When the user starts to type something inside the password field
		myInput.onkeyup = function () {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if (myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if (myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if (myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if (myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}

		async function lbut(e) {
			e.preventDefault();
			// alert("hii");
			var Email = document.getElementById("user").value;
			var Pass = document.getElementById("pass").value;
			console.log(name);
			console.log(pass);
			try {
				const data = new FormData();
				// data.append('Username',Username);
				data.append('Password', Pass);
				// data.append('Confirmpassword',Confirmpassword);
				data.append('lEmail', Email);

				let res = await fetch("code.php", {
					method: 'post',
					body: data,
				});
				let json = await res.text();
				if (json == 1) {
					alert("Successful login");

				} else {
					alert("Email or password is invalid");
				}
			}
			catch (e) {
				console.log(e);
			}

		}


		async function glogin(e) {
			var provider = new firebase.auth.GoogleAuthProvider();

			firebase.auth()
				.signInWithPopup(provider)
				.then((result) => {
					/** @type {firebase.auth.OAuthCredential} */
					var credential = result.credential;

					// This gives you a Google Access Token. You can use it to access the Google API.
					var token = credential.accessToken;
					// The signed-in user info.
					var user = result.user;
					// ...
				}).catch((error) => {
					// Handle Errors here.
					var errorCode = error.code;
					var errorMessage = error.message;
					// The email of the user's account used.
					var email = error.email;
					// The firebase.auth.AuthCredential type that was used.
					var credential = error.credential;
					// ...
				});

			var user = firebase.auth().currentUser;
			console.log("hii");

			if (user != null) {
				console.log("hii2");
				user.providerData.forEach(function (profile) {
					console.log("Sign-in provider: " + profile.providerId);
					console.log("  Provider-specific UID: " + profile.uid);
					console.log("  Name: " + profile.displayName);
					console.log("  Email: " + profile.email);
					console.log("  Photo URL: " + profile.photoURL);
				});
				window.location = "nav.php";
			}
			// alert("Login successful")
		}
		async function lfunc(e) {
			e.preventDefault();
			var email = document.getElementById('user').value;
			var password = document.getElementById('pass').value;

			firebase.auth().signInWithEmailAndPassword(email, password)
				.then((userCredential) => {
					// Signed in
					var user = userCredential.user;
					window.location = "nav.php";

					// ...
				})
				.catch((error) => {
					var errorCode = error.code;
					var errorMessage = error.message;
				});
		}
		async function sfunc(e) {
			e.preventDefault();
			var email = document.getElementById('Email').value;
			var password = document.getElementById('Password').value;

			firebase.auth().createUserWithEmailAndPassword(email, password)
				.then((userCredential) => {
					// Signed in 
					// var user = userCredential.user;
					window.location = "nav.php";

					// ...
				})
				.catch((error) => {
					var errorCode = error.code;
					var errorMessage = error.message;
					// ..
				});
		}

	// window.onload=function (){
	// 	render();
	// };

	// async function render(){
	// 	window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container' , {'size' : 'invisible'});
	// 	recaptchaVerifier.render();
	// }
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
});
  }
	</script>
</body>

</html>