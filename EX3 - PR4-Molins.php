<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'alex') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));


Echo "Actores con la relacion creada";
echo  '<br>';
$query ='SELECT
        people_id,people_fullname,movie_leadactor,movie_name
        FROM
        people,movie
        WHERE
        people_id = movie_leadactor   
        ORDER BY
        people_id';

$result = mysqli_query($db,$query) or die(mysqli_error($db));

while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
    
	echo $people_id . '-' . $people_fullname . '-' . $movie_leadactor . '-' . $movie_name . '<br>';
}

echo '<br>';
Echo "Directores con la relacion creada";
echo  '<br>';

$query ='SELECT
        people_id,people_fullname,movie_leadactor,movie_name
        FROM
        people,movie
        WHERE
        people_id = movie_director  
        ORDER BY
        people_id';

$result = mysqli_query($db,$query) or die(mysqli_error($db));

while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
    
	echo $people_id . '-' . $people_fullname . '-' . $movie_leadactor . '-' . $movie_name . '<br>';
}

?>