<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mb-4{
            color:darkblue;
        }
        .color{
            height:400px;
            padding-left:10px;
            width:400px;
        }
        #img-fluid1,.img-fluid2{
            height:300px;
        }
       .color1{
        width:600px;
        height:500px;
       }
       #img-fluid{
        height:250px;
        width:500px;
        padding:10px;
       }
        </style>
</head>
<body>
    
    @include('navigation');
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            <h2 class="mb-4"> ALL-AROUND SALON</h2>
                <p>Welcome to <b>ALL-AROUND SALON</b>, where beauty meets expertise. Established in 2022, we take pride in providing exceptional salon services that cater to your unique style and personality.</p>
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="./asset/images/interior1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>PLEASENT AMBIENCE</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./asset/images/interior2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>PROFESSIONAL STYLIST</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./asset/images/interior4.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>CLEAN ENVIRONMENT</h5>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                

                <p>At [Salon Name], we believe that every individual deserves to look and feel their best. Our team of highly skilled and creative professionals is dedicated to helping you achieve your desired look, whether it's a trendy haircut, a bold hair color, or a relaxing spa experience.</p>

                <p>What sets us apart is our commitment to delivering not just a service, but an experience. Our salon is designed to be a haven of relaxation, where you can unwind and let our experts work their magic. From the moment you step in, you'll be greeted by our friendly staff and surrounded by an atmosphere of elegance and tranquility.</p>

                <p>Our Services:</p>
                <ul>
                    <li><b>Haircuts and Styling</b></li> 
                    <li><b>Hair Coloring and Highlights</b></li>
                    <li><b>Spa and Skincare Treatments</b></li>
                    <li><b>Manicures and Pedicures</b></li>
                    <li><b>Bridal and Special Occasion Packages</b></li>
                </ul>
                <div class="container mt-4">
  <h2 class="mb-4"></h2>
  
  <div class="row">
    <div class="col-md-4">
      <img src="./asset/images/style.jpeg" class="img-fluid" id="img-fluid" alt="Image 1">
    </div>
    <div class="col-md-4">
      <img src="./asset/images/haircolor.jpeg" class="img-fluid" id="img-fluid" alt="Image 2">
    </div>
    <div class="col-md-4">
      <img src="./asset/images/skin2.avif" class="img-fluid" id="img-fluid" alt="Image 3">
    </div>
    <div class="col-md-4">
      <img src="./asset/images/meni.webp" class="img-fluid" id="img-fluid" alt="Image 4">
    </div>
    <div class="col-md-4">
      <img src="./asset/images/bridal.jpeg" class="img-fluid"id="img-fluid" alt="Image 5">
    </div>
    <div class="col-md-4">
      <img src="./asset/images/style1.jpeg" class="img-fluid"id="img-fluid" alt="Image 5">
    </div>
  </div>
</div>

                <p>At All-Around Salon, we use only premium products to ensure the best results for your hair and skin. Our team stays updated on the latest trends and techniques, guaranteeing that you leave our salon not just satisfied but delighted with your new look.</p>

                <p>Visit us today and let us pamper you with top-notch salon services. Your beauty journey begins at All-Around salon.</p>

                <p>For appointments or inquiries, please contact us at +919876543210 or email us at<i> allaroundsalon@gmail.com</i>. We look forward to serving you!</p>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>