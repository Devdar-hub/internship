<html>

<body id="body">
  <style>
    /* The message box is shown when the user clicks on the password field */
    #message {
      display: none;
      background: #f1f1f1;
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

    /*-------------------------------------------search style ------------------------------------------------*/

    .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
 

}


.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  /* background-image: url('searchicon.png'); */
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <div class="navbar navbar-inverse" style="border-radius:0px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="navbar-header">
            <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span
                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a href="#" class="navbar-brand">GROUP.COM</a>
          </div>
          <div class="navbar-collapse collapse" id="mobile_menu">
            <ul class="nav navbar-nav">
              <li>
                <form action="" class="navbar-form">
                  <div class="form-group">
                    <!-- <div class="input-group">
                      <input type="search" name="search" id="" placeholder="Search Anything Here..."
                        class="form-control">
           
                      <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                    </div> -->
                    <div class="dropdown">
 
                  </div>
                </form>
                
              </li>
            </ul>
             <button onclick="myFunction()" class="dropbtn">Search</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    
    
  </div>
</div>
            <!-- <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">About One</a></li>
                                    <li><a href="#">About Two</a></li>
                                    <li><a href="#">About Three</a></li>
                                    <li><a href="#">About Four</a></li>
                                    <li><a href="#">About Five</a></li>
                                    <li><a href="#">About Six</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Welcome</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul> -->
            <div id="outdiv">
            <button id="logbut" type="submit" onclick="logout(event)" class="btn btn-primary">logout</button></div>
                 
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user" id="un"></span></a></li>
              <div id="in-out">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                      class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#signinPage">Login<i
                          class="fas fa-sign-in-alt ml-3"></i></a></li>
                    <li><a href="#" data-toggle="modal" data-target="#signupPage">Sign Up<i
                          class="fas fa-user-plus ml-3"></i></a></li>
                  </ul>
                </li>
            </ul>
          </div>


        </div>
      </div>
    </div>
  </div>

  </div>

  <div class="modal fade" id="signinPage">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h3 class="modal-title w-100 dark-grey-text font-weight-bold">Sign In</h3>
          <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
        </div>
        <form onsubmit="lfunc(event)" action="nav.php">
          <div class="modal-body mx-4">
            <div class="md-form">
              <label data-error="wrong" data-success="right">Your Email</label>
              <input type="email" class="form-control validate" name="lname" id="user" required>
            </div>
            <div class="md-form">
              <label data-error="wrong" data-success="right">Your Password</label>
              <input type="password" class="form-control validate" id="pass" name="lpassword" required>
              <p class="font-small blue-text d-flex justify-content-center"><a href="#" class="blue-text ml-1">Forgot
                  Password?</a></p>
            </div>
            <div class="text-center mb-3">
              <button type="submit" class="btn btn-primary btn-block z-depth-la">Sign In</button>
            </div>
            <p class="font-small dark-grey-text d-flex justify-content-center">or sign in with:</p>
            <div class="row my-3 justify-content-center"></div>
            <button type="button" class="btn btn-danger btn-block z-depth-la" onclick="glogin(event)">Sign In With
              Google&nbsp;<i class="fab fa-google-plus-g text-center"></i></button>

            <!-- <button type="button" class="btn btn-danger btn-block z-depth-la" onclick="pauth(event)">Sign In With OTP&nbsp;<i></i></button>
             <div id="recaptcha-container"></div> -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="signupPage">
    <form onsubmit="sfunc(event)">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title text-center w-100 font-weight-bold">Sign Up</h4>
            <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-user prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Your Name</label>
              <input type="text" class="form-control validate" name="Username" id="Username" required>
            </div>
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Your Email</label>
              <input type="email" class="form-control validate" id="Email" name="Email" required>
            </div>
            <div class="md-form mb-5">
              <i class="fas fa-lock prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Your Password</label>
              <input type="password" class="form-control validate" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                id="Password" name="Password" required>
            </div>
            <div id="message">
              <h3>Password must contain the following:</h3>
              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
              <p id="number" class="invalid">A <b>number</b></p>
              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Phone number</label>
              <input type="number" class="form-control validate" name="Num" id="Num" required>
            </div>
          </div>

          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">SignUp</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    const db = firebase.firestore();

//----------------- --------------------------------------------on page load-------------------------------------------------------------------

// to add subcollection 

// db.collection("rooms").doc("roomA").collection("messages").doc("message1").set({username:"demo"}).then(()=>{
//   console.log("added");
// })  ;

// to get single doc

// var docRef = db.collection("rooms").doc("roomA").collection("messages");

// docRef.get().then((doc) => {
//     if (doc.exists) {
//         console.log("Document data:", doc.data());
//     } else {
//         // doc.data() will be undefined in this case
//         console.log("No such document!");
//     }
// }).catch((error) => {
//     console.log("Error getting document:", error);
// });

// to get multiple doc
// db.collection("Users")
//     .get()
//     .then((querySnapshot) => {
//         querySnapshot.forEach((doc) => {
//             // doc.data() is never undefined for query doc snapshots
//             console.log(doc.id, " => ", doc.data());
//         });
//     })
//     .catch((error) => {
//         console.log("Error getting documents: ", error);
//     });

