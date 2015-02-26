<?php
    $bandMemberName1 = $_GET["bandMemberName1"];
    $bandMemberName2 = $_GET["bandMemberName2"];
    $bandMemberName3 = $_GET["bandMemberName3"];
    $bandMemberName4 = $_GET["bandMemberName4"];
    $bandMemberName5 = $_GET["bandMemberName5"];
    $bandMemberName6 = $_GET["bandMemberName6"];

    $bandMemberInstrument1 = $_GET["bandMemberInstrument1"];
    $bandMemberInstrument2 = $_GET["bandMemberInstrument2"];
    $bandMemberInstrument3 = $_GET["bandMemberInstrument3"];
    $bandMemberInstrument4 = $_GET["bandMemberInstrument4"];
    $bandMemberInstrument5 = $_GET["bandMemberInstrument5"];
    $bandMemberInstrument6 = $_GET["bandMemberInstrument6"];

    $bandMembers[$bandMemberName1] = $bandMemberInstrument1;
    $bandMembers[$bandMemberName2] = $bandMemberInstrument2;
    $bandMembers[$bandMemberName3] = $bandMemberInstrument3;
    $bandMembers[$bandMemberName4] = $bandMemberInstrument4;
    $bandMembers[$bandMemberName5] = $bandMemberInstrument5;
    $bandMembers[$bandMemberName6] = $bandMemberInstrument6;
?>


<?php
    $albumName1 = $_GET["albumName1"];
    $albumName2 = $_GET["albumName2"];
    $albumName3 = $_GET["albumName3"];
    $albumName4 = $_GET["albumName4"];


    $albumPrice1 = $_GET["albumPrice1"];
    $albumPrice2 = $_GET["albumPrice2"];
    $albumPrice3 = $_GET["albumPrice3"];
    $albumPrice4 = $_GET["albumPrice4"];


    $albums[$albumName1] = $albumPrice1;
    $albums[$albumName2] = $albumPrice2;
    $albums[$albumName3] = $albumPrice3;
    $albums[$albumName4] = $albumPrice4;
?>

<?php
    $tourDate1 = $_GET["tourDate1"];
    $tourDate2 = $_GET["tourDate2"];
    $tourDate3 = $_GET["tourDate3"];
    $tourDate4 = $_GET["tourDate4"];
    $tourDate5 = $_GET["tourDate5"];
    $tourDate6 = $_GET["tourDate6"];

    $tourCity1 = $_GET["tourCity1"];
    $tourCity2 = $_GET["tourCity2"];
    $tourCity3 = $_GET["tourCity3"];
    $tourCity4 = $_GET["tourCity4"];
    $tourCity5 = $_GET["tourCity5"];
    $tourCity6 = $_GET["tourCity6"];

    $tourCities[$tourDate1] = $tourCity1;
    $tourCities[$tourDate2] = $tourCity2;
    $tourCities[$tourDate3] = $tourCity3;
    $tourCities[$tourDate4] = $tourCity4;
    $tourCities[$tourDate5] = $tourCity5;
    $tourCities[$tourDate6] = $tourCity6;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href='http://fonts.googleapis.com/css?family=Arvo|Architects+Daughter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/homestyles.css">

</head>

<body>

<div class="top-section">
    <header>
        <h1>SCREAMING NEWSPAPERS</h1>
    </header>
    <div class="line-break"></div>
</div>

<div class="middle-section">
    <h2>Albums</h2>
    <div class="album-images">
            <img src="https://farm3.staticflickr.com/2684/4445168437_7010ccc10b_n.jpg" width="320" height="227" alt="Converse"></a>
            <img src="https://farm3.staticflickr.com/2552/4167165950_59d8f83e29_n.jpg" width="320" height="191" alt="Bikes on Main Street"></a>
            <img src="https://farm3.staticflickr.com/2779/4479566238_6c0b6ea80b_n.jpg" width="213" height="320" alt="The Music Scene"></a>
            <img src="https://farm5.staticflickr.com/4039/4445996616_741df06d94_n.jpg" width="320" height="202" alt="Boots"></a>

    <?php
        foreach ($albums as $name => $price){
            if($name && $price){
                echo "<h3 class='name'>$name:  </h3><h3 class='price'>$$price</h3>";
            }

        }
    ?>
    </div>




</div>
<div class="line-break"></div>
<div class="bottom-section">
    <div class="bottom-left">
        <div class="bottom-left-parts">
            <h2>FOLLOW US</h2>
            <div class="social">
                <p>t</p>
                <p>f</p>
                <p>g+</p>
                <p>rss</p>
            </div>
        </div>
        <div class="bottom-left-parts">
            <h2>STAY IN TOUCH</h2>

            <form action="stay-in-touch">
                <label for="subscribe"></label>
                <input id="subscribe" name="subscribe" type="text" placeholder="email address">
                <h5>Add your email to hear about new music and tour dates!</h5>
            </form>
        </div>
    </div>

    <div class="bottom-middle">
        <div class="bottom-column-text">
        <h2>BAND MEMBERS</h2>

            <?php
            foreach ($bandMembers as $name => $instrument){
                if($name && $instrument){
                    echo "<h3> $name: $instrument </h3>";
                }
            }
            ?>
        </div>
    </div>

    <div class="bottom-right">
        <div class="bottom-column-text">
        <h2>TOUR DATES</h2>

            <?php
            foreach ($tourCities as $date => $city){
                if($date && $city){
                echo "<h3>$date<br><span class='orange'>•</span> in $city <span class='orange'>•</span></h3>";
                }
            }
            ?>

        </div>
    </div>
 </div>


    <div class="footer centered">

        <button class="update-button"><a href="update_form.php">Update</a></button>
        <p>Copyright <?php echo date ("Y"); ?> </p>
    </div>


</body>
</html>
