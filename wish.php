<?php

$success = false;


if (isset($_POST['submit'])) {
    $name = "Name: " . $_POST['name'].". ";
    $role = "Role: " . $_POST['role'].". ";
    $wish = "Birthday Wish: " . $_POST['wish'].".\n ";

    $file = fopen("file.txt", "a");
    fwrite($file, $name);
    fwrite($file, $role);
    fwrite($file, $wish);
    fclose($file);
    $success = true;
} 

?>
<?php

if ($success == true) {

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;500&display=swap" rel="stylesheet">
        <title>Success</title>
    </head>
    <body>
        <div class="container">
            <br>
            <br>
            <br>
            <br>
        <div class="alert alert-success">Your birthday wish as been received.
Checkout <a href="http://happy60thbirthdayprofessortorimiro.xyz/">http://happy60thbirthdayprofessortorimiro.xyz/</a> on the 19th May, 2022. 
<hr>
Cheers!🥂</div>
        </div>
    </body>
    </html>
    <?php
} else {

    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="author" content="Professor Dixon Olutade Torimrio">
    <meta name="description" content="Professor Dixon Olutade Torimiro clocks 60 years on the 19th of May 2022. Wish the celebrant a happy birthday 🎂">
    <meta name="keywords" content=" Professor, Lecturer, Agriculture, Rural Sociology, Obafemi Awolowo University, Youth Development, child and youth studies, community development, farming, rural youths">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;500&display=swap" rel="stylesheet">
    <title>Happy 60th Birthday Professor Dixon Olutade Torimrio</title>
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
        }
    </style>
    <style data-emotion="css 1n6sti3" data-s="">.css-1n6sti3{display:inline-block;-webkit-margin-start:var(--chakra-space-3);margin-inline-start:var(--chakra-space-3);-webkit-margin-end:var(--chakra-space-3);margin-inline-end:var(--chakra-space-3);height:16px;width:auto;vertical-align:middle;}</style>
</head>
<body>
    <div class="container">
        <br>
    <h1>Wish the celebrant a happy birthday 🎂</h1>
    <span>Professor Dixon Olutade Torimiro will clock 60 years on the 19th of May 2022.
         We will appreciate if you can forward your birthday wishes to this platform on or before 
         Tuesday, 17th May 2022 by filling the form below. Thank you and God bless!
         
    <hr>
    <br>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your full name e.g. 'John Smith'" required class="form-control">
        <br>
        <input type="text" name="role" placeholder="Who is the celebrant to you e.g. 'mentor, uncle etc.'" required class="form-control">
        <br>
        <textarea name="wish" id="" cols="30" rows="10" class="form-control" placeholder="Enter your birthday wish." required></textarea>
        <br>
        <input type="submit" name="submit" value="Submit" class="form-control btn btn-secondary">
    </form>
    <br>
    <hr>
    <div style="text-align: center">
        <p>Coutersy the wife and children
            <br>
            Made with 💖 from 
            <svg viewBox="0 0 48 48" class="css-1n6sti3"><title>Nigeria</title><g><rect x="16" y="6" fill="#E6E6E6" width="16" height="36"></rect> <!-- --><path fill="#078754" d="M48,40c0,1.105-0.895,2-2,2H32V6h14c1.105,0,2,0.895,2,2V40z"></path><path fill="#078754" d="M16,42H2c-1.105,0-2-0.895-2-2V8c0-1.105,0.895-2,2-2h14V42z"></path></g></svg>
        </p>
        
    </div>
    </div>
    
    
</body>
</html>
<?php
}

?>
