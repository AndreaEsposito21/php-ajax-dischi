<?php 
    include __DIR__ . '/../database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="../img/download.png" alt="spotify-logo">
            </div>
        </header>

        <main>
            <div class="cd-container">
                <?php foreach($database as $cd) { ?>
                    <div class="cd">
                        <img src="<?php echo $cd['poster']; ?>" alt="<?php echo $cd['title']; ?>">
                        <div class="title"><?php echo $cd['title']; ?></div>
                        <div class="author"><?php echo $cd['author']; ?></div>
                        <div class="year"><?php echo $cd['year']; ?></div>
                    </div>
                <?php } ?>
            </div>
        </main>

    </div>
</body>
</html>