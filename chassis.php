<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suffolk Caravan Services Chassis</title>
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
<section class="chassis-info">
    <div class="container pad20">
        <h1>Chassis Service</h1>
        <p>If you only require the running gear of your caravan to be serviced I can do this with a chassis only service.</p>
        <br>
        <p>A chassis service will include the following checks.</p>
        <br>
        <p>Corner steadies are checked for damage, and are greased so they run quietly and smoothly.</p>
        <br>
        <p>Jockey wheel and winding assembly is greased and checked for damage.</p>
        <br>
        <p>Hitch assembly is greased and the hitch stabiliser is checked and re-shimmed if required.</p>
        <br>
        <p>Hand brake and breakaway cable are checked for condition and routing.</p>
        <br>
        <p>Tow electrics, both 7 pin or 13 pin plugs are checked for condition and all road lights are checked to make sure all bulbs are working, the ATC if fitted is checked.</p>
        <br>
        <p>Wheels and tyres, including the spare are removed from the caravan are checked for damage and age and tyre pressures are correct. Spare wheel carrier is lubricated if required.</p>
        <br>
        <p>Brake hubs are removed and checked for damage, and brake shoes are checked for wear and cleaned and adjusted as required and new one use hub nuts are replaced.</p>
        <br>
    </div>
    <div class="container pad20 images-container">
        <img src=images/chassisimages/wp7c820a85_05_06.jpg alt="Suffolk caravan services van side">
        <img src=images/chassisimages/wp43bdd32a_05_06.jpg alt="Suffolk caravan services van back">
        <img src=images/chassisimages/wp95a5fbd2_05_06.jpg alt="Suffolk caravan services van back">
        <img src=images/chassisimages/wpb3d0311b_05_06.jpg alt="Suffolk caravan services van back">
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