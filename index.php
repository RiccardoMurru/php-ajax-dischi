<?php // include database
include __DIR__ . '/partials/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums PHP</title>
    <link rel="stylesheet" href="dist/css/main.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="dist/img/spotify-logo.png" alt="logo">
        </header>
    
        <main>
            <div class="album">
                <?php foreach ($albums as $album) : ?>
                    <div class="album-details">
                        <img class="album-cover" src="<?php echo $album['cover']; ?>" alt="cover">
                        <span class="title"><?php echo $album['title']; ?></span>
                        <span class="author"><?php echo $album['author']; ?></span>
                        <span class="year"><?php echo $album['year']; ?></span>
                    </div>
                <?php endforeach ?>
            </div>
        </main>
    </div>
</body>
</html>