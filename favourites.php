<?php require "nav.html"?><!doctype html>
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
  #txt{
        text-decoration:none;
      }
  .image{
        height:60%; 
        border-radius:0px;
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
 /* @media (min-width:768px)and  (max-width: 837px) {
            .card-title{
              font-size: 15px;
            }
            h6{
              font-size: 13px;
            }
          }
          @media (min-width:992px)and  (max-width: 1116px) {
            .card-title{
              font-size: 15px;
            }
            h6{
              font-size: 13px;
            }
            .image{
              height:55%; 
              border-radius:0px;
            }
          } */
</style>
</head>

<body class="container-fluid">
  <h1 class="text-center mb-s" style="font-family: 'Roboto', cursive; margin-top:70px;"><b>MY FAVOURITES</b></h1>
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
  <script>
    var dd;
    async function load() {
      var user = firebase.auth().currentUser;
      if (user != null) {

        console.log("hii");
        var uid = user.uid;
        // Create a reference to the cities collection
        var fav = db.collection("favourite");
       
        
                
        // Create a query against the collection.
        var query = fav.where("userid", "==", uid).get().then((Snapshot) => {
          Snapshot.forEach((doc) => {
         
            var pro = doc.data();
            dd = pro.productid;

            var docRef = db.collection("products").doc(dd);

            docRef.get().then((doc) => {
              if (doc.exists) {
                var prodata = doc.data();
                var proid = doc.id;
                
                
                
                //  document.getElementById("name").innerHTML = prodata.name;
                //  document.getElementById("price").innerHTML = prodata.price;
                //  document.getElementById("img").src = prodata.photo;
                console.log(prodata);
                document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id='+proid+'"><form><div class="card"  style="border-radius:0px; border-color:white; height:400px; margin-bottom:30px; margin-top:20px;"><img class="card-img-top img-fluid image" src="' + prodata.photo + '" alt="Card image cap"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + prodata.title + '</h5><div class="card-text"><h6 class="text-center" style="color:black;">&#8377;' + prodata.price + '</h6><input type="hidden" id="pid" value="'+pro.productid+'"></div></div><div class="btn-group d-flex"><button class="btn flex-fill" style="color:white; width:50%; background-color:rgba(143, 4, 34, 0.973); border-radius:0px;" onclick="remove(event)">REMOVE</button></div></div></form></a></div>';

                
              } else {
                // doc.data() will be undefined in this case
                console.log("No such document!");
              }
            }).catch((error) => {
              console.log("Error getting document:", error);
            });

          })
        });
      
      } else {
        console.log("no login");
      }


    }
  
    // window.onload = load();
    setTimeout(function () { load(); }, 2500);

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