//---------------------------------- to display username on home page------------------------------------------

    firebase.auth().onAuthStateChanged(function (user) {
      if (user) {
        // User is signed in.
        document.getElementById("in-out").style.display = "none";
        var user = firebase.auth().currentUser;
        var name = user.displayName;
        if (name == null) {
          db.collection('Users').doc(user.uid).get().then(doc => {
            document.getElementById("un").innerText = doc.data().username;
          })
        } else {
          // User is signed in.
          console.log(user.displayName);
          document.getElementById("un").innerHTML = user.displayName;
        }
      } else {
        // No user is signed in.
        document.getElementById("outdiv").style.display = "none";
        
        console.log("no user signin");
      }

    });

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

  

    //------------------------------ to delete collection -------------------------------------
    // async function del(e){
    //   db.collection("users").doc("lovelace").delete();
    //   console.log("done");
    // }

//--------------------------------------------------- google signin------------------------------------------------------------------

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

          var user = firebase.auth().currentUser;
          console.log("hii");


          if (user != null) {
            console.log("hii2");
            user.providerData.forEach(function (profile) {
              // console.log("Sign-in provider: " + profile.providerId);
              userId = profile.uid;
              // console.log("  Name: " + profile.displayName);
              // console.log("  Email: " + profile.email);
              // console.log("  Photo URL: " + profile.photoURL);
              // console.log("  Photo URL: " + profile.number);

              // firebase.database().ref('userss/' + userId).set({
              //   username: profile.displayName,
              //   email: profile.email,
              //   profile_picture: profile.photoURL,
              //   // M_number: pnum,
              // });
              // Add a new document in collection "cities"

              db.collection("Users").doc(userId).set({
                username: profile.displayName,
                email: profile.email,
                profile_picture: profile.photoURL,
              })
                .then(() => {
                  console.log("Document successfully written!");
                  window.location.reload();
                })
                .catch((error) => {
                  console.error("Error writing document: ", error);
                });

            });

          }

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

      
    }
// ---------------------------------------------------login function----------------------------------------------------------
    async function lfunc(e) {
      e.preventDefault();
      alert("hello")
      var email = document.getElementById('user').value;
      var password = document.getElementById('pass').value;
      // console.log("hii");
      firebase.auth().signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
          // Signed in
          // var user = userCredential.user;
          

          window.location = "nav.php";
          
          

          // ...
        })
        .catch((error) => {
          var errorCode = error.code;
          alert(error.message);

        });
    }

    // -----------------------------------------------signin function----------------------------------------------------

    async function sfunc(e) {
      e.preventDefault();
      alert("hii");
      var email = document.getElementById('Email').value;
      var password = document.getElementById('Password').value;
      var pnum = document.getElementById('Num').value;
      var Uname = document.getElementById('Username').value;

      firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
          // Signed in 
          // var user = userCredential.user;
          var user = firebase.auth().currentUser;
          console.log("hii");

          if (user != null) {
            console.log("hii2");
            user.providerData.forEach(function (profile) {

              // name = Uname;
              email = user.email;

              emailVerified = user.emailVerified;
              userId = user.uid;
              console.log(Uname);
              console.log(email);
              // console.log(photoUrl);
              console.log(userId);


              // firebase.database().ref('userss/' + userId).set({
              //   username: Uname,
              //   email: email,
              //   // profile_picture: photoUrl,
              //   M_number: pnum
              // });
              alert("after");
              db.collection("Users").doc(userId).set({
                username: Uname,
                email: email,
                // profile_picture: photoUrl,
                M_number: pnum
              })
                .then(() => {
                  console.log("Document successfully written!");
                })
                .catch((error) => {
                  console.error("Error writing document: ", error);
                });

              alert("before");
              

            });
            
          }
          // location.reload();
          // window.location = "nav.php";

          // ...
        })
        .catch((error) => {
          var errorCode = error.code;
          var errorMessage = error.message;
          alert("Email already register");
          // ..
        });
    }

// -----------------------------------------------------otp login-------------------------------------------------------------

    // async function pauth(e) {
    //   alert("hi");

    //   window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', { 'size': 'invisible' });


    //   var num = document.getElementById('num').value;
    //   console.log(num);
    //   firebase.auth().signInWithPhoneNumber(num, window.recaptchaVerifier).then(function (confirmationResult) {
    //     window.confirmationResult = confirmationResult;
    //     coderesult = confirmationResult;
    //     console.log(coderesult);
    //     alert("msg sent");

    //   }).catch((error) => {
    //     // Error; SMS not sent
    //     // ...

    //   });


    // }

// -----------------------------------------------------------logout function----------------------------------------------------------

    async function logout(e) {
      e.preventDefault();
      // alert('hiiiii');
      firebase.auth().signOut().then(() => {
          // location.reload();
          window.location.href = "http://localhost/internship/home.php";
          console.log("logout");
        // Sign-out successful.
      }).catch((error) => {
        // An error happened.
      });
    }


// --------------------------------------------------search---------------------------------------------------

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
  db.collection("products").get().then((Snapshot)=>{
    Snapshot.forEach((doc)=>{
      var data = doc.data()
      var proid = doc.id;
      document.getElementById("myDropdown").innerHTML += '<a href="http://localhost/internship/prodetail.html?id='+proid+'">'+data.name+'</a>';
      
    })
  });
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}



  </script>
</body>

</html>