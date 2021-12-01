<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once __DIR__ . "/components/pageHead.php"
    ?>
</head>
<body>
    
    <?php include_once __DIR__ . "/components/header.php" ?>

    <main class="bg-main p-5" id="root">
        <div class="container text-center">
            <div class="row row-cols-1 row-cols-md-5 gx-5 gy-4 py-5">
                <div class="col" v-for="(cd, i) in cds" :key="i">
                    <div class="card bg-header border-0 px-4 pt-4 pb-card rounded-0">
                        <img :src="cd.poster" :alt="cd.title" class="card-img-top">
                        <div class="card-body text-center">
                            <h4 class='text-light mb-3'>{{cd.title.toUpperCase()}}</h4>
                            <h5 class='text-card m-0'>{{cd.author}}</h5>
                            <h6 class='text-card'>{{cd.year}}</h6>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </main>

<script src="./js/script.js"></script>
</body>
</html>