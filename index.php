<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rangya</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="css/navbar.css">


<!-- HERO SECTION -->
<style>
    body {
        background-color: #163226;
        background-image: url('images/bg-pattern.png'); /* optional if you have a background pattern */
        background-repeat: repeat;
        color: white;
        font-family: 'Georgia', serif;
    }

    .arched-img {
        width: 100%;
        height: auto;
        aspect-ratio: 3/4;
        object-fit: cover;
        border-radius: 50% 50% 0 0/ 50% 50% 0 0;
        border: 2px solid white;
    }

    .serenity-text {
        text-align: center;
    }

    .serenity-text h2 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .serenity-text h1 {
        font-family: 'Brush Script MT', sans-serif;
        font-size: 3rem;
        font-style: italic;
        margin: 0;
    }

    .book-btn {
        background-color: white;
        color: #163226;
        border: none;
        border-radius: 0;
        font-weight: bold;
        letter-spacing: 1px;
        padding: 0.75rem 2rem;
        box-shadow: 3px 3px 0 #e6e6e6;
        transition: all 0.3s ease;
    }

    .book-btn:hover {
        background-color: #e6e6e6;
    }
</style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex align-items-center position-relative">
    <!-- Left: Logo -->
    <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="Logo" />
    </a>

    <!-- Center: Links -->
    <ul class="navbar-nav navbar-nav-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Rooms</a></li>
        <li class="nav-item"><a class="nav-link" href="amenities.php">Amenities</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="booking.php">Booking</a></li>
    </ul>

    <!-- Right: User Icon -->
    <div class="navbar-user">
        <a href="#" class="nav-link"><i class="bi bi-person-circle"></i></a>
    </div>
</div>
</nav>


</head>


    <div class="container py-5">
        <div class="row align-items-center justify-content-center text-center">
        
        <!-- Left Image -->
        <div class="col-md-4 mb-4 mb-md-0">
            <img src="https://i.pinimg.com/736x/d1/13/a5/d113a52873c84e2213e6b724d64bec73.jpg" alt="Room 1" class="arched-img">
        </div>

        <!-- Center Text -->
        <div class="col-md-4 serenity-text">
            <h2>Where</h2>
            <h1>Serenity</h1>
            <h2>meets</h2>
            <h1>Luxury</h1>
            <div class="mt-4">
            <button class="book-btn">BOOK NOW</button>
            </div>
        </div>

        <!-- Right Image -->
        <div class="col-md-4 mt-4 mt-md-0">
            <img src="https://i.pinimg.com/736x/68/5c/f3/685cf34c9bb9f52d94c19171daa466d6.jpg" alt="Room 2" class="arched-img">
        </div>
        </div>
    </div>















<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">


</body>
</html>