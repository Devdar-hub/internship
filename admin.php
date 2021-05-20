<?php require "nav.html"?>

<!doctype html>
<html lang="en">

<head>
  <title>Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css"
    integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw=="
    crossorigin="anonymous" />
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
  <style>
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
html, body {
    max-width: 100%;
    overflow-x:auto;
}
    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #252525;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
      margin-top:5%;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }
    @media (max-width: 992px) {
      .sidenav{
        margin-top:15%;
      }
    }
  </style>
</head>

<body>

  <div id="mySidenav" class="sidenav" >
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="admin.php">Manage users</a>
    <a href="ven.php">Vendors</a>
    <a href="users.php">Users</a>
    <a href="adv.php">Advertisements</a>
  </div>

  <div id="main" style="margin-top:0px;">
    <span style="font-size:30px;cursor:pointer; margin-top:60%;" onclick="openNav()" >&#9776; Dashboard</span>
    <div class="row">
      <div class="card" style="width: 18rem;margin-left: 3%; margin-top:3%; background-color: lightgrey;color:white;" onclick="users(event)" >
        <div class="card-body">
        <h4 class="card-text" style="color: white;">Users</h4>

          <h1 class="card-title" id="users" style="color: white;"></h1>

        </div>
      </div>

      <div class="card"
        style="width: 18rem; margin-left: 3%; margin-top:3%;background-color: rgba(143, 4, 34, 0.973);color:white;" onclick="vendor(event)">
        <div class="card-body">
        <h4 class="card-text">Vendors</h4>

          <h1 class="card-title" id="vendor"></h1>

        </div>
      </div>

      <div class="card" style="width: 18rem; margin-left: 3%; margin-top:3%; background-color:black; color:white;" onclick="adv(event)">
        <div class="card-body">
        <h4 class="card-text">Advertisements</h4>

          <h1 class="card-title" id="adv"></h1>

        </div>
      </div>
    </div>
