<?php
include "music_albums.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/app.css">

    <title>MyJam</title>
</head>

<body>
    <header>
        <h1>MyJam</h1>
    </header>

    <main>
        <div class="album-container">
            <?php
            foreach ($music_albums as $album) {
            ?>
                <div class="album">
                    <img src="<?php echo $album["poster"]; ?>" alt="">
                    <h3 class="album-title"><?php echo $album["author"]; ?></h3>
                    <h4 class="album-release-year"><?php echo $album["year"]; ?></h4>
                </div>
            <?php
            }
            ?>
        </div>
    </main>

</body>

</html>