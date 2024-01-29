<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>offers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .one1{
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        
    }
    .card-img-top{
        height:300px;
    }
    </style>
</head>
<body>
    @include("navigation")<br>
    <h1>OFFERS & PRICE</h1>
<div class="one1">
    <div class="card" style="width: 18rem;">
  <img src="./asset/images/haircut1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Men Haircut</h5>
    <p class="card-text">Only Haircut with required Stylist.</p>
    <button class="btn btn-primary">Rs.250/-</a>
  </div>
</div>


    <div class="card" style="width: 18rem;">
  <img src="./asset/images/hairstyle2.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Haircut+Beardtrim</h5>
    <p class="card-text">Haircut done along with beard trim with specifed stylist.</p>
    <button class="btn btn-primary">Rs.350/-</a>
  </div>
</div>


    <div class="card" style="width: 18rem;">
  <img src="./asset/images/hairstyle3.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Haircut+Beardtrim+Facial</h5>
    <p class="card-text">Basic Facial pack done alonf with Haircut and beard trim</p>
    <button class="btn btn-primary">Rs.700/-</a>
  </div>
</div>


    <div class="card" style="width: 18rem;">
  <img src="./asset/images/hairstyle4.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Women Haircut</h5>
    <p class="card-text">Haircut along with prefered style will be done.</p>
    <button class="btn btn-primary">Rs.400/-</a>
  </div>
</div>


    <div class="card" style="width: 18rem;">
  <img src="./asset/images/hairstyle5.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Women's Haircut+ Facial</h5>
    <p class="card-text">Facial along with Haircut will be done for  women.</p>
    <button class="btn btn-primary">Rs.600/-</a>
  </div>
</div>


    <div class="card" style="width: 18rem;">
  <img src="./asset/images/hairstyle6.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Manicure&Pedicure</h5>
    <p class="card-text">Menicure&Pedicure both will be done for both men and women.</p>
    <button class="btn btn-primary">Rs.200/-</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="./asset/images/hairstyle7.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kid's Haircut</h5>
    <p class="card-text">Haircut for kids only.</p>
    <button class="btn btn-primary">Rs.200/-</a>
  </div>
</div>

</div>
<hr>
<center><h1>UPCOMING OFFERS&DEALS</h1></center>

<div class="container mt-5">
    <h2>Offer List</h2>

    
        <table class="table">
            <thead>
            <tr>
                <th>offer Name</th>
                <th>Offer Time</th>
                <th>Offer Price</th>
                <th>Eligible</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{$data->offername}}</td>
                    <td>{{ $data->offertime}}</td>
                    <td>{{ $data->offerprice }}</td>
                    <td>{{ $data->eligible}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    
</div>
@include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>