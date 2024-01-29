<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('navigation')

  


<div class="container mt-5">
    <form action="/adminlast" method="post" >
        @csrf
    <div class="form-group">
            <label for="offername">Offer Name:</label>
            <input type="text" class="form-control" id="offername" name="offername" placeholder="Enter offer Name">
        </div>
        <div class="form-group">
            <label for="offertime">Offer Time:</label>
            <input type="text" class="form-control" id="offertime" name="offertime" placeholder="Enter offer time">
        </div>

        <div class="form-group">
            <label for="offerprice">Offer Price:</label>
            <input type="text" class="form-control" id="offerprice" name="offerprice" placeholder="Enter offer price">
        </div>

        <div class="form-group">
            <label for="eligible">Eligible:</label>
            <input type="text" class="form-control" id="eligible" name="eligible" placeholder="">
           
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>