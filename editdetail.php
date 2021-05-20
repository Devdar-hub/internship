<?php require "nav.html"?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 0px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
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
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
    box-sizing: content-box;
}
.navbar-nav>li>.dropdown-menu {
    margin-top: 0;
    padding-left: 2px;
    padding-right: 10px;
    border-top-right-radius: 0;
    border-top-left-radius: 0;
}
li{
  margin-bottom:5px;
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
.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container-fluid {
  background-image:url('pic3.jpg');
  padding: 5px 20px 15px 20px;
  border: 2px solid black;
  border-radius: 0px;
  margin-top:50px;
  margin-bottom:50px;
}

input{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 0px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: rgba(143, 4, 34, 0.973);
  color: white;
  padding: 12px;
  margin: 10px 400px;
  text-align:center;
  border: solid;
  width: 25%;
  border-radius: 0px;
  border-style: solid;
  border-color:rgba(143, 4, 34, 0.973);
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: rgba(143, 4, 34, 0.973);
  color:white
}

/* a {
  color: #2196F3;
} */

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
img {
    align:center;
		height: 200px;
		width: 200px;
		border: 2px solid black;
	}
.col-md-9 {
  margin-left:200px;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
@media (min-width:320px) and  (max-width: 800px) {
  .col-md-9{
    margin-left:0px;
    padding-right:30px;
    padding-left:30px;
    
  }
  .btn {
  background-color: rgba(143, 4, 34, 0.973);
  color: white;
  padding: 12px;
  margin: 10px 70px;
  text-align:center;
  border: solid;
  width: 58%;
  border-radius: 0px;
  border-style: solid;
  border-color:rgba(143, 4, 34, 0.973);
  cursor: pointer;
  font-size: 17px;
}
}
	
</style>
</head>
<body>


<div class="row">
  <div class="col-md-9">
    <div class="container-fluid">
      <form action="myads.php" onsubmit="update(event)">
      
        <div class="row">
          <div class="col-50">
            <h3>BOOK DETAILS</h3>
            <label for="TITLE">BOOK TITLE</label>
            <input type="text" id="btitle" name="title" placeholder="Enter Title Of The Book" required>
            <label for="author">AUTHOR</label>
            <input type="text" id="author" name="author" placeholder="Enter The Name Of The Author" required>
            <label for="DESCRIPTION">DESCRIPTION</label>
            <input type="text" id="description" name="description" placeholder="Include condition, features of the book" required style="max-width:100%; height:10%;">
            <label for="ISBN No.">ISBN NO.</label>
            <input type="number" id="isbn" name="isbn" placeholder="Enter The ISBN No. Of The Book" required>
            <label for="genre">GENRE</label>
            <select name="genre" id="genre" style="padding:10px; width:100%; border-color:white;" required>
				<option style="text-align:center;" value="Classics">Classics</option>
				<option style="text-align:center;" value="Education">Education</option>
				<option style="text-align:center;" value="Kids">Kids</option>
				<option style="text-align:center;" value="Mystery">Mystery</option>
				<option style="text-align:center;" value="Computer Science">Computer Science</option>
				<option style="text-align:center;" value="Religious">Religious</option>
				<option style="text-align:center;" value="Historical">Historical</option>
				<option style="text-align:center;" value="Romance">Romance</option>
				<option style="text-align:center;" value="Life Style">Life Style</option>
				<option style="text-align:center;" value="Biography">Biography</option>
				<option style="text-align:center;" value="Fiction">Fiction</option>
				<option style="text-align:center;" value="Non-Fiction">Non-Fiction</option>
				<option style="text-align:center;" value="Horror">Horror</option>
				<option style="text-align:center;" value="Science Fiction">Science Fiction</option>
				<option style="text-align:center;" value="Thriller">Thriller</option>
				<option style="text-align:center;" value="Poetry">Poetry</option>
				<option style="text-align:center;" value="Novel">Novel</option>
			</select>            
            <label for="price">PRICE</label>
            <input type="number" id="price" name="price" placeholder="Set A Price" required>
            <label for="upload photo">UPLOAD PHOTO</label>
            <img id="img1" style=" margin-bottom:10px;">
            <input type="file" id="photo" name="file" onchange="onfile(event)" placeholder="Set A Price" style="width: 84%;" required>
            <label for="progress" id="progress"></label>
          </div>

          <div class="col-50">
            <h3>YOUR DETAILS</h3>
            <label for="name">NAME</label>
            <input type="text" id="Name" name="name" placeholder="Enter your name"required>
            <label for="PHONE NO.">PHONE NO.</label>
            <input type="number" id="Number" name="pno" placeholder="Enter your contact number" required>
            <label for="location">LOCATION</label>
            <input type="text" id="location" name="loc" placeholder="Enter your city" required>
                <label for="email">E-MAIL ID</label>
                <input type="text" id="email1" name="email" placeholder="Enter your email" required>
          </div>
          
        </div>
        <button type="submit" style="color: white; background-color: rgba(143, 4, 34, 0.973); border-style:solid; border-color: rgba(143, 4, 34, 0.973); border-radius:0px; " value="UPDATE DETAILS" class="btn" >UPDATE DETAILS</button>
      </form>
    </div>
  </div>
 
</div>
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
						alert("start");
						storef.snapshot.ref.getDownloadURL().then(function (url) {
							imgurl = url;
							console.log(url);
							

						});
					}
				);

				
				
			}
			// console.log(imgurl);
		}


