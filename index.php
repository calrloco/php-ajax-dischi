<?php
include __DIR__ . "/database/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <title>Cd</title>
</head>
<body>
    <div class="wrapper">
        <div class="nav"></div>
        <div class="container-content">
            <?php foreach ($database as $key) { ?>
                <div class="container__cd">
                    <div class="container__cd__side container__cd__side--front">
                        <div class="container__cd-img">
                            <img src="<?php echo $key['poster'] ?>" alt="<?php echo $key['title'] . ' image' ?>" class="container__cd-img-bg" />
                        </div>
                    </div>
                    <div class="container__cd__side container__cd__side--back">
                        <div class="container__cd-title">
                            <p class="container__cd-title-text"><?php echo $key['title'] ?></p>
                        </div>
                        <div class="container__cd-artist">
                            <p class="container__cd-artist-text"><?php echo  $key['author'] ?></p>
                        </div>
                        <div class="container__cd-year">
                            <p class="container__cd-year-text"><?php echo $key['year'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>