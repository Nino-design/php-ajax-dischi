<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Milestone 1</title>
</head>

<body>
    <header class="container-fluid">
        <img src="./img/spotify-icon-marilyn-scott-0.png" alt="">
    </header>

    <?php include "database.php";  ?>

    <main>
        <section>
            <div class="container d-flex justify-content-start align-items-center mt-5 mb-5">
                <div class="row row-cols-5">
                    <?php foreach ($database as $element) { ?>
                        <div class="album-wrapper m-3 text-center">
                            <img class="pt-3" src="<?php echo $element["poster"];  ?>" alt="">
                            <h5 class="fw-bold"> <?php echo $element["title"];  ?> </h5>
                            <p class="m-0"><?php echo $element["author"];  ?></p>
                            <span><?php echo $element["year"];  ?> </span>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </section>
    </main>

</body>

</html>