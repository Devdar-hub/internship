<?php require "nav.html"?>
<!doctype html>
<html lang="en">

<head>
  <title>Favourites</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css"
    integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw=="
    crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <style>
    .container-fluid {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}
    #txt {
      text-decoration: none;
    }
    #buttons {
      background-color: black;
      border-radius: 0%;
      color: white;
      border-color: black;
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
.filter{
  margin-left: -110px;
}
.dropdown-item.active, .dropdown-item:active {
    color: black;
    text-decoration: none;
    background-color: white;
}
.dropdown-item:focus, .dropdown-item:hover {
    color:black;
    background-color:white;
}
@media (max-width: 982px){
  .filter{
  margin-left: -23px;
}
.dropdown-menu{
  width:100px;
}
        }
 
  </style>
</head>

<body class="container-fluid">
  <h1 class="text-center mb-s" style="font-family: 'Roboto', cursive; margin-top:20px;"><b>SEARCH RESULT</b></h1>
  <nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="/posts" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-target="#my-target2" style="color:black;">
              Sort By&nbsp;<i class="fas fa-sort"></i>
            </a>
            <div id="my-target2" class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><i class="fas fa-chevron-right"></i>&nbsp;Order
                <div class="form-check">
                  <input type="radio" class="form-check-input" name="desc" onclick="sortbydesc(event)"
                    id="dropdownCheck2">
                  <label class="form-check-label" for="dropdownCheck2">
                    &#8377;Descending
                  </label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" name="desc" onclick="sortbydesc(event)"
                    id="dropdownCheck2">
                  <label class="form-check-label" for="dropdownCheck2">
                    &#8377;Ascending
                  </label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" name="desc" onclick="allnew()" id="dropdownCheck2">
                  <label class="form-check-label" for="dropdownCheck2">
                    &#8377;Clear
                  </label>
                </div>
              </a>
            </div>
          </li>
          
        </ul>
    
      </div>
      <nav class="navbar navbar-expand-lg navbar-light">
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent3"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto filter">
            <li class="nav-item dropdown" style="margin-left:10px;">
              <a class="nav-link" href="/posts" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-target="#my-target3" style="color:black;">
                Filter<i class="fas fa-filter"></i>
              </a>
              <div id="my-target3" class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-chevron-right"></i>&nbsp;Price
                  <div class="form-check">
                    <input type="radio" onclick="filter(event)" name="price" value="200" min="100" max="1000"
                      class="form-check-input" id="dropdownCheck2">
                    <label class="form-check-label" for="dropdownCheck2">
                      &#8377;100-1000
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="radio" value="300" onclick="filter2000(event)" name="price" min="1000" max="2000"
                      class="form-check-input" id="dropdownCheck2">
                    <label class="form-check-label" for="dropdownCheck2">
                      &#8377;1000-2000
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" value="400" min="2000" max="3000" name="price"
                      onclick="filter3000(event)" id="dropdownCheck2">
                    <label class="form-check-label" for="dropdownCheck2">
                      &#8377;2000-3000
                    </label>
                  </div>
  
                  <div class="form-check">
                    <input type="radio" class="form-check-input" value="400" name="price" min="3000" max="4000"
                      onclick="filter4000(event)" id="dropdownCheck2">
                    <label class="form-check-label" for="dropdownCheck2">
                      &#8377;3000-4000
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" value="400" name="price" min="4000" max="5000"
                      onclick="filter5000(event)" id="dropdownCheck2">
                    <label class="form-check-label" for="dropdownCheck2">
                      &#8377;4000-5000
                    </label>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
        </div>
      </nav>
    </nav>
  <div class=" card-deck" id="demo">


  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
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
  <script>
    function parseURLParams(url) {
      var queryStart = url.indexOf("?") + 1,
        queryEnd = url.indexOf("#") + 1 || url.length + 1,
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
    var dd;
    async function load() {

      // Create a reference to the cities collection
      var pro = db.collection("products");



      // Create a query against the collection.
      var query = pro.where("author", "==", id).get().then((Snapshot) => {
        Snapshot.forEach((doc) => {

          var pro = doc.data();






          var prodata = doc.data();
          var proid = doc.id;



          //  document.getElementById("name").innerHTML = prodata.name;
          //  document.getElementById("price").innerHTML = prodata.price;
          //  document.getElementById("img").src = prodata.photo;
          console.log(prodata);
          document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id=' + proid + '"><form><div class="card"  style="border-radius:0px; border-color:white; height:400px; margin-bottom:30px; margin-top:20px;"><img class="card-img-top img-fluid" src="' + prodata.photo + '" alt="Card image cap" style="height:60%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + prodata.title + '</h5><div class="card-text"><h6 class="text-center" style="color:black;">&#8377;' + prodata.price + '</h6><input type="hidden" id="pid" value="' + proid + '"></div></div><div class="btn-group d-flex"><button class="btn flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';





        })
      });


    }


    

    // window.onload = load();
    setTimeout(function () { load(); }, 2000);

    function remove(e) {
      e.preventDefault();
      var newid = e.target.parentElement.parentElement.children[1].children[1].children[1].value;
      console.log(newid);
      e.target.parentElement.parentElement.remove();
      db.collection("favourite").doc(newid).delete().then(() => {

        console.log("Document successfully deleted!");
      }).catch((error) => {
        console.error("Error removing document: ", error);
        alert("database error please try again");
      });

    }
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
        
        var newid = e.target.parentElement.parentElement.parentElement.children[0].children[1].children[1].children[1].value;
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
</body>

</html>