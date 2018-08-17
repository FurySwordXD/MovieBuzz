<?php 

	include 'common.php';
	include 'dbconnection.php'; 

	$movie = $_GET['MovieName'];
	$movieImage;
	$genre;
	$sql = "SELECT Name, ImageLocation, Genre FROM Movies WHERE Name = '" . $movie . "'";

    $result = $conn->query($sql);
    foreach ($result as $row) 
    {
        $movieImage = $row["ImageLocation"];
        $genre = $row["Genre"];
    }

    echo "<br><br>";
    echo "<div class = 'w3-container w3-content w3-card-4' style = 'background-color: #252525; padding:0;'>";
    echo "<div class = 'w3-col m3'>";
    echo "<img style = 'width: 100%; padding:0;' class = 'w3-hover-opacity' src=". $movieImage .">";
    echo "</div>";
    echo "<div class = 'w3-col m9 w3-padding-large'>";
    echo "<div class = 'w3-jumbo'>" . $movie . "</div><br>" . $genre;
    echo "<p>Lorem ipsum bullshit...";
    echo "</div>";
    echo "</div><br>";

    echo "<div class = 'w3-container w3-content w3-card-4 w3-padding-large' id = 'SelectionDetails'><br>";
    echo "</div>";

    echo "<div class = 'w3-container w3-content w3-card-4 w3-padding-large w3-center'><br>";
    $rows = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    for ($j = 0; $j < 20; $j++)
    {
    	echo " ". $j+1 . " ";
    }
    echo "<br>";
    for ($i=0; $i < 15; $i++) {
    	echo $rows[$i];
    	for ($j=0; $j < 20; $j++) { 
    	 	echo "<img class = 'w3-hover-opacity' src = 'assets/Icons/seat.png' style = 'width:4%;padding:5px;margin:0px;' onclick = 'onSeatSelected(this);' id = '" . $rows[$i] . $j . "'>";
    	}
    	echo "<br><br>"; 
    }
    echo "</div>";
    mysqli_close($conn);
?>

<script type="text/javascript" src="movie.js"></script>