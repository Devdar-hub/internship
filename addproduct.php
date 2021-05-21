<?php require "nav.html"?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="style.css"> -->
	<!-- <link rel="stylesheet" href="../styling/css.css"> -->

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<style>
	html, body {
    max-width: 100%;
    overflow-x:auto;
}
	img {
		height: 200px;
		width: 200px;
		border: 2px solid black;
	}
	.mar{
		background-color:#252525; 
		border-style:solid; 
		border-width:2px;
		/* border-color:grey;  */
		margin-top:10px;
		background-image:url('pic3.jpg');
		text-align:center; 
		color:black;
	}
	.alignment{
		text-align:center;
	}
	a {
    color:black;
    text-decoration: none;
    background-color: transparent;
    margin-left:0px;
}

a:hover {
    color:black;
    text-decoration: none;
}
.navbar-light .navbar-brand {
    color: white;
}
.navbar-light .navbar-nav .nav-link {
    color: white;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color: white;
}
.navbar-light .navbar-brand:hover {
    color:white;
}
	@media (min-width:320px) and  (max-width: 575px) {
    .col-md-10{
		/* align-self: left; */
		/* margin-right: 200px; */
        /* margin-left: 20px; */
		padding-right: 20px;
        padding-left: 20px;
		box-sizing:border-box
	   }
	   /* .space{
		   padding-left: 10px;
		   padding-right: 10px;
	   } */
	}
</style>

