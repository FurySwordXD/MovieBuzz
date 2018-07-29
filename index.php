<!DOCTYPE html>
<html>
    
    <body>

        <?php include 'common.php'; ?>

        <!-- First Parallax Image with Logo Text -->
        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
            <div class="w3-display-middle" style="white-space:nowrap;">
                <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MOVIE BUZZ</span>
            </div>
        </div>

        <!-- Container (About Section) -->
        <div class="w3-content w3-container w3-padding-64" id="theatres">
            <h3 class="w3-center w3-text-teal">THEATRES</h3>
            
            <?php

                $thatreImages = array('assets/theatres/hall1.jpg', 'assets/theatres/hall2.jpg');
                for ($row = 0; $row < 2; $row++) 
                {
                    echo "<div class = 'w3-row'>";
                    for ($column = 0; $column < 2; $column++) { 
                        echo "<div class = 'w3-col l6 m6 s12 w3-center w3-padding-small'>";
                        echo "<div class = 'w3-card-4' style = 'background-color: #353535'>";
                        echo "<img src=". $thatreImages[($row * 4 + $column) % count($thatreImages)] ." class='w3-hover-opacity' style='width:100%'>";
                        echo "<div class = 'w3-container'> Theatre name </div>";
                        echo "</div></div>";
                    }
                    echo "</div><br>";
                }

            ?>

        </div>

        <div class="w3-row w3-center w3-dark-grey w3-padding-16">
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge"></span><br>
            </div>
        </div>

        <!-- Second Parallax Image -->
        <div class="bgimg-2 w3-display-container w3-opacity-min" id="movies">
            <div class="w3-display-middle" style="white-space:nowrap;">
                <span class="w3-xxlarge w3-black w3-text-white w3-wide w3-center w3-padding-large w3-animate-opacity">MOVIES</span>
            </div>
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white w3-white" onclick="showSlide(0)" id = "circle0"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="showSlide(1)" id = "circle1"></span>
            </div>
        </div>
        
        <!-- Container (Movies Section) -->
        <div class="w3-content w3-container w3-padding-64" >
            <h3 class="w3-center w3-text-teal">Now Showing...</h3>

            <?php

                include 'dbconnection.php';

                $movieImages = array('assets/movies/junga.jpg', 'assets/movies/antman.jpg', 'assets/movies/tamizhpadam2.jpg');
                for ($row = 0; $row < 2; $row++) 
                {
                    echo "<div class = 'w3-row'>";
                    for ($column = 0; $column < 4; $column++) { 
                        echo "<div class = 'w3-col l3 m6 s12 w3-center w3-padding-small'>";
                        echo "<div class = 'w3-card-4' style = 'background-color: #353535'>";
                        echo "<img src=". $movieImages[($row * 4 + $column) % count($movieImages)] ." class='w3-hover-opacity' style='width:100%'>";
                        echo "<div class = 'w3-container'> Movie name </div>";
                        echo "</div></div>";
                    }
                    echo "</div><br>";
                }

            ?>
            <br><br>
        </div>

        <div class="w3-row w3-center w3-dark-grey w3-padding-16">
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge"></span><br>
            </div>
        </div>

        <!-- Third Parallax Image with Portfolio Text -->
        <div class="bgimg-3 w3-display-container w3-opacity-min" id="about">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-black w3-text-white w3-wide w3-center w3-padding-large w3-animate-opacity">CONTACT</span>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div class="w3-content w3-container w3-padding-64">
            <h3 class="w3-center  w3-text-teal">ABOUT US</h3>

            <div class="w3-row w3-padding-32 w3-section">

                <div class="w3-col m4 w3-panel">
                    <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
                </div>

                <form class="w3-card-4 w3-padding-small" action="mailto:sainath.g2017@vitstudent.ac.in" method="post" enctype="text/plain" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                    <button class="w3-button w3-black w3-right w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </form>

             </div>
        </div>

        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
            <a href="#home" class="w3-button"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
            <div class="w3-xlarge w3-section">
            <a href="https://www.facebook.com/FurySwordXD"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a href="https://www.instagram.com/furyswordxd"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <a href="https://in.pinterest.com/furyswordxd/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
            <a href="https://twitter.com/FurySwordXD" ><i class="fa fa-twitter w3-hover-opacity"></i></a>
            </div>
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
        </footer>

        <script src="index_js.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZp9GHQ1w3ojKZTNj2ZjGjL9xk-1HkCuo&callback=myMap"></script>
    </body>
</html>
