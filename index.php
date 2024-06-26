<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suffolk Caravan Services</title>
    <link rel="stylesheet" href="css/application.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b1ba3c938d.js" crossorigin="anonymous"></script>
</head>


<body>
<?php
$filename = 'php/header.php';
if (file_exists($filename)) {
    include $filename;
} else {
    // Handle error (e.g., log or display an error message)
    echo "Error: '$filename' could not be found please hang tight site may be undergoing maintenance";
}
?>

<section class="home-info">
    <div class="container pad20">
        <h1>Based in Ipswich, Suffolk, I offer mobile servicing and repairs to caravans and motorhomes in East Suffolk and North Essex.</h1>
        <p>There is no need for you to hitch up your caravan or drive your motorhome to a service centre, I come to you; Your caravan or motorhome can be serviced at home, on a seasonal pitch or when in storage.</p>
        <ul>
            <li>Suffolk Caravan Services offer:</li>
            <li><a href="fullservice.php">Full Single and Twin Axle Caravan Services</a></li>
            <li><a href="habitation.php">Habitation Check on Caravan, Motorhome or Campervan</a></li>
            <li><a href="chassis.php">Chassis Service only for your Caravan</a></li>
            <li><a href="repairs.php">Repairs on your appliances</a></li>
            <li><a href="alde-fluid.php">Alde Fluid Changes</a></li>
        </ul>
    </div>
    <div class="container pad20 images-container">
        <img src=images/SCS-van-side.jpg alt="Suffolk caravan services van side">
        <img src=images/SCS-van-back.jpg alt="Suffolk caravan services van back">
    </div>

</section>

<?php
$filename = 'php/footer.php';
if (file_exists($filename)) {
    include $filename;
} else {
    // Handle error (e.g., log or display an error message)
    echo "Error: '$filename' could not be found please hang tight site may be undergoing maintenance";
}
?>

<script src="javascript/hamburger.js"></script>
<script src="javascript/sticky-header.js"></script>
</body>