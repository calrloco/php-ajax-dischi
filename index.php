<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="dist/app.css">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php foreach ($database as $key) { ?>
        <ul>
            <li><?php echo $key['title']?></li>
            <li><?php echo  $key['author']?></li>
            <li><?php echo $key['year']?></li>
            <li><img src="<?php echo $key['poster']?>" alt=""></li>
        </ul>
        <?php } ?>
    </body>

    </html>
</body>

</html>