<?php
/*
 Sa se afiseza intr-o pagina informatiile din 
array -ul $movies( movies.json )
a) Folosindu-va de aplicatia de la cursul 4 (lista carti) 
afisati informatia pe 4 coloane, cat mai multe informatii despre film:title,year,image
b) Afisati filmele crescator dupa titlu
c) Afisati filmele mai noi de 2010
d) Afisati doar filmele cu rating >=4
e) colorati titlul filmului dupa valoarea "color"
f) afisati numele si poza actorilor din filmul respectiv
*/

$filme = file_get_contents("movies.json");
$movies = json_decode($filme, true);

/*
echo "<pre>";
print_r($movies);
*/

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista filme generata din PHP</title>
    </head>

    <body>
        <div class="container clearfix">
            <nav class="navbar fixed-top navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Lista de carti</a>
            </nav>
        </div>
<?php 

?>
        <div style="padding-top: 50px;"></div>
        <div class="container">
            <div class="row">
<?php foreach ($movies as $movie):?>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 mt-2 "> // pe 4 coloane se modifica aici col-3
                    <div class="card ">
                        <img class="card-img-top" style="height:500px" src="<?php echo $movie['image'];?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $movie['title'];?></h4>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?php echo $movie['year'];?>, <br> 
                                <?php foreach($movie['genre'] as $genre) { echo trim($genre.', ',',');} ?>
                            </h6>
                            <p class="card-text">Scor: <?php echo $movie['score'];?><br>Rating IMDB:<?php echo $movie['rating'];?></p>
                            <a href="<?php echo $movie['objectID'];?>" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
<?php endforeach;?>
            </div>
        </div>
    </body>

</html>