<br>
    <table class="table" id="table" style="width:100%;">
      <caption>List of Users</caption>
      <thead>
        <tr>
          <th scope="col">Sr No.</th>
          <th scope="col">First Name</th>
          <th scope="col">UserId</th>
          <th scope="col">Email</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody >
       
      </tbody>
    </table>
    <table class="table" id="vendortable">
      <caption>List of Vendors</caption>
      <thead>
        <tr>
          <th scope="col">Sr No.</th>
          <th scope="col">First Name</th>
          <th scope="col">UserID</th>
          <th scope="col">Location</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody >
       
      </tbody>
    </table>
    <table class="table" id="producttable">
      <caption>List of Advertisements</caption>
      <thead>
        <tr>
          <th scope="col">Sr No.</th>
          <th scope="col">Book Name</th>
          <th scope="col">BookId</th>
          <th scope="col">Category</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody >
       
      </tbody>
    </table>
   
      
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

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional

    
    // const db = firebase.firestore();

    

    
    var pronum = 0;
    var usernum = 0;
    var vendornum = 0;
    db.collection("products")
    .get()
    .then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            // doc.data() is never undefined for query doc snapshots
            // console.log(doc.id, " => ", doc.data());
             var details = doc.data();
             var id = doc.id;
             pronum++;
        });
        // console.log(pronum);
        document.getElementById("adv").innerHTML = pronum;
    })
    .catch((error) => {
        console.log("Error getting documents: ", error);
    });

    db.collection("Users")
    .get()
    .then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            // doc.data() is never undefined for query doc snapshots
            // console.log(doc.id, " => ", doc.data());
             var details = doc.data();
             var id = doc.id;
             usernum++;
        });
        // console.log(usernum);
        document.getElementById("users").innerHTML = usernum;
    })
    .catch((error) => {
        console.log("Error getting documents: ", error);
    });

    db.collection("vendor")
    .get()
    .then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            // doc.data() is never undefined for query doc snapshots
            // console.log(doc.id, " => ", doc.data());
             var details = doc.data();
             var id = doc.id;
             vendornum++;
        });
        // console.log(vendornum);
        document.getElementById("vendor").innerHTML = vendornum;
    })
    .catch((error) => {
        console.log("Error getting documents: ", error);
    });

  </script>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.body.style.backgroundColor = "white";
    }

    function users() {
      var data = [];
      var id = [];
     
      var count = 0;
      document.getElementById("table").style.display = 'block';
      document.getElementById("vendortable").style.display = 'none';
      document.getElementById("producttable").style.display = 'none';

      
      db.collection("Users").get().then((querySnapshot)=>{
        querySnapshot.forEach((doc)=>{
          
          count ++;
          data[count] = doc.data();
          id[count] = doc.id;
          
          
        });
        
        document.getElementById("table").innerHTML += '<tr><th scope="row">1</th><td>'+data[1].username+'</td><td>'+id[1]+'</td><td>'+data[1].email+'</td><td><button type="button" onclick="removeuser(event)" class="btn" style="color: black; background-color: lightgrey; border-style:solid; border-color: lightgrey; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("table").innerHTML += '<tr><th scope="row">2</th><td>'+data[2].username+'</td><td>'+id[2]+'</td><td>'+data[2].email+'</td><td><button type="button" onclick="removeuser(event)" class="btn" style="color: black; background-color: lightgrey; border-style:solid; border-color: lightgrey; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("table").innerHTML += '<tr><th scope="row">3</th><td>'+data[3].username+'</td><td>'+id[3]+'</td><td>'+data[3].email+'</td><td><button type="button" onclick="removeuser(event)" class="btn" style="color: black; background-color: lightgrey; border-style:solid; border-color: lightgrey; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("table").innerHTML += '<tr><th scope="row">4</th><td>'+data[4].username+'</td><td>'+id[4]+'</td><td>'+data[4].email+'</td><td><button type="button" onclick="removeuser(event)" class="btn" style="color: black; background-color: lightgrey; border-style:solid; border-color: lightgrey; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("table").innerHTML += '<tr><th scope="row">5</th><td>'+data[5].username+'</td><td>'+id[5]+'</td><td>'+data[5].email+'</td><td><button type="button" onclick="removeuser(event)" class="btn" style="color: black; background-color: lightgrey; border-style:solid; border-color: lightgrey; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
      }).catch((error)=>{
        console.log("error getting document", error);
      })
      
    }
    window.onload  = function(){
      users();
    }

    function vendor() {
      var data = [];
      var id = [];
      document.getElementById("table").style.display = "none";
      document.getElementById("vendortable").style.display = "block";
      document.getElementById("producttable").style.display = "none";
      var count = 0;
      db.collection("vendor").get().then((querySnapshot)=>{
        querySnapshot.forEach((doc)=>{
          count ++;
          data[count] = doc.data();
          id[count] = doc.id;
         
        });
        document.getElementById("vendortable").innerHTML += '<tr><th scope="row">1</th><td>'+data[1].name+'</td><td>'+id[1]+'</td><td>'+data[1].loc+'</td><td><button type="button" onclick="removevendor(event)" class="btn" style="color: white; background-color: rgba(143, 4, 34, 0.973); border-style:solid; border-color: rgba(143, 4, 34, 0.973); border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("vendortable").innerHTML += '<tr><th scope="row">2</th><td>'+data[2].name+'</td><td>'+id[2]+'</td><td>'+data[2].loc+'</td><td><button type="button" onclick="removevendor(event)" class="btn" style="color: white; background-color: rgba(143, 4, 34, 0.973); border-style:solid; border-color: rgba(143, 4, 34, 0.973); border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("vendortable").innerHTML += '<tr><th scope="row">3</th><td>'+data[3].name+'</td><td>'+id[3]+'</td><td>'+data[3].loc+'</td><td><button type="button" onclick="removevendor(event)" class="btn" style="color: white; background-color: rgba(143, 4, 34, 0.973); border-style:solid; border-color: rgba(143, 4, 34, 0.973); border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("vendortable").innerHTML += '<tr><th scope="row">4</th><td>'+data[4].name+'</td><td>'+id[4]+'</td><td>'+data[4].loc+'</td><td><button type="button" onclick="removevendor(event)" class="btn" style="color: white; background-color: rgba(143, 4, 34, 0.973); border-style:solid; border-color: rgba(143, 4, 34, 0.973); border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("vendortable").innerHTML += '<tr><th scope="row">5</th><td>'+data[5].name+'</td><td>'+id[5]+'</td><td>'+data[5].loc+'</td><td><button type="button" onclick="removevendor(event)" class="btn" style="color: white; background-color: rgba(143, 4, 34, 0.973); border-style:solid; border-color: rgba(143, 4, 34, 0.973); border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
      }).catch((error)=>{
        console.log("error getting document", error);
      })
    }
    
    function adv() {
      var data = [];
      var id = [];
      document.getElementById("table").style.display = "none";
      document.getElementById("vendortable").style.display = "none";
      document.getElementById("producttable").style.display = "block";
      var count = 0;
      db.collection("products").get().then((querySnapshot)=>{
        
        querySnapshot.forEach((doc)=>{
          count ++;
          data[count] = doc.data();
          id[count] = doc.id;
          
        })
        document.getElementById("producttable").innerHTML += '<tr><th scope="row">1</th><td>'+data[1].title+'</td><td>'+id[1]+'</td><td>'+data[1].genre+'</td><td><button type="button" onclick="removeadv(event)" class="btn" style="color: white; background-color: black; border-color:black; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("producttable").innerHTML += '<tr><th scope="row">2</th><td>'+data[2].title+'</td><td>'+id[2]+'</td><td>'+data[2].genre+'</td><td><button type="button" onclick="removeadv(event)" class="btn" style="color: white; background-color: black; border-style:solid; border-color: black; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("producttable").innerHTML += '<tr><th scope="row">3</th><td>'+data[3].title+'</td><td>'+id[3]+'</td><td>'+data[3].genre+'</td><td><button type="button" onclick="removeadv(event)" class="btn" style="color: white; background-color: black; border-style:solid; border-color: black; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("producttable").innerHTML += '<tr><th scope="row">4</th><td>'+data[4].title+'</td><td>'+id[4]+'</td><td>'+data[4].genre+'</td><td><button type="button" onclick="removeadv(event)" class="btn" style="color: white; background-color: black; border-style:solid; border-color: black; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        document.getElementById("producttable").innerHTML += '<tr><th scope="row">5</th><td>'+data[5].title+'</td><td>'+id[5]+'</td><td>'+data[5].genre+'</td><td><button type="button" onclick="removeadv(event)" class="btn" style="color: white; background-color: black; border-style:solid; border-color: black; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'
        
      }).catch((error)=>{
        console.log("error getting document", error);
      })
    }

    function removeuser(event){
      var userid = event.target.parentElement.parentElement.children[2].innerHTML;
      db.collection("Users").doc(userid).delete().then(() => {
    console.log("Document successfully deleted!");
}).catch((error) => {
    console.error("Error removing document: ", error);
});

      db.collection("vendor").doc(userid).delete().then(() => {
    console.log("Document successfully deleted!");
}).catch((error) => {
    console.error("Error removing document: ", error);
});
var products = db.collection('products').where('UserId','==',userid);
products.get().then(function(querySnapshot) {
  querySnapshot.forEach(function(doc) {
    doc.ref.delete();
    
  });
  console.log("Document successfully deleted!");
});
var fav = db.collection('favourite').where('userid','==',userid);
fav.get().then(function(querySnapshot) {
  querySnapshot.forEach(function(doc) {
    doc.ref.delete();
    
  });
  console.log("Document successfully deleted!");
});
    }

    function removevendor(event){
      var userid = event.target.parentElement.parentElement.children[2].innerHTML;
      db.collection("vendor").doc(userid).delete().then(() => {
    console.log("Document successfully deleted!");
}).catch((error) => {
    console.error("Error removing document: ", error);
});

var products = db.collection('products').where('UserId','==',userid);
products.get().then(function(querySnapshot) {
  querySnapshot.forEach(function(doc) {
    doc.ref.delete();
    
  });
  console.log("Document successfully deleted!");
});

    }

    function removeadv(event){
      var advid = event.target.parentElement.parentElement.children[2].innerHTML;
      db.collection("products").doc(advid).delete().then(() => {
    console.log("Document successfully deleted!");
}).catch((error) => {
    console.error("Error removing document: ", error);
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
