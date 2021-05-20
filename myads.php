<?php require "nav.html"?><!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        html, body {
    max-width: 100%;
    overflow-x:none;
}
    .tit{
        text-decoration:none; 
        color:black;
    }
    .edit{
            background-color:black; 
            color:white; 
            border-radius:0px; 
            border-style:solid; 
            border-color:black;
        }
    .rem{
            color: white; 
            background-color: rgba(143, 4, 34, 0.973); 
            border-style:solid; 
            border-color: rgba(143, 4, 34, 0.973); 
            border-radius:0px; 
    }
    .btn:hover, .btn:focus {
    color:white;
    text-decoration: none;
}
a {
    color:black;
    text-decoration: none;
    background-color: transparent;
    margin-left:0px;
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
.margin{
    margin-left:750px;
    margin-top:15px;
    float:right;
}
.navbar {
    position: relative;
    z-index: 1000;
    min-height: 50px;
    margin-bottom: 20px;
    border: 0px solid transparent;
    border-radius:0px;
}
@media (min-width: 760px) and  (max-width: 1024px) {
.navbar {
    border-radius: 0px;
}
.margin{
    margin-left:0px;
    margin-top:15px;
    float:right;
}
.navbar {
    position: relative;
    z-index: 1000;
    min-height: 0px;
    margin-bottom: 20px;
    border: 0px solid transparent;
    border-radius:0px;
}
.navbar-collapse {
    max-height: 0px;
    padding-right: 15px;
    margin-top: -80px;
    margin-left: 260px;
    padding-left: 15px;
    }
    
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    margin-left: -200px;
    overflow: scroll;
    height: 250px;
    border: 1px solid #252525;
    z-index: 1;
}
.navbar-brand {
    float: left;
    margin-left: -230px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
.form-inline .form-control {
    display: inline-block;
    margin-left: -200px;
}
}
@media (min-width:547px)and  (max-width: 767px) {
    .margin{
    margin-left:0px;
    margin-top:15px;
    float:right;
}
} 
    @media (min-width:320px)and  (max-width: 546px) {
        .tit{
            font-size: 50%;
        }
        .edit{
            background-color:black; 
            color:white; 
            border-radius:0px; 
            border-style:solid; 
            border-color:black;
        }
        .margin{
    margin-left:0px;
    margin-top:10px;
    float:right;
}
    }
    @media (min-width:250px) and (max-width:320px) {
        .margin{
    margin-left:0px;
    margin-top:10px;
    float:right;
}
    }
    @media (min-width:1024px) and (max-width:1320px) {
        .margin{
    margin-left:550px;
    margin-top:10px;
    float:right;
}
    }
    </style>
  </head>
  <body>
    
    
    <div class="container-fluid" style="margin-top:0px;">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <table class="table table-hover">
                    <thead style="background-color:#252525;border-color:#252525; color:white; height:30%; border-style:solid;">
                        <tr>
                            <th>Product</th>
                            <th class="text-center">Price</th>
                            <th></th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody style="background-color:white; border-color:#252525;; border-style:solid;" id="demo">
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-auth.js"></script>
    <script>
        function load(){
 var user = firebase.auth().currentUser;
//  if(user == null){
//      console.log("user empty");
//  }else{
//      var userid = user.uid;
//      console.log(userid);
//  }
 
 
  
  var pro = db.collection("products")
 var query = pro.where("UserId","==", user.uid)
    .get()
    .then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            // doc.data() is never undefined for query doc snapshots
            console.log(doc.id, " => ", doc.data());
             var details = doc.data();
             var id = doc.id;
             
            // console.log(details.photo);
            
            // document.getElementById("demo").innerHTML += '<div class="card" style="height:450px; border-radius:0px;"><img class="card-img-top img-fluid" src="'+details.photo+'" alt="Card image cap" style="height:70%; width:10%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" id="1">'+details.name+'</h5><div class="card-text"><h6>&#8377;'+details.price+'</h6> <input type="hidden" id="pid" name="proid"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill" style="width:50%; border-radius:0px;">Add To Cart</button><button class="btn btn-warning flex-fill"style="color:white; width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourite</button></div></div>';
            document.getElementById("demo").innerHTML += '<tr style="border-color:#252525; border-style:solid; border-width:0px 2px 0px 2px;"><td class="col-sm-8 col-md-6 size"><div class="media"><a class="thumbnail pull-left" href="prodetail.php?id='+doc.id+'"><img class="media-object" src="'+details.photo+'" style="width: 72px; height: 72px;"></a><div class="media-body"><h3 class="media-heading"><a href="#" class="tit">'+details.title+'</a></h3><h5><a href="prodetail.php?id='+doc.id+'" class="tit">View more...</a></h5></div></div></td><td class="col-sm-1 col-md-1 text-center"><strong>&#8377;'+details.price+'</strong></td><td class="col-sm-1 col-md-1 text-center"><a href="editdetail.php?id='+doc.id+'"><button type="button" class="btn edit"><i class="fas fa-edit"></i>&nbsp;Edit Details</button></a></td><td class="col-sm-1 col-md-1"><input type="hidden" value="'+doc.id+'"><button type="button" onclick="remove(event)" class="btn rem" ><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>';
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
}
setTimeout(function () { load(); }, 2000);

async function remove(e){
    var proid = e.target.parentElement.children[0].value;
    // console.log(proid);
    db.collection("products").doc(proid).delete().then(() => {
    console.log("Document successfully deleted!");
    e.target.parentElement.parentElement.parentElement.remove();
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
<?php require "footer.php"?>
</html>