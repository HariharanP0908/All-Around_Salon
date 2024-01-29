<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@include('navigation');
<div class="container mt-5">
    <h2 class="mb-4">Salon Booking Form</h2>

   

    <form action="/bookingstore" method="post">
        @csrf

        <div class="form-group">
            <label for="gender">Select Gender:</label>
            <select class="form-control" id="gender" name="gender" required value="{{old('gender')}}">
                <option value="men">Men</option>
                <option value="women">Women</option>
                <option value="children">Children</option>
            </select>
        </div>

        <div class="form-group">
            <label for="stylist">Select Stylist:</label>
            <select class="form-control" id="stylist" name="stylist" required value="{{old('gender')}}">
                <option value="senior">Senior Stylist</option>
                <option value="stylist">Stylist</option>
                <option value="junior">Junior Stylist</option>
            </select>
        </div>

        <div class="form-group">
          <label for="phoneNumber">Phone Number:</label>
          <input type="tel" class="form-control" id="phoneNumber" name="number" placeholder="Enter your phone number" required>
         
        </div>

        <div class="form-group">
            <label for="address">Enter Address:</label>
            <input type="text" class="form-control" id="address" name="address" required value="{{old('address')}}">
        </div>

        <button type="submit" class="btn btn-primary">Book Appointment</button>
    </form>
</div>
<br>
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>