<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suffolk Caravan Services Repairs</title>
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
<section class="repairs-info">
    <div class="container pad20">
        <h1>Repairs</h1>
        <p>Most caravan and motorhome repairs can be carried out at your home or storage facility, these types of repair would be:</p>
        <br>
        <p>Fridge repair-burners and circuit boards</p>
        <br>
        <p>Heating/hot water repair-burners blown out and new elements fitted</p>
        <br>
        <p>Leaking taps replaced</p>
        <br>
        <p>Toilets not flushing</p>
        <br>
        <p>Water pumps replaced or new seals fitted if available</p>
        <br>
        <p>Chargers replaced if faulty</p>
        <br>
        <p>Hitch assembly including stabiliser repaired if parts available</p>
        <br>
        <p>Roof/skylights can be removed and resealed, or new fitted-this is very weather dependent</p>
        <br>
        <p>Plus other small jobs that may require attention</p>
        <br>
    </div>
    <div class="container pad20 images-container">
        <img src=images/repairsimages/wp6da42023_05_06.jpg alt="Suffolk caravan services van side">
        <img src=images/repairsimages/wp56c6423b_05_06.jpg alt="Suffolk caravan services van back">
        <img src=images/repairsimages/wp71e84397_05_06.jpg alt="Suffolk caravan services van back">
        <img src=images/repairsimages/wpb3d0311b_05_06.jpg alt="Suffolk caravan services van back">
        <img src=images/repairsimages/wpeaebfe20_05_06.jpg alt="Suffolk caravan services van back">
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