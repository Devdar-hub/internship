<?php require "nav.html"?>

<!doctype html>
<html lang="en">
  <head>
    <title>document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css"
    integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

}html, body {
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
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="admin.php">Manage users</a>
    <a href="ven.php">Vendors</a>
    <a href="users.php">Users</a>
    <a href="adv.php">Advertisements</a>
  </div>
  <div id="main" style="margin-top:0px;">

        <span style="font-size:30px;cursor:pointer; margin-top:60%;" onclick="openNav()" >&#9776; Advertisements</span>
  <table class="table" id="producttable" style="width:100%;">
      <caption>List of Advertisements</caption>
      <thead>
        <tr>
        

          
</tr>
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
    <script>
  var count = 0;
      

      
      db.collection("products").get().then((querySnapshot)=>{
        querySnapshot.forEach((doc)=>{
          count ++;
         
         var data = doc.data();
          console.log(data);
         var id = doc.id;
          document.getElementById("producttable").innerHTML += '<tr><th scope="row">'+count+'</th><td>'+data.title+'</td><td>'+id+'</td><td>'+data.genre+'</td><td><button type="button" onclick="removeadv(event)" class="btn" style="color: black; background-color: lightgrey; border-style:solid; border-color: lightgrey; border-radius:0px; "><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>'

          
        });
        
      }).catch((error)=>{
        console.log("error getting document", error);
      })
      
      function removeadv(event){
      var advid = event.target.parentElement.parentElement.children[2].innerHTML;
      event.target.parentElement.parentElement.remove();

      db.collection("products").doc(advid).delete().then(() => {
    console.log("Document successfully deleted!");
}).catch((error) => {
    console.error("Error removing document: ", error);
});
    }


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
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>