<?php
$db = mysqli_connect('localhost', 'root', 'alex') or
    die ('Unable to connect. Check your connection parameters.');


//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));


// insert data into the movie table
$query = 'INSERT INTO movie
          (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
           movie_director)
     VALUES
        (4, "Mortal Kombat", 1, 2021, 2, 4),
        (5, "ShanChi", 1, 2021, 4, 1),
        (6, "CandyMan", 1, 2021, 2, 4)';
mysqli_query($db,$query) or die(mysqli_error($db));


// insert data into the movietype table
$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES
        (9,"Animation"),
        (10,"Educational"),
        (11,"Biopic")';
mysqli_query($db,$query) or die(mysqli_error($db));



// insert data into the people table
$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Alfred Hitchcock", 1, 0),
        (8, "Michael Powell", 0, 1),
        (9, "Derek Jarman", 1, 0)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';

?>