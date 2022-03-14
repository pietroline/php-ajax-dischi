<?php
    require_once __DIR__ . "/src/database.php";
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dischi php version</title>

        <!-- link style css -->
        <link rel="stylesheet" href="css/style.css">

        <!-- link icone bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <!-- link cdn boottrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>

        <header>
            <div class="row">
                <div class="col">
                    <i class="bi bi-spotify"></i>
                </div>    
            </div>
        </header>

        <main class="p-5">
            <div class="container">
                <div class="row row-cols-2  row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                    <?php
                        foreach($database as $disco){
                            echo "<div class='col'>".
                                    "<div class='album d-flex flex-column align-items-center'>".
                                        "<div class='ms_w-90 pt-3'>".
                                            "<img src=$disco[poster] class='card-img-top' alt=img $disco[title]>".
                                    "</div>".
                                    "<div class='card-body text-center'>".
                                        "<h4 class='card-title mb-4'>$disco[title]</h4>".
                                        "<h6 class='text-secondary'>$disco[author]</h6>".
                                        "<h6 class='text-secondary'>$disco[year]</h6>".
                                    "</div>".
                                "</div>".
                            "</div>";
                        } 
                    ?>
                      
                </div>
                
            </div>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>        
    </body>

</html>