function parseURLParams(url) {
    var queryStart = url.indexOf("?") + 1,
        queryEnd   = url.indexOf("#") + 1 || url.length + 1,
        query = url.slice(queryStart, queryEnd - 1),
        pairs = query.replace(/\+/g, " ").split("&"),
        parms = {}, i, n, v, nv;

    if (query === url || query === "") return;

    for (i = 0; i < pairs.length; i++) {
        nv = pairs[i].split("=", 2);
        n = decodeURIComponent(nv[0]);
        v = decodeURIComponent(nv[1]);

        if (!parms.hasOwnProperty(n)) parms[n] = [];
        parms[n].push(nv.length === 2 ? v : null);
    }
    return parms;
}
var url = window.location.search;
      var arr = parseURLParams(url);
      var id = arr.id[0];

      console.log(id);

      var docRef = db.collection("products").doc(id);

docRef.get().then((doc) => {
    if (doc.exists) {
        console.log("Document data:", doc.data());
        data = doc.data();
        
        document.getElementById("btitle").value += data.title;
        document.getElementById("author").value += data.author;
        document.getElementById("description").value += data.desc;
        document.getElementById("isbn").value += data.Isbn;
        var genre = document.getElementById("genre").value += data.genre;
        document.getElementById("genre").innerHTML += data.genre;
        console.log(genre);
        document.getElementById("price").value += data.price;
        document.getElementById("img1").src += data.photo;
        document.getElementById("Name").value += data.name;
        document.getElementById("Number").value += data.num;
        document.getElementById("location").value += data.loc;
        var email = document.getElementById("email1").value += data.email;
        console.log(email);
      } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
    }
}).catch((error) => {
    console.log("Error getting document:", error);
});

async function update(e){
  e.preventDefault();
  var title = document.getElementById("btitle").value;
        var author = document.getElementById("author").value;
        var desc = document.getElementById("description").value;
        var isbn = document.getElementById("isbn").value;
        var genre = document.getElementById("genre").value;
        
        var price = document.getElementById("price").value;
        var photo = document.getElementById("img1").src;
        
        var name = document.getElementById("Name").value;
        var number = document.getElementById("Number").value;
        var location = document.getElementById("location").value;
        var email = document.getElementById("email1").value;

        var Ref = db.collection("products").doc(id);

// Set the "capital" field of the city 'DC'
return Ref.update({
    title:title,
    author:author,
    desc:desc,
    Isbn:isbn,
    genre:genre,
    price:price,
    photo:imgurl,
    name:name,
    num:number,
    loc:location,
    email:email
})
.then(() => {
    console.log("Document successfully updated!");
})
.catch((error) => {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
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

</html>
<?php require "footer.php"?>