<body>
	<form class="col-md-10 container bg-default mar" onsubmit="vendor(event)" id="myForm">
		<br>
		
		<h3 class="mb-4" style="text-align:center;">Book Details</h3>
		<div class="row">
			<div class="col-md-6">
		<div class="form-group">
			<label class="alignment" for="Book Title">Book Title</label>
			<input type="text" class="form-control" id="btitle" placeholder="Enter Title Of The Book" required
				style=" color:black; background-color: white; border-radius:0%; text-align:left; border-color:white; ">
			<div class="invalid-feedback">
				Book Title Is Required.
			</div>
		</div>

		<div class="form-group">
			<label for="Author">Author</label>
			<input type="text" class="form-control" id="author" placeholder="Enter The Name Of The Author" required
				style=" color:black; background-color: white; border-radius:0%; text-align:left; border-color:white; ">
			<div class="invalid-feedback">
				Book Title Is Required.
			</div>
		</div>
		<div class="form-group">
			<label for="Description">Description</label>
			<input type="text-area" class="form-control" id="description" required
				placeholder="Include condition, features and reason for selling"
				style=" color:black; background-color: white; border-radius:0%; text-align:left; border-color:white; height:100px;">
			<div class="invalid-feedback">
				Description is required.
			</div>
		</div>
		<br>
		<div class="form-group">
			<label for="ISBN">ISBN No.</label>
			<input type="number" class="form-control" id="isbn"  placeholder="Enter The ISBN No. Of The Book" required
			style=" color:black; background-color: white; border-radius:0%; text-align:left; border-color:white; ">
			<div class="invalid-feedback">
				Book Title Is Required.
			</div>
		</div>
		</div>
		<div class="col-md-6">
		<div class="form-group">
			<label for="Genre">Genre</label><br>
			<select name="genre" id="genre" style="padding:10px; width:50%; border-color:white;" required>
				<option style="text-align:left;" value="Classics">Classics</option>
				<option style="text-align:left;" value="Education">Education</option>
				<option style="text-align:left;" value="Kids">Kids</option>
				<option style="text-align:left;" value="Mystery">Mystery</option>
				<option style="text-align:left;" value="Computer Science">Computer Science</option>
				<option style="text-align:left;" value="Religious">Religious</option>
				<option style="text-align:left;" value="Historical">Historical</option>
				<option style="text-align:left;" value="Romance">Romance</option>
				<option style="text-align:left;" value="Life Style">Life Style</option>
				<option style="text-align:left;" value="Biography">Biography</option>
				<option style="text-align:left;" value="Fiction">Fiction</option>
				<option style="text-align:left;" value="Non-Fiction">Non-Fiction</option>
				<option style="text-align:left;" value="Horror">Horror</option>
				<option style="text-align:left;" value="Science Fiction">Science Fiction</option>
				<option style="text-align:left;" value="Thriller">Thriller</option>
				<option style="text-align:left;" value="Poetry">Poetry</option>
				<option style="text-align:left;" value="Novel">Novel</option>
			</select>
		</div>
		
		
		<div class="form-group">
			<label for="Price">Price</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"
						style=" color: black; background-color: white; border-color: white;">&#8377;</span>
				</div>
				<input type="number" class="form-control" id="price" placeholder="Set A Price" required
					min="100" max="5000" style=" color:black; background-color: white; border-radius:0%; text-align:left; border-color:white;">
				<div class="invalid-feedback">
					Price is required.
				</div>
			</div>
		</div>

		<div class="form-group">
			<label for="photo">Upload Photo</label>
			<img id="img1">
			<input type="file" class="form-control" id="photo" onchange="onfile(event)" required multiple
				style=" color: #fff; background-color: white; border-radius:0%; text-align:left; border-color:white;">
			<label for="progress" id="progress"></label>
			<div class="invalid-feedback">
				Photo is required.
			</div>
		</div>
		</div>
		</div>
		<hr>
		
		<h3 class="mb-4" style="text-align:center;">Your Details</h3>
		<div class="row">
		<div class="col-md-6">
		<div class="form-group">
			<label for="Name">Name</label>
			<input type="text" class="form-control" id="Name" placeholder="Enter your name"
				style=" color:black; background-color: white; border-radius:0%; text-align:left; border-color:white;">
			<div class="invalid-feedback">
				Name is required.
			</div>
		</div>
		<div class="form-group">
			<label for="Phone no.">Phone No.</label>
			<input type="number"  class="form-control" id="Number"  placeholder="Enter your contact number" required
				pattern="[789][0-9]{9}" style=" color:black; background-color: white; border-radius:0%; text-align:left; border-color:white;">
			<div class="invalid-feedback">
				Number is required.
			</div>
		</div>
		</div>
		<div class="col-md-6">
		<div class="form-group">
			<label for="location">Location</label>
			<input type="text" class="form-control" id="location" placeholder="Enter your city" required
				style=" color:black; background-color: white; border-radius:0%; text-align:left; border-color:white;">
			<div class="invalid-feedback">
				Location is required.
			</div>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="test" placeholder="Enter your email" required
				style=" color:black; background-color: white; border-radius:0%; text-align:left; border-color:white;">
			<div class="invalid-feedback">
				Location is required.
			</div>
		</div>
		</div>
		</div>
		</div>

		<button class="btn" type="submit"
			style="color: white; width:20%; background-color: rgba(143, 4, 34, 0.973); border-style:solid; border-color: rgba(143, 4, 34, 0.973); border-radius:0px; ">Upload
			Book</button>
		<br />
		<br>
		
	</form>
	<br />
	<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-storage.js"></script>
	<script>
	
		var imgurl;
		
		// var userid = user.uid;
		function onfile(e) {

			var size = e.target.files.length;
			console.log(size);
			for (i = 0; i < size; i++) {
				var file = e.target.files[i];
				// console.log(file)
				var reader = new FileReader();
				// console.log(reader);
				reader.onload = function () {
					document.getElementById("img1").src = reader.result;
				}
				reader.readAsDataURL(file);



				var storef = firebase.storage().ref('books/' + file.name).put(file);
				// var fileref = storef.child(file.name);
				storef.on('State_change', function (snapshot) {

					var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
					document.getElementById("progress").innerHTML = 'upload' + progress + '%';

				},
					function (error) {
						alert("error in upload");
					},
					function () {
						
						storef.snapshot.ref.getDownloadURL().then(function (url) {
							imgurl = url;
							console.log(url);
							

						});
					}
				);

				
				
			}
			// console.log(imgurl);
		}

		async function vendor(e) {
			e.preventDefault();

			
			var title = document.getElementById('btitle').value;
			var desc = document.getElementById('description').value;
			var price = document.getElementById('price').value;
			var photo = document.getElementById('photo').value;
			var name = document.getElementById('Name').value;
			var num = document.getElementById('Number').value;
			var genre = document.getElementById('genre').value;
			var isbn = document.getElementById('isbn').value;
			console.log(genre);
			var author = document.getElementById('author').value;
			console.log(author);
			var loc = document.getElementById('location').value;
			var email = document.getElementById('test').value;

			var user = firebase.auth().currentUser;
			// var name, email, photoUrl, uid, emailVerified;

			if (user != null) {
				//   name = user.displayName;
				//   email = user.email;
				//   photoUrl = user.photoURL;
				//   emailVerified = user.emailVerified;
				var userid = user.uid;  // The user's ID, unique to the Firebase project. Do NOT use
				// this value to authenticate with your backend server, if
				// you have one. Use User.getToken() instead.
				db.collection("vendor").doc(userid).set({
					title: title,
					author: author,
					desc: desc,
					price: price,
					photo: imgurl,
					genre:genre,
					name: name,
					num: num,
					loc: loc,
					Isbn: isbn,
					email:email
				});
				db.collection("products").doc().set({
					title: title,
					desc: desc,
					author: author,
					genre:genre,
					price: price,
					photo: imgurl,
					name: name,
					num: num,
					loc: loc,
					Isbn: isbn,
					UserId: userid,
					email:email
				})
					.then(ref => {

						ref.set({ extra_idField: ref.id }, { merge: true }).then(() => {

							console.log("Document successfully written!");
							window.location = "myads.php";
						})
					}).catch((error) => {
						console.error("Error writing document: ", error);
						window.location = "myads.php";
					});
			}
			else {
				alert("no user login");
			}
			// Add a new document in collection "cities"

			alert('Book uploaded');
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
<?php require "footer.php"?>

</html>