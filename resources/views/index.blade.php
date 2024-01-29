<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
       

        .logo{
            height:500px;
            width: 100%;
            padding:20px;
        }
       .bold{
        color:darkblue;
       }
       #img-fluid{
        height:350px;
       }
        
    </style>
</head>
<body>
    @include('navigation')    
    <center><p><h1> Welcome to <b class=bold>ALL-AROUND SALON</b></h1> </p>
   <p>-Where Beauty Meets Elegance<p><center>
    <img src='./asset/images/logo.jpg' class="logo">
    
    
    <div class="container mt-4">
  <h3 class="mb-4">WERE YOU FIND YOURSELF</h3>
  
  <div class="row">
    <div class="col-md-4">
      <img src="./asset/images/img1.jpeg" class="img-fluid" alt="Image 1">
    </div>
    <div class="col-md-4">
      <img src="./asset/images/img2.jpeg" class="img-fluid" alt="Image 2">
    </div>
    <div class="col-md-4">
      <img src="./asset/images/img3.webp" class="img-fluid" id="img-fluid" alt="Image 3">
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-4">
      <img src="./asset/images/img4.jpeg" class="img-fluid" alt="Image 4">
    </div>
    <div class="col-md-4">
      <img src="./asset/images/img5.jpeg" class="img-fluid" alt="Image 5">
    </div>
    <div class="col-md-4">
      <img src="./asset/images/img6.webp" class="img-fluid" alt="Image 6">
    </div>
  </div>
</div>

<br>


@include('footer')





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>