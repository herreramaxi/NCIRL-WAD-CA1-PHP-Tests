<!DOCTYPE html>
<html>

<body>

    <h2>Tutorial 1</h2>
    <?php

    $jsondata = file_get_contents("data.json");
    $json = json_decode($jsondata, true);

    echo $json[0]['name'];
    echo '<br>';
    echo $json[0]['gender'];
    echo '<br>';
    echo $json[0]['color'];
    echo '<br>';
    echo $json[0]['age'];

    ?>


    <h2>Tutorial 2</h2>

    <?php
    $jsondata = file_get_contents("movies.json");
    $json = json_decode($jsondata, true);

    $output = "<ul>";
    foreach ($json['movies'] as $movie) {
        $output .= "<li>"
            . $movie['title'] . ", "
            . $movie['year'] . ", "
            . $movie['genre'] . ", "
            . $movie['director'] . ", "
            . "</li>";
    }
    $output .= "</ul>";

    echo $output;

    $count = count($json['movies']);

    $output = "<ul>";
    for ($i =0; $i< $count; $i++) {
        $movie = $json['movies'][$i];

        $output .= "<li>"
            . $movie['title'] . ", "
            . $movie['year'] . ", "
            . $movie['genre'] . ", "
            . $movie['director'] . ", "
            . "</li>";
    }
    $output .= "</ul>";

    echo $output;

    ?>
    <?php

    ?>



</body>

</html>