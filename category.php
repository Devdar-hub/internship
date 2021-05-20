<?php require "nav.html"?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        #txt{
            text-decoration:none;
        }
        .container-fluid{
            margin-top:20px;
            margin-bottom:10px;
        }
        .card{
            border-style:none;
            margin-top:10px;
        }
        .list-group-item{
            border-radius:0px;
        }
.category_block li:hover {
    background-color: rgba(143, 4, 34, 0.973);
    text-decoration:none;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.category_block li:hover.active a{
    background-color: rgba(143, 4, 34, 0.973);
    color:white;
}
.card-header{
    border-radius:0px;
    background-color:black;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color:rgba(143, 4, 34, 0.973);
    border-color:rgba(143, 4, 34, 0.973) ;
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
  <body>
    

    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header text-white text-uppercase" style="border-radius:0px;"><i class="fa fa-list"></i> Categories</div>
                    <ul class="list-group category_block" style="border-radius:0px;">
                        <li class="list-group-item " style="border-radius:0px;"><a id="Classics" href="category.php?id=Classics">Classics</a></li>
                        <li class="list-group-item "><a id="Education" href="category.php?id=Education">Education</a></li>
                        <li class="list-group-item"><a id="Kids" href="category.php?id=Kids">Kids</a></li>
                        <li class="list-group-item"><a id="Mystery" href="category.php?id=Mystery">Mystery</a></li>
                        <li class="list-group-item"><a id="Computer Science" href="category.php?id=Computer Science">Computer Science</a></li>
                        <li class="list-group-item"><a id="Religious" href="category.php?id=Religious">Religious</a></li>
                        <li class="list-group-item"><a id="Historical" href="category.php?id=Historical">Historical</a></li>
                        <li class="list-group-item"><a id="Romance" href="category.php?id=Romance">Romance</a></li>
                        <li class="list-group-item"><a id="Life Style" href="category.php?id=Life Style">Life Style</a></li>
                        <li class="list-group-item"><a id="Biography" href="category.php?id=Biography">Biography</a></li>
                        <li class="list-group-item"><a id="Fiction" href="category.php?id=Fiction">Fiction</a></li>
                        <li class="list-group-item"><a id="Non-Fiction" href="category.php?id=Non-Fiction">Non-Fiction</a></li>
                        <li class="list-group-item"><a id="Horror" href="category.php?id=Horror">Horror</a></li>
                        <li class="list-group-item"><a id="Science Fiction" href="category.php?id=Science Fiction">Science Fiction</a></li>
                        <li class="list-group-item"><a id="Thriller" href="category.php?id=Thriller">Thriller</a></li>
                        <li class="list-group-item"><a id="Poetry" href="category.php?id=Poetry">Poetry</a></li>
                        <li class="list-group-item" style="border-radius:0px;"><a id="Novel" href="category.php?id=Novel">Novel</a></li>
                    </ul>
                </div>
                
            </div>
            <div class="col">
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
                <div class="row" id="demo">
                    
                    
                </div>
            </div>
    
        </div>
    </div>
    
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">

     
</script>
    <script>

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

    
      $(document).on('click', 'ul li', function(){
          $(this).addClass('active').siblings().removeClass('active')
      })
    
    
 var pro = db.collection("products")
 var query = pro.where("genre","==", id)
    .get()
    .then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            // doc.data() is never undefined for query doc snapshots
            console.log(doc.id, " => ", doc.data());
             var details = doc.data();
             var id = doc.id;
             
            // console.log(details.photo);
            // document.getElementById("demo").innerHTML += '<div class="card" style="height:450px; border-radius:0px;"><img class="card-img-top img-fluid" src="'+details.photo+'" alt="Card image cap" style="height:70%; width:10%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" id="1">'+details.name+'</h5><div class="card-text"><h6>&#8377;'+details.price+'</h6> <input type="hidden" id="pid" name="proid"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill" style="width:50%; border-radius:0px;">Add To Cart</button><button class="btn btn-warning flex-fill"style="color:white; width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourite</button></div></div>';
            document.getElementById("demo").innerHTML += '<div class="col-12 col-md-6 col-lg-4"><a id="txt" href="prodetail.php?id=' + id + '"><div class="card" style="height:450px; border-radius:0px;"><img class="card-img-top" src="'+details.photo+'" alt="Card image cap" style="height:50%; border-radius:0px; max-width:100%;"><div class="card-body"><h4 class="card-title text-center">'+details.title+'</h4><p class="card-text"><h5 id="price" style="color:black; text-align:center;">&#8377;'+details.price+'</h5></p><input type="hidden" id="pid" value="'+doc.id+'" ><div class="row"><button class="btn btn-block" style="background-color:black; color:white; border-radius:0px; border-style:solid; border-color:black;" onclick="fav(event)">Add to Favourites</button></div></div></div></a></div>';
            //     document.getElementById("img").src=details.photo;
            // document.getElementById("heading").innerHTML=details.name;
            // var proid = document.getElementById("pid").value=id;
            // console.log(proid);
            // document.getElementById("rate").innerHTML=details.price;
            
        });
    })
    .catch((error) => {
        console.log("Error getting documents: ", error);
    });

    function fav(e){
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
        // var newid = e.target.parentElement.parentElement.children[1].children[1].children[1].tagName;
        var newid = e.target.parentElement.parentElement.parentElement.children[1].children[4].value;
        console.log(newid);
				db.collection("favourite").doc(newid).set({
				
			userid: userid,
    productid: newid
    
  	})
    
				
				.then(()=>{
					console.log("Document successfully written!");
          alert('Book Added To Favourites');
          
				
        }).catch((error) => {
					console.error("Error writing document: ", error);
				});
			}
			else{
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
  <?php require "footer.php"?>
</html>