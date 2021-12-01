<?php
include_once __DIR__ . "/data/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="bg-header p-3">
        <img src="assets/img/spotify-logo.png" alt="spotify's logo">
    </header>

    <main class="bg-main p-5">
        <div class="container text-center">
            <div class="row row-cols-1 row-cols-md-5 gx-5 gy-4 py-5">
                <?php
                foreach ($cdList as $cd) {
                    $poster = $cd["poster"];
                    $title = $cd["title"];
                    $author = $cd["author"];
                    $year = $cd["year"];


                    echo "<div class='col'>
                            <div class='card bg-header border-0 px-4 pt-4 pb-card rounded-0'>
                                <img src='$poster' class='card-img-top' alt='$title'/>
                                <div class='card-body text-center '>
                                <h4 class='text-light mb-3'>$title</h4>
                                <h5 class='text-card m-0'>$author</h5>
                                <h6 class='text-card'>$year</h6>
                              </div>
                            </div>
                          </div>";
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>