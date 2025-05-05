
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <form action="reservationrangya.php" method="post" enctype="multipart/form-data">
    <div class="container p-5 w-100 border border-primary rounded mt-5">

    <div class="row">
        <div class="col text-center">
            <h1 class="display-1 text-primary">
                Reservation Form
            </h1>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <div class="form-group">
                <label for="checkInDate">How many person will be staying at Rangya?</label>
                <input type="number" class="form-control" id="pax" name="pax" min="1" max="20" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="checkInDate">Check-in Date</label>
                <input type="date" class="form-control" id="checkInDate" name="checkInDate" />
             </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="checkOutDate">Check-out Date</label>
                <input type="date" class="form-control" id="checkOutDate" name="checkOutDate" />
             </div>
        </div>
    </div>

<script>
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('checkInDate').setAttribute('min', today);
</script>

<style>
    .form-check-input:checked + .form-check-label .card {
    border: 2px solid #0d6efd; /* Bootstrap primary color */
    background-color: #e7f1ff;
    }
 </style>

<?php
//Array for Hotel Room Types
$roomTypes = [
    [
        "id" => "deluxe",
        "title" => "Deluxe Suite",
        "description" => "A cozy room perfect for small families.",
        "capacity" => 3,
        "price" => 5549,
        "totalRooms" => 10,
        "bookedRooms" => 7,
        "img" => ""
    ],
    [
        "id" => "executive",
        "title" => "Executive Suite",
        "description" => "Spacious and luxurious, ideal for business travelers.",
        "capacity" => 4,
        "price" => 8799,
        "totalRooms" => 5,
        "bookedRooms" => 5,
        "img" => ""
    ],
    [
        "id" => "presidential",
        "title" => "Presidential Villa",
        "description" => "Top-tier luxury with full amenities.",
        "capacity" => 6,
        "price" => 12999,
        "totalRooms" => 2,
        "bookedRooms" => 1,
        "img" => ""
    ]
];

foreach ($roomTypes as &$room) {
    $availableRooms = $room['totalRooms'] - $room['bookedRooms'];
    $room['availability'] = ($availableRooms > 0)
        ? "Available ({$availableRooms} left)"
        : "Unavailable";
}
unset($room);

// Array for Amenities
$amenities = [
    [
        'id' => 'fitness',
        'label' => 'Fitness Center',
        'description' => '24/7 access to gym and equipment',
        'price' => 750
    ],
    [
        'id' => 'dinner',
        'label' => 'Buffet Dinner',
        'description' => 'Unlimited dinner buffet with international cuisine',
        'price' => 1800
    ],
    [
        'id' => 'massage',
        'label' => 'Massage & Spa',
        'description' => '1-hour relaxing full-body massage',
        'price' => 1300
    ]
];
?>

<h2 class='mt-4 text-center'>Room Type</h2>
<div class="row my-4">
<?php foreach ($roomTypes as $room): ?>
    <div class="form-check mb-3">
        <input class="form-check-input d-none" type="radio" name="roomtype" id="<?= $room['id'] ?>" value="<?= $room['id'] ?>">
        <label class="form-check-label w-100" for="<?= $room['id'] ?>">
            <div class="card p-3">
                <div class="row g-3 align-items-center">
                    <!-- Text Content -->
                    <div class="col-md-8">
                        <h5 class="card-title mb-1"><?= $room['title'] ?></h5>
                        <p class="card-text mb-1"><?= $room['description'] ?></p>
                        <p class="mb-1">Capacity: <?= $room['capacity'] ?> Guests</p>
                        <p class="mb-1 fw-bold">₱<?= number_format($room['price']) ?>/night</p>
                        <p class="<?= $room['availability'] === 'Unavailable' ? 'text-danger' : 'text-success' ?>">
                            <?= $room['availability'] ?>
                        </p>
                    </div>
                    <!-- Image Content -->
                    <div class="col-md-4 text-end">
                        <?php if ($room['img']): ?>
                            <img src="<?= $room['img'] ?>" alt="<?= $room['title'] ?>" class="img-fluid rounded" style="max-height: 120px;">
                        <?php else: ?>
                            <div class="bg-light text-center py-5">No Image</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </label>
    </div>
<?php endforeach; ?>
</div>



<h2 class='mt-4 text-center'>Amenities</h2>
<div class="row">
    <?php foreach ($amenities as $amenity): ?>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="form-check">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            name="amenities[]" 
                            value="<?= htmlspecialchars($amenity['label']) ?>" 
                            id="<?= $amenity['id'] ?>"
                        >
                        <label class="form-check-label fw-bold" for="<?= $amenity['id'] ?>">
                            <?= htmlspecialchars($amenity['label']) ?>
                        </label>
                    </div>
                        <div>
                            <input 
                                type="number" 
                                name="amenities[<?= $amenity['id'] ?>][quantity]" 
                                class="form-control form-control-sm" 
                                min="1" 
                                max="10" 
                                value="1"
                                style="width: 70px;" 
                                disabled
                            >
                        </div>
                    <p class="mt-2 mb-1 text-muted"><?= htmlspecialchars($amenity['description']) ?></p>
                    <p class="mb-0"><strong>₱<?= number_format($amenity['price']) ?></strong></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<script>
    // Enable quantity input only when the checkbox is checked
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const qtyInput = this.closest('.card-body').querySelector('input[type="number"]');
            qtyInput.disabled = !this.checked;
        });
    });
</script>

    <div class="row">
        <div class="col mt-3">   
            <input type="submit" name="sub" class="btn btn-primary btn-block w-100" value="Book It!" id=sub>
        </div>
    </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>

<?php

    require_once "dbconnectionrangya.php";

    //debug connection
    if($conn->connect_error){
        die("Connection Error!");
    }else{
        echo"Connected";
    }

?>
