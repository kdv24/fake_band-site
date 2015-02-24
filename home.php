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
</div>

<div class="middle-section">
    <h2>Albums</h2>
    <div class="album-images">
        <img src="http://rsnash7.files.wordpress.com/2011/11/newspaper_20icon_15b15d.jpg">
        <img src="http://thumb101.shutterstock.com/display_pic_with_logo/78065/131607743/stock-photo-mock-up-of-a-daily-newspaper-on-a-white-background-the-name-title-headlines-and-stories-are-all-131607743.jpg">
        <img src="http://www.tamooracademy.com/wp-content/uploads/2015/01/Newspaper.jpg">
        <img src="http://www.gyllyngvase.co.uk/images/newspapers.jpg">

    </div>    
        <ul>
    <?php 
        foreach ($albums as $name => $price){
            if($name && $price){
                echo "<li>" . "$name: " . "$" . "$price" . "</li>";
            }

        }                          
    ?>     
        </ul>

</div>

<div class="bottom-section">
    <div class="bottom-left">
        <h2>FOLLOW US</h2>
        <h2>STAY IN TOUCH</h2>
    </div>    

    <div class="bottom-middle">
        <h2>Band Members</h2>
                    
            <?php 
            foreach ($bandMembers as $name => $instrument){
                if($name && $instrument){
                    echo "<li>" . "$name: $instrument" . "</li>";
                }
            }    
            ?>  
    </div>         
                 
    <div class="bottom-right">
        <h2>Tour Dates</h2>
            <ul>
            <?php 
            foreach ($tourCities as $date => $city){
                if($date && $city){
                echo "<li>" . "$date" . " in " . "$city" . "</li>"; 
                }
            }    
            ?>   
            </ul>
    </div>         
 </div>       
 <div class="full-width">       
    <button class="update-button centered"><a href="update_form.php">Update</a></button>
 </div>

    <div class="footer centered">
            <p>Copyright <?php echo date ("Y"); ?> </p>
    </div>


</body>
</html>
