<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suffolk Caravan Services Pricing</title>
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
<section class="pricing-info">
    <div class="container pad20">
        <h1>Service and Labour/Call out rates</h1>
        <p>Single Axle Service £215 + Hub Nuts</p>
        <p>Twin Axle Service £245 + Hub Nuts</p>
        <p>Habitation Service £175</p>
        <p>Chassis Service Single Axle £120 + Hub Nuts</p>
        <p>Chassis Service Twin Axle £145 + Hub Nuts</p>
        <br>
        <p>Damp Test £60</p>
        <p>Gas Test £60</p>
        <p>Alde Fluid Change £200</p>
        <br>
        <h2>Repairs</h2>
        <p>Initial Call Out Including 1st Hour £55</p>
        <p>Hourly Rate £50</p>
        <br>
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