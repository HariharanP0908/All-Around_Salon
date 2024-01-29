<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('navigation')
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
    <h2 class="mb-4">Membership Form</h2>


    <form action="/membership" method="post">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstName">First Name:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <div class="form-group">
      <label for="membershipSelect">Choose Membership:</label>
      <select class="form-control" id="membershipSelect" name="membership">
        <option value="basic">Basic Membership - 500/month</option>
        <option value="standard">Standard Membership - 750/month</option>
        <option value="premium">Premium Membership - 1000/month</option>
      </select>
    </div>
 

 

  
</div>
<br>

        <button type="submit" class="btn btn-primary">Submit Membership Form</button>
    </form>
</div><br>
<h1>MEMBERSHIP BENEFITS:</h1>
    <p><b>Service Offerings:</b>

Clients may have preferences for specific salon services, such as haircuts, styling, coloring, spa treatments, or other beauty services. Memberships can be tailored to offer discounts or exclusive access to preferred services.
</p>
<p><b>Discounts and Special Offers:</b>

Membership preferences often revolve around cost savings. Clients may be attracted to memberships that provide discounts on services, retail products, or exclusive promotions for members.
</p>
<p>
<b>Appointment Flexibility:</b>

Members may value the convenience of flexible scheduling, priority booking, or extended hours exclusively available to them. Preferences regarding appointment flexibility can be a significant factor in choosing a salon membership.
</p>
<p><b>Personalized Experiences:</b>

Salons can cater to membership preferences by offering personalized experiences. This may include personalized consultations, customized treatments, or loyalty rewards based on individual preferences and history.
</p>
<p><b>Product Discounts:</b>

Clients who have preferences for specific hair care or beauty products may be drawn to salon memberships that offer discounts on retail products or exclusive access to new product launches.
</p>
<p>
<b>Membership Tiers:</b>

Salons may offer different membership tiers with varying benefits. Clients might have preferences for specific tiers based on their budget, frequency of visits, or the level of exclusivity and perks offered.
</p>
<p><b>Exclusive Events:</b>

Some clients may prefer memberships that grant access to exclusive salon events, workshops, or VIP experiences. These events can enhance the overall salon experience and create a sense of community among members.
</p>
<p><b>Communication Channels:</b>

Preferences regarding communication channels can play a role. Some clients may prefer receiving updates and exclusive offers through email, while others may prefer notifications through a salon's mobile app or social media.
</p>
<p><b>Reward Points and Loyalty Programs:</b>

Clients often appreciate loyalty programs that accumulate points for each visit, which can later be redeemed for discounts or free services. Membership preferences may include a desire for a robust and rewarding loyalty program.
</p>
<p><b>Cultural and Wellness Alignment:</b>

Salons focusing on specific cultural or wellness aspects may attract clients who prefer an alignment with these values. For example, a salon emphasizing organic products or sustainable practices may appeal to clients with corresponding preferences.
</p>

@include('footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>