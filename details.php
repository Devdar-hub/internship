<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/mdb.min.css">
  </head>
  <body class="bg-light">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="d-flex justify-content-center">
    <div  class="text-center">
      <a href="" class="btn btn-primary" data-toggle="modal" data-target="#details">Details</a>
    </div>
    </div>
    <div class="modal fade" id="details" style="width:100%;">
      <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header text-center">
              <h4 class="modal-title text-center w-100 font-weight-bold">Please Provide The Following details!!</h4>
              <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button> 
           </div>
           <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-user prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Your Name</label>
              <input type="text" class="form-control validate">
              </div>
              <div class="md-form mb-5">
              <i class="fas fa-user-edit prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Create Your Username</label>
              <input type="text" class="form-control validate">
            </div>
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right">Your Email</label>
              <input type="email" class="form-control validate">
            </div>
           </div>

           <div class="modal-footer d-flex justify-content-center">
           <button class="btn btn-primary">Submit</button>
           </div>
         </div>
      </div>
    </div>

  </body>
</html>