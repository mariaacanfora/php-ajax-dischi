<?php
include_once __DIR__ . "/data/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<?php
include_once __DIR__ . "/components/pageHead.php"
?>

<body>
    <?php
    include_once __DIR__ . "/components/header.php"
    ?>

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