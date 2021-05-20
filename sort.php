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
    <style>
      #buttons {
        background-color:black;
        border-radius:0%;
        color:white;
        border-color:black;
      }
      #txt{
        text-decoration:none;
      }
      #price {
        text-align:center;
      }
      img{
          height:400px; 
          width:400px; 
          margin-top:20px;}
          .card{
            border-radius:0px; 
            border-color:white; 
            height:400px; 
            margin-bottom:50px;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
    <div class="card-deck" id="demo" style="margin-top:150px;">
    <div class="col-lg-3 col-md-4 col-sm-6">
      <a id="txt" href="prodetail.php?id='+doc.id+'">
        <form>
          <div class="card"  >
            <img class="card-img-top img-fluid" src="" alt="Card image cap" style="height:60%; border-radius:0px;">
            <div class="card-body">
              <h6 class="card-title text-center" style="color:black;">'+details.title+'</h6>
              <div class="card-text">
                <h6 id="price" style="color:black;">&#8377;'+details.price+'</h6>
                <input type="hidden" id="pid" value="'+doc.id+'" >
              </div>
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button>
            </div>
          </div>
        </form>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <a id="txt" href="prodetail.php?id='+doc.id+'">
        <form>
          <div class="card"  >
            <img class="card-img-top img-fluid" src="'+details.photo+'" alt="Card image cap" style="height:60%; border-radius:0px;">
            <div class="card-body">
              <h6 class="card-title text-center" style="color:black;">'+details.title+'</h6>
              <div class="card-text">
                <h6 id="price" style="color:black;">&#8377;'+details.price+'</h6>
                <input type="hidden" id="pid" value="'+doc.id+'" >
              </div>
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button>
            </div>
          </div>
        </form>
      </a>
    </div><div class="col-lg-3 col-md-4 col-sm-6">
      <a id="txt" href="prodetail.php?id='+doc.id+'">
        <form>
          <div class="card"  >
            <img class="card-img-top img-fluid" src="'+details.photo+'" alt="Card image cap" style="height:60%; border-radius:0px;">
            <div class="card-body">
              <h6 class="card-title text-center" style="color:black;">'+details.title+'</h6>
              <div class="card-text">
                <h6 id="price" style="color:black;">&#8377;'+details.price+'</h6>
                <input type="hidden" id="pid" value="'+doc.id+'" >
              </div>
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button>
            </div>
          </div>
        </form>
      </a>
    </div><div class="col-lg-3 col-md-4 col-sm-6">
      <a id="txt" href="prodetail.php?id='+doc.id+'">
        <form>
          <div class="card"  >
            <img class="card-img-top img-fluid" src="'+details.photo+'" alt="Card image cap" style="height:60%; border-radius:0px;">
            <div class="card-body">
              <h6 class="card-title text-center" style="color:black;">'+details.title+'</h6>
              <div class="card-text">
                <h6 id="price" style="color:black;">&#8377;'+details.price+'</h6>
                <input type="hidden" id="pid" value="'+doc.id+'" >
              </div>
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button>
            </div>
          </div>
        </form>
      </a>
    </div><div class="col-lg-3 col-md-4 col-sm-6">
      <a id="txt" href="prodetail.php?id='+doc.id+'">
        <form>
          <div class="card"  style="margin-bottom:50px;">
            <img class="card-img-top img-fluid" src="'+details.photo+'" alt="Card image cap" style="height:60%; border-radius:0px;">
            <div class="card-body">
              <h6 class="card-title text-center" style="color:black;">'+details.title+'</h6>
              <div class="card-text">
                <h6 id="price" style="color:black;">&#8377;'+details.price+'</h6>
                <input type="hidden" id="pid" value="'+doc.id+'" >
              </div>
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-success flex-fill " id="buttons" style="width:50%; border-radius:0px;" onclick="fav(event)">Add To Favourites</button>
            </div>
          </div>
        </form>
      </a>
    </div>
</div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <?php require "footer.php"?>
</html>
