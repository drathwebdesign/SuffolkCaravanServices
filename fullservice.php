<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suffolk Caravan Services Full Service</title>
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
<section class="fullservice-info">
    <div class="container pad20">
        <h1>Single and twin axle full service</h1>
        <p>When you have a full service carried out on your caravan, I will service your running gear as well as the habitation side, and a full 5 page report is given to you at the end of the service.</p>
        <br>
        <p>The running gear includes corner steadies being greased so they run quietly and smoothly, the jockey wheel and winding assembly is greased and checked for damage. The hitch assembly is greased and the hitch stabiliser is checked and re-shimmed if required. Hand brake and breakaway cable are checked for condition and routing. The tow electrics are checked to make sure all bulbs are working, the ATC is checked and the 12v side of the fridge is checked. Wheels and tyres, including the spare are checked for damage and age. Brakes are cleaned and adjusted as required and new one use hub nuts are replaced.</p>
        <br>
        <p>A gas soundness test is done, which checks for leaks in your gas pipes and fittings, also the age and condition of your regulator and gas hose are checked. Gas bottles are checked to make sure they are secure in the locker and ventilation holes are clear from obstacles.</p>
        <br>
        <p>The leisure battery is tested for condition and charge voltage.</p>
        <br>
        <p>All locks are sprayed to help them stop seizing and window, door and locker rubbers are sprayed with silicone spray to help keep the rubbers soft and stop the window rubbers from sticking to the windows. Skylights are checked for operation, and all internal blinds and fly screens are checked.</p>
        <br>
        <p>All internal appliances are checked for operation on gas and electric, and all taps are checked. Plug sockets, lights and 12v sockets are checked. The RCD is tested to make sure it trips within the specified time, and earth bonding is checked for chassis and gas pipe.</p>
        <br>
        <p>Smoke alarm and CO alarm are checked and tested and the fire extinguisher is checked for manufacture or expiry date.</p>
        <br>
        <p>A damp test is carried out on the inside of the caravan and any readings above 15% and likely cause are recorded on the damp sheet report.</p>
        <br>
    </div>
    <div class="container pad20 images-container">
        <img src=images/fullserviceimages/wp7a3eb3c1_05_06.jpg alt="Suffolk caravan services van side">
        <img src=images/fullserviceimages/wp61a33417_05_06.jpg alt="Suffolk caravan services van back">
        <img src=images/fullserviceimages/wpa621e7fe_05_06.jpg alt="Suffolk caravan services van back">
        <img src=images/fullserviceimages/wpc3728430_05_06.jpg alt="Suffolk caravan services van back">
        <img src=images/fullserviceimages/wpef780f08_05_06.jpg alt="Suffolk caravan services van back">
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