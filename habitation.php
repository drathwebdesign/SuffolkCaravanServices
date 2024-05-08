<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suffolk Caravan Services Habitation</title>
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
<section class="habitation-info">
    <div class="container pad20">
        <h1>Habitation Service</h1>
        <p>If you own a motorhome, campervan, or have a caravan on a seasonal pitch, that doesn’t get towed anywhere, then a habitation check will make sure your pride and joy is safe to use, and help identify any problems. A habitation check, looks at the living area of the motorhome, not the chassis and engine side.</p>
        <br>
        <p>Electric or manual step is checked for operation, as are any corner steadies if fitted to your motorhome. Under slung water tanks and outlets are checked.</p>
        <br>
        <p>A gas soundness test is done, which checks for leaks in your gas pipes and fittings, also the age and condition of your regulator and gas hose are checked. Gas bottles are checked to make sure they are secure in the locker and ventilation holes are clear from obstacles, and if fitted a gas tank is checked for its security.</p>
        <br>
        <p>The leisure battery is tested for condition and charge voltage from your vehicle and mains power.</p>
        <br>
        <p>All locks are sprayed to help them stop seizing and window, door and locker rubbers are sprayed with silicone spray to help keep the rubbers soft and stop the window rubbers from sticking to the windows. Skylights are checked for operation, and all internal blinds and fly screens are checked.</p>
        <br>
        <p>All internal appliances are checked for operation on gas and electric, and all taps are checked. Plug sockets, lights and 12v sockets are checked. The RCD is tested to make sure it trips within the specified time, and earth bonding is checked for chassis and gas pipe.</p>
        <br>
        <p>Smoke alarm and CO alarm are checked and tested and the fire extinguisher is checked for manufacture or expiry date.</p>
        <br>
        <p>A damp test is carried out on the inside of the motorhome and any readings above 15% and likely cause are recorded on the damp sheet report.</p>
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