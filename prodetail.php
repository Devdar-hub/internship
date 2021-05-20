<?php require "nav.html"?><!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/520.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
    <style>
     /* body{ 
   border: 2px solid #f6f7f8;
  padding: 100px; 
} */
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
.shine {
  background: #f6f7f8;
  background-image: linear-gradient(to right, #f6f7f8 0%, #edeef1 20%, #f6f7f8 40%, #f6f7f8 100%);
  background-repeat: no-repeat;
  background-size: 800px 104px; 
  display: inline-block;
  position: relative; 
  
  -webkit-animation-duration: 1s;
  -webkit-animation-fill-mode: forwards; 
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-name: placeholderShimmer;
  -webkit-animation-timing-function: linear;
  }

box {
  height: 104px;
  width: 100px;
}

.img {
  display: inline-flex;
  flex-direction: column; 
  margin-left: 25px;
  margin-top:20px;
  vertical-align: top; 
}



lines {
  height: 10px;
  margin-top: 10px;
  width: 200px; 
}

photo {
  display: block!important;
  width: 325px; 
  height: 100px; 
  margin-top:20px;
}

@-webkit-keyframes placeholderShimmer {
  0% {
    background-position: -468px 0;
  }
  
  100% {
    background-position: 468px 0; 
  }
}
@media (max-width: 535px) {
  #title{
    text-align: center;
    font-size: 25px;
  }
  
  #price{
    text-align: left;
    font-size:20px;
  }
  .price{
    text-align: left;
    font-size:20px;
  }

  #decp{
    text-align: left;
    font-size:20px;
  }
  .decp{
    text-align: left;
    font-size:20px;
  }

  #genre{
    text-align: left;
    font-size:20px;
  }
  .genre{
    text-align: left;
    font-size:20px;
  }

  #author{
    text-align: left;
    font-size:20px;
  }
  .author{
    text-align: left;
    font-size:20px;
  }
  
  #ISBN{
    text-align: left;
    font-size:20px;
  }
  .ISBN{
    text-align: left;
    font-size:20px;
  }

  .box
  {
    margin-left: 10px;
  }
}
@media (min-width:540px) and (max-width: 767px) {
  #title{
    text-align: center;
    font-size: 30px;
  }
  
  #price{
    text-align: left;
    font-size: 20px;
  }
  .price{
    text-align: right;
    font-size:20px;
  }

  #decp{
    text-align: left;
    font-size:20px;
  }
  .decp{
    text-align: right;
    font-size:20px;
  }

  #genre{
    text-align: left;
    font-size:20px;
  }
  .genre{
    text-align: right;
    font-size:20px;
  }

  #author{
    text-align: left;
    font-size:20px;
  }
  .author{
    text-align: right;
    font-size:20px;
  }
  
  #ISBN{
    text-align: left;
    font-size:20px;
  }
  .ISBN{
    text-align: right;
    font-size:20px;
  }

  .box
  {
    margin-left: 70px;
  }
}
@media (min-width:650px) and (max-width: 767px) {
#img{
  margin-left: 70px;
}
}
</style>
  </head>
  
  <body>
      <!--Section: Block Content-->
     
    
<section class="mb-5" style="margin-top:20px; ">

    <div class="row ">
      <div class="col-md-4 mb-4 mb-md-0 "  >
        <div class="mdb-lightbox">
           <div class="row product-gallery mx-1">
              <div class="col-12 mb-0">
                <div class="view overlay rounded z-depth-1 main-img ">
                    <img id="img" class="img-fluid z-depth-1 " style=" height:400px; width:500px;">
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-8 box">
        <h5 id="title"></h5>
      
        
        
        <div class="table-responsive">
          <table class="table table-sm table-borderless mb-0">
            <tbody>
              <tr>
                <th class="pl-0 w-15 price" scope="row"><strong>Price</strong></th>
                <td id="price" ></td>
              </tr>
              <tr>
                <th class="pl-0 w-15 decp" scope="row"><strong>Description</strong></th>
                <td id="decp" ></td>
              </tr>
              <tr>
                <th class="pl-0 w-15 genre" scope="row"><strong>Genre</strong></th>
                <td id="genre"></td>
              </tr>
              <tr>
                <th class="pl-0 w-15 author" scope="row"><strong>Author</strong></th>
                <td id="author"></td>
              </tr>
              <tr>
                <th class="pl-0 w-15 ISBN" scope="row"><strong>ISBN No.</strong></th>
                <td id="ISBN"></td>
              </tr>
             <tr>
               <input type="hidden" id="pid">
             </tr>
            </tbody>
          </table>
        </div>
        <hr>
        <button type="button" class="btn btn-md mr-1 mb-2" onclick="fav(event)" style="background-color:black; color:white;border-radius:0px; background-color:rgba(143, 4, 34, 0.973);">Add to favourite</button>
        <a href="payment\index.html" target="_blank"><button type="button" class="btn btn-md mr-1 mb-2" style="background-color:black; color:white;border-radius:0px; background-color:rgba(143, 4, 34, 0.973);">Payment link</button></a>
      </div>
    </div>
    <div id="WAButton"></div>
  
  </section>
  <!--Section: Block Content-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  
  <!--Floating WhatsApp css-->  
<link rel="stylesheet" href="floating-wpp.min.css">  
<!--Floating WhatsApp javascript-->  
<script type="text/javascript" src="floating-wpp.min.js"></script>
      
   <script>
  var data;
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
      document.getElementById("pid").value=id;
      
      var docRef = db.collection("products").doc(id);

docRef.get().then((doc) => {
    if (doc.exists) {
        console.log("Document data:", doc.data());
        data = doc.data();
        console
        document.getElementById("decp").innerHTML += data.desc;
        document.getElementById("price").innerHTML += data.price;
        document.getElementById("title").innerHTML += data.title;
        document.getElementById("genre").innerHTML += data.genre;
        document.getElementById("author").innerHTML += data.author;
        document.getElementById("ISBN").innerHTML += data.Isbn;
        document.getElementById("img").src += data.photo;

        //------------------------------------- whatsapp chat---------------------------------------------

        $(function () {
              $('#WAButton').floatingWhatsApp({
                  phone: data.num, //WhatsApp Business phone number
                  headerTitle: 'Chat with us on WhatsApp!', //Popup Title
                  popupMessage: 'Hello, how can we help you?', //Popup Message
                  showPopup: true, //Enables popup display
                  message: data.title,
                  buttonImage: '<img src="whatsapp.svg" />', //Button Image
                  //headerColor: 'crimson', //Custom header color
                  //backgroundColor: 'crimson', //Custom background button color
                  position: "right", //Position: left | right
                  
   
              });
          });
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
    }
}).catch((error) => {
    console.log("Error getting document:", error);
});
  
           
    

function fav(e) {
      // alert("Book Added To Favourites");
      e.preventDefault();
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
        var newid = e.target.parentElement.parentElement.children[1].children[1].children[0].children[0].children[5].children[0].value;
        console.log(newid);
        db.collection("favourite").doc(newid).set({

          userid: userid,
          productid: newid

        })


          .then(() => {
            console.log("Document successfully written!");
            alert('Book Added To Favourites');


          }).catch((error) => {
            console.error("Error writing document: ", error);
          });
      }
      else {
        alert("You Need To Login");
      }
      // Add a new document in collection "cities"


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
