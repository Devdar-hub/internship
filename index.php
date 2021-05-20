<?php require "nav.html"?>
<!doctype html>
<html lang="en">

<head>
  <title>Bibliosmia</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css"
    integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw=="
    crossorigin="anonymous" />
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
    #buttons {
      background-color: black;
      border-radius: 0%;
      color: white;
      border-color: black;
    }

    #txt {
      text-decoration: none;
    }

    #price {
      text-align: center;
    }
    .catext{
        margin-top:25%; 
        color:white; 
        margin-left:25%; 
        text-align:center;}
        
      .author{
        color:white; 
        text-align:center; 
        margin-left:25%;}

        img{
          height:400px; 
          width:400px; 
          margin-top:20px;}

        .catext2{
          margin-top:25%; 
          color:black; 
          margin-left:25%; 
          text-align:center;}
          
        .cabtn{
            color:white; 
            text-align:center; 
            margin-left:50%; 
            width:20%;
            background-color:rgba(143, 4, 34, 0.973);
            border-style:solid; 
            border-color:rgba(143, 4, 34, 0.973);}

        .card{
            border-radius:0px; 
            border-color:white; 
            height:400px;
            /* width:300px;  */
            margin-bottom:50px;
            /* margin-right:250px; */
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
.filter{
  margin-left: -110px;
}
@media (max-width: 982px){
  .filter{
  margin-left: -23px;
}
.dropdown-menu{
  width:100px;
}
        }
        @media (min-width:981px)and  (max-width: 1285px){
          .card{
            border-radius:0px; 
            border-color:white; 
            height:500px; 
            margin-bottom:50px;
        } 
        }
        

          @media (min-width:768px)and  (max-width: 980px) {
            .catext{
           font-size: 30px;
           margin-top:100px;
           margin-right: 5%;
           margin-left:5%;
           text-align: center;
         } 
         .author{
        color:white; 
        text-align:center; 
        margin-left:20%;
        margin-right:25%;}
            img{
            max-width:100%;
            margin-right:100px;} 
      .card{
            border-radius:0px; 
            border-color:white; 
            height:450px; 
            margin-bottom:50px;
        }
        .cabtn{
            color:white; 
            text-align:center; 
            margin-left:50%; 
            width:30%;
            background-color:rgba(143, 4, 34, 0.973);
            border-style:solid; 
            border-color:rgba(143, 4, 34, 0.973);}

          }
          @media (min-width:768px)and  (max-width: 970px) {
            .card-title{
              font-size: 17px;
            }
          }
          
      @media (min-width:401px) and (max-width: 767px) {
         .catext{
           font-size: 20px;
           margin-top:10px;
           margin-right: 10%;
           margin-left: 10%;
           text-align: center;
         } 
         .author{
        color:white; 
        text-align:center; 
        margin-left:20%;
        margin-right:25%;
        margin-bottom:10%;}

          img{
            max-width:50%;
           height:250px;
           margin-left:auto;
           margin-right:auto}
           
          .catext2{
           font-size: 20px;
          margin-top:5%; 
          color:black; 
          margin-left:10%;
          margin-right:10%; 
          text-align:center;} 
   
   .cabtn{
    color:white; 
    text-align:center; 
    margin-top:10px;
    margin-left:40%; 
    width:30%;
    background-color:rgba(143, 4, 34, 0.973);
    border-style:solid; 
    border-color:rgba(143, 4, 34, 0.973);}
    .card{
            border-radius:0px; 
            border-color:white; 
            height:450px; 
            margin-bottom:50px;
        }

  }
     @media (max-width: 400px) {
          .catext{
           font-size: 20px;
           margin-top:20px;
           margin-right: 10%;
           margin-left: 10%;
           text-align: center;
         } 
         .author{
        color:white; 
        text-align:center; 
        margin-left:20%;
        margin-right:25%;}
    img{
          max-width:50%;
           height:250px;
           margin-left:auto;
           margin-right:auto;
           margin-bottom:10%;}
          
   .catext2{
    font-size: 20px;
    margin-top:5%; 
    color:black; 
    margin-left:10%;
    margin-right:10%; 
    text-align:center;}
    
  .cabtn{
    color:white; 
    text-align:center; 
    margin-top:10px;
    margin-left:40%; 
    width:32%;
    background-color:rgba(143, 4, 34, 0.973);
    border-style:solid; 
    border-color:rgba(143, 4, 34, 0.973);}
  }
  
  </style>

</head>

<body>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
    style="background-color:#252525; margin-top:0px;">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height:500px;">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-6">
            <h3 class="catext">If You Don't Like To Read,You
              Haven't Found The Right Book</h3>
            <p class="author"><strong>-J.K. Rowling</strong></p>
          </div>
          <div class="col-md-6">
            <img class="d-block" src="books.jpg" alt="First slide">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6">
            <h3 class="catext">You know you’ve read a good
              book when you turn the last page and feel a little as if you have lost a friend.</h3>
            <p class="author"><strong>– Paul Sweeney</strong></p>

          </div>
          <div class="col-md-6">
            <img class="d-block" src="book.jpeg" alt="Second slide">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6">
            <h3 class="catext">The reading of all good books
              is like a conversation with the finest minds of past centuries.</h3>
            <p class="author"><strong>– Rene Descartes</strong></p>
          </div>
          <div class="col-md-6">
            <img class="d-block" src="hp.jpeg" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container-fluid" style="margin-top:50px;">

    <h1 class="text-center mb-s" style="font-family: 'Roboto', cursive;"><b>BOOKS</b></h1>
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
    
    <div class="card-deck" id="demo"></div>
    <div class="card-deck" id="filter1000"></div>
    <div class="card-deck" id="filter2000"></div>
    <div class="card-deck" id="filter3000"></div>
    <div class="card-deck" id="filter4000"></div>
    <div class="card-deck" id="filter5000"></div>
    <div class="card-deck" id="sortbydesc"></div>
    <div class="card-deck" id="sortbyaesc"></div>

  </div>
  <br>
  <a href="category.php?id=Classics"><h1 class="text-center mb-s" style="font-family: 'Roboto', cursive;"><b>CATEGORIES</b></h1></a>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
    style="background-color:white; margin-top:30px;">
    <div class="carousel-inner" style="height:500px;">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-6">
            <h3 class="catext2">If You Don't Like To Read,You
              Haven't Found The Right Book</h3>
            <a href="category.php?id=Kids"><button class="cabtn"><strong>KIDS</strong></button></a>
          </div>
          <div class="col-md-6">
            <img class="d-block" src="i2.jpg" alt="First slide">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
    style="background-color:lightgrey; margin-top:0px;">
    <div class="carousel-inner" style="height:500px;">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-6">
            <h3 class="catext2">History, despite its wrenching
              pain, cannot be unlived, but if faced with courage, need not be lived again.</h3>
            <a href="category.php?id=Historical"><button class="cabtn" ><strong>HISTORICAL</strong></button></a>
          </div>
          <div class="col-md-6">
            <img class="d-block" src="history.jpg" alt="First slide">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
    style="background-color:white; margin-top:0px;">
    <div class="carousel-inner" style="height:500px;">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-6">
            <h3 class="catext2">I do not fear computers. I fear lack of them.</h3>
            <a href="category.php?id=Computer Science"><button class="cabtn"><strong>COMPUTER
                  SCIENCE</strong></button></a>
          </div>
          <div class="col-md-6">
            <img class="d-block" src="cs.jpeg" alt="First slide">
          </div>
        </div>
      </div>
    </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('.slider').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });</script>
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
    function allnew() {
      document.getElementById("demo").style.display="inline-flex";
          document.getElementById("filter3000").style.display="none";
          document.getElementById("filter4000").style.display="none";
          document.getElementById("filter2000").style.display="none";
          document.getElementById("filter5000").style.display="none";
          document.getElementById("filter1000").style.display="none";
      var details = [];
      var count = 0;
      var id = [];
      db.collection("products")
        .get()
        .then((querySnapshot) => {
          querySnapshot.forEach((doc) => {
            // doc.data() is never undefined for query doc snapshots
            console.log(doc.id, " => ", doc.data());
            count++;
            details[count] = doc.data();
            id[count] = doc.id;

            // console.log(details.photo);

            // document.getElementById("demo").innerHTML += '<div class="card" style="height:450px; border-radius:0px;"><img class="card-img-top img-fluid" src="'+details.photo+'" alt="Card image cap" style="height:70%; width:10%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" id="1">'+details.name+'</h5><div class="card-text"><h6>&#8377;'+details.price+'</h6> <input type="hidden" id="pid" name="proid"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill" style="width:50%; border-radius:0px;">Add To Cart</button><button class="btn btn-warning flex-fill"style="color:white; width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourite</button></div></div>';
            // document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-3 col-sm-12"><a id="txt" href="prodetail.php?id='+doc.id+'"><form><div class="card"><img class="card-img-top img-fluid" src="'+details.photo+'" alt="Card image cap" style="height:60%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">'+details.title+'</h5><div class="card-text"><h6 id="price" style="color:black;">&#8377;'+details.price+'</h6><input type="hidden" id="pid" value="'+doc.id+'" ></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
            //     document.getElementById("img").src=details.photo;
            // document.getElementById("heading").innerHTML=details.name;
            // var proid = document.getElementById("pid").value=id;
            // console.log(proid);
            // document.getElementById("rate").innerHTML=details.price;

          });
          document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id=' + id[1] + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + details[1].photo + '" alt="Card image cap" style="height:57%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + details[1].title + '</h5><div class="card-text"><h6 id="price" style="color:black;">&#8377;' + details[1].price + '</h6><input type="hidden" id="pid" value="' + id[1] + '" ></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
          document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id=' + id[2] + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + details[2].photo + '" alt="Card image cap" style="height:57%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + details[2].title + '</h5><div class="card-text"><h6 id="price" style="color:black;">&#8377;' + details[2].price + '</h6><input type="hidden" id="pid" value="' + id[2] + '" ></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
          document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id=' + id[3] + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + details[3].photo + '" alt="Card image cap" style="height:57%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + details[3].title + '</h5><div class="card-text"><h6 id="price" style="color:black;">&#8377;' + details[3].price + '</h6><input type="hidden" id="pid" value="' + id[3] + '" ></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
          document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id=' + id[4] + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + details[4].photo + '" alt="Card image cap" style="height:57%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + details[4].title + '</h5><div class="card-text"><h6 id="price" style="color:black;">&#8377;' + details[4].price + '</h6><input type="hidden" id="pid" value="' + id[4] + '" ></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
          document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id=' + id[5] + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + details[5].photo + '" alt="Card image cap" style="height:57%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + details[5].title + '</h5><div class="card-text"><h6 id="price" style="color:black;">&#8377;' + details[5].price + '</h6><input type="hidden" id="pid" value="' + id[5] + '" ></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
          document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id=' + id[6] + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + details[6].photo + '" alt="Card image cap" style="height:57%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + details[6].title + '</h5><div class="card-text"><h6 id="price" style="color:black;">&#8377;' + details[6].price + '</h6><input type="hidden" id="pid" value="' + id[6] + '" ></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
          document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id=' + id[7] + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + details[7].photo + '" alt="Card image cap" style="height:57%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + details[7].title + '</h5><div class="card-text"><h6 id="price" style="color:black;">&#8377;' + details[7].price + '</h6><input type="hidden" id="pid" value="' + id[7] + '" ></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
          document.getElementById("demo").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="prodetail.php?id=' + id[8] + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + details[8].photo + '" alt="Card image cap" style="height:57%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + details[8].title + '</h5><div class="card-text"><h6 id="price" style="color:black;">&#8377;' + details[8].price + '</h6><input type="hidden" id="pid" value="' + id[8] + '" ></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
        })
        .catch((error) => {
          console.log("Error getting documents: ", error);
        });

    }
    window.onload = function () {
      allnew();
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
        var newid = e.target.parentElement.parentElement.children[1].children[1].children[1].value;
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

    // -----------------------------------------filter--------------------------------------------------------------
    function filter(e) {
      document.getElementById("demo").style.display = "none";
      document.getElementById("filter3000").style.display = "none";
      document.getElementById("filter4000").style.display = "none";
      document.getElementById("filter2000").style.display = "none";
      document.getElementById("filter5000").style.display = "none";
      document.getElementById("filter1000").style.display = "inline-flex";

      var limit = e.target.value;
      console.log(limit);
      var fav = db.collection("products");

      // Create a query against the collection.
      var query = fav.where("price", ">", "100", "&&", "price", "<", "1000").get().then((Snapshot) => {
        // var query = fav.orderBy("title").get().then((Snapshot) => {
        Snapshot.forEach((doc) => {

          var prodata = doc.data();
          var proid = doc.id;

          console.log(prodata);
          document.getElementById("filter1000").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="http://localhost/intern1/prodetail.php?id=' + proid + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + prodata.photo + '" alt="Card image cap" style="height:60%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + prodata.title + '</h5><div class="card-text"><h6 class="text-center" style="color:black;">&#8377;' + prodata.price + '</h6><input type="hidden" id="pid" value="' + proid + '"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
        })
      });

    }

    function filter2000(e) {
      document.getElementById("demo").style.display = "none";
      document.getElementById("filter2000").style.display = "none";
      document.getElementById("filter1000").style.display = "none";
      document.getElementById("filter4000").style.display = "none";
      document.getElementById("filter5000").style.display = "none";
      document.getElementById("filter2000").style.display = "inline-flex";
      var limit = e.target.value;
      console.log(limit);
      var fav = db.collection("products");

      // Create a query against the collection.
      var query = fav.where("price", ">", "1000")
      var query = fav.where("price", "<", "2000")
        .get().then((Snapshot) => {
          Snapshot.forEach((doc) => {

            var prodata = doc.data();
            var proid = doc.id;

            console.log(prodata);
            document.getElementById("filter2000").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="http://localhost/intern1/prodetail.php?id=' + proid + '"><form><div class="card" ><img class="card-img-top img-fluid" src="' + prodata.photo + '" alt="Card image cap" style="height:60%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + prodata.title + '</h5><div class="card-text"><h6 class="text-center" style="color:black;">&#8377;' + prodata.price + '</h6><input type="hidden" id="pid" value="' + proid + '"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
          })
        });

    }

    function filter3000(e) {
      document.getElementById("demo").style.display = "none";
      document.getElementById("filter1000").style.display = "none";
      document.getElementById("filter2000").style.display = "none";
      document.getElementById("filter5000").style.display = "none";
      document.getElementById("filter4000").style.display = "none";
      document.getElementById("filter3000").style.display = "inline-flex";
      var limit = e.target.value;
      console.log(limit);
      var fav = db.collection("products");

      // Create a query against the collection.
      var query = fav.where("price", ">", "2000", "&&", "price", "<", "3000").get().then((Snapshot) => {
        Snapshot.forEach((doc) => {

          var prodata = doc.data();
          var proid = doc.id;

          console.log(prodata);
          document.getElementById("filter3000").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="http://localhost/intern1/prodetail.php?id=' + proid + '"><form><div class="card" ><img class="card-img-top img-fluid" src="' + prodata.photo + '" alt="Card image cap" style="height:60%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + prodata.title + '</h5><div class="card-text"><h6 class="text-center" style="color:black;">&#8377;' + prodata.price + '</h6><input type="hidden" id="pid" value="' + proid + '"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
        })
      });

    }
    function filter4000(e) {
      document.getElementById("demo").style.display = "none";
      document.getElementById("filter1000").style.display = "none";
      document.getElementById("filter2000").style.display = "none";
      document.getElementById("filter3000").style.display = "none";
      document.getElementById("filter5000").style.display = "none";
      document.getElementById("filter4000").style.display = "inline-flex";
      var limit = e.target.value;
      console.log(limit);
      var fav = db.collection("products");

      // Create a query against the collection.
      var query = fav.where("price", ">", "3000", "&&", "price", "<", "4000").get().then((Snapshot) => {
        Snapshot.forEach((doc) => {

          var prodata = doc.data();
          var proid = doc.id;

          console.log(prodata);
          document.getElementById("filter4000").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="http://localhost/intern1/prodetail.php?id=' + proid + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + prodata.photo + '" alt="Card image cap" style="height:60%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + prodata.title + '</h5><div class="card-text"><h6 class="text-center" style="color:black;">&#8377;' + prodata.price + '</h6><input type="hidden" id="pid" value="' + proid + '"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
        })
      });

    }
    function filter5000(e) {
      document.getElementById("demo").style.display = "none";
      document.getElementById("filter2000").style.display = "none";
      document.getElementById("filter1000").style.display = "none";
      document.getElementById("filter4000").style.display = "none";
      document.getElementById("filter3000").style.display = "none";
      document.getElementById("filter5000").style.display = "inline-flex";
      var limit = e.target.value;
      console.log(limit);
      var fav = db.collection("products");

      // Create a query against the collection.
      var query = fav.where("price", ">", "4000", "&&", "price", "<", "5000").get().then((Snapshot) => {
        Snapshot.forEach((doc) => {

          var prodata = doc.data();
          var proid = doc.id;

          console.log(prodata);
          document.getElementById("filter5000").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="http://localhost/intern1/prodetail.php?id=' + proid + '"><form><div class="card" style="width:300px;"><img class="card-img-top img-fluid" src="' + prodata.photo + '" alt="Card image cap" style="height:60%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + prodata.title + '</h5><div class="card-text"><h6 class="text-center" style="color:black;">&#8377;' + prodata.price + '</h6><input type="hidden" id="pid" value="' + proid + '"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
        })
      });

    }
    function sortbydesc(e) {
      document.getElementById("demo").style.display = "none";
      document.getElementById("filter2000").style.display = "none";
      document.getElementById("filter3000").style.display = "none";
      document.getElementById("filter4000").style.display = "none";
      document.getElementById("filter5000").style.display = "none";
      document.getElementById("filter1000").style.display = "none";
      document.getElementById("sortbydesc").style.display = "inline-flex";
      var limit = e.target.value;
      console.log(limit);
      var fav = db.collection("products");

      // Create a query against the collection.
      var query = fav.orderBy("title", "desc").get().then((Snapshot) => {
        Snapshot.forEach((doc) => {

          var prodata = doc.data();
          var proid = doc.id;

          console.log(prodata);
          document.getElementById("sortbydesc").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="http://localhost/intern1/prodetail.php?id=' + proid + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + prodata.photo + '" alt="Card image cap" style="height:60%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + prodata.title + '</h5><div class="card-text"><h6 class="text-center" style="color:black;">&#8377;' + prodata.price + '</h6><input type="hidden" id="pid" value="' + proid + '"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
        })
      });

    }
    function sortbyaesc(e) {
      document.getElementById("demo").style.display = "none";
      document.getElementById("filter2000").style.display = "none";
      document.getElementById("filter3000").style.display = "none";
      document.getElementById("filter4000").style.display = "none";
      document.getElementById("filter5000").style.display = "none";
      document.getElementById("filter1000").style.display = "none";
      document.getElementById("sortbydesc").style.display = "none";
      document.getElementById("sortbyaesc").style.display = "inline-flex";
      var limit = e.target.value;
      console.log(limit);
      var fav = db.collection("products");

      // Create a query against the collection.
      var query = fav.orderBy("title", "desc").get().then((Snapshot) => {
        Snapshot.forEach((doc) => {

          var prodata = doc.data();
          var proid = doc.id;

          console.log(prodata);
          document.getElementById("sortbyaesc").innerHTML += '<div class="col-lg-3 col-md-4 col-sm-6"><a id="txt" href="http://localhost/intern1/prodetail.php?id=' + proid + '"><form><div class="card"><img class="card-img-top img-fluid" src="' + prodata.photo + '" alt="Card image cap" style="height:60%; border-radius:0px;"><div class="card-body"><h5 class="card-title text-center" style="color:black;">' + prodata.title + '</h5><div class="card-text"><h6 class="text-center" style="color:black;">&#8377;' + prodata.price + '</h6><input type="hidden" id="pid" value="' + proid + '"></div></div><div class="btn-group d-flex"><button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button></div></div></form></a></div>';
        })
      });

    }

  </script>

</body>
<?php require "footer.php"?>

</html>