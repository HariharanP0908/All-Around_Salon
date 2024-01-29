<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
 .three{
    margin-left:60%;
 }
 .one1{
    background-color:white;
 }
 .two{
    
    float:left;
 }
</style>
</head>
<body>
<div>
    @include('navigation');
</div>



<div class="one1">
    <div class="two">
        <img src="./asset/images/contact.jpg"></div>
        <div class="three">
            <h2>CONTACT</h2>
            <p>ALL-AROUND SALON</p>
                <p>12 Raman street</p>
                <p>chennai-6000028</p>
                <p>Email:all-aroundsalon@gmail.com</p>
                <p>Phone: +919876543109</p>
        
        
                <h3>Follow Us</h3>
                <ul class="list-inline">
                    <li class="list-inline-item">FACEBOOK : AllAround@facebook</li><br><br>
                    <li class="list-inline-item">TWITTER : @All-Around salon</li><br><br>
                    <li class="list-inline-item">INSTAGRAM : All-Around_salon</li>
                </ul>
            
    </div>
</div>

@if(Session::get('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

@if(Session::get('fail'))
<div class="alert alert-danger">
    {{Session::get('fail')}}
</div>
@endif

<div class="container mt-5">
    <h2 class="mb-4">Feedback Form</h2>

    <form action="/feedback" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="feedback">Feedback:</label>
            <textarea class="form-control" id="feedback" name="feedback" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-info">Submit Feedback</button>
    </form>
</div>
<br>
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>