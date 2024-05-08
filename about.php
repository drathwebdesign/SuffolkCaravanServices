<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suffolk Caravan Services About</title>
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
<section class="about-info">
    <div class="container pad20">
        <h1>My name is Simon Bignell</h1>
        <p>I have been a keen caravanner for over 25 years. I have worked for Approved Workshop businesses for the past 6+ years in a workshop and as a mobile technician, I take pride in the work I do and have always loved the job and the people that I meet.</p>
        <br>
        <p>My aim in this new business adventure is to provide good quality servicing and repair work in a happy, relaxed and friendly environment.</p>
        <br>
        <p>My hobbies and interests include motorcycling, photography, gardening and caravanning. I ride a bobbed Yamaha XJ650 with custom paintwork, and am a member of various clubs. I am a keen photographer, using a canon R7 camera. I do quite a lot of wildlife photography, and being a member of the RSPB, there are plenty of reserves to visit with an abundance of wildlife. Motorcycle and car photography is also a passion of mine, with many shows and meets available in and around Suffolk.</p>
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