<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* public/css/styles.css */

.footer {
    background-color:black;
    padding: 20px 0;
    color: white;
}

.footer h3 {
    color: #343a40;
}

.list-inline-item {
    margin-right: 10px;
    color:blue;
}
.list-inline-item:hover{
    color:red;
}


        </style>
</head>
<body>
    <!-- resources/views/footer.blade.php -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Contact Us</h3>
                <p>ALL-AROUND SALON</p>
                <p>12 Raman street</p>
                <p>chennai-6000028</p>
                <p>Email:all-aroundsalon@gmail.com</p>
                <p>Phone: +919876543109</p>
            </div>
            <div class="col-md-6">
                <h3>Follow Us</h3>
                <ul class="list-inline">
                    <li class="list-inline-item">FACEBOOK : AllAround@facebook</li><br><br>
                    <li class="list-inline-item">TWITTER : @All-Around salon</li><br><br>
                    <li class="list-inline-item">INSTAGRAM : All-Around_salon</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>