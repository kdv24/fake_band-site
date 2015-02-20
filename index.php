<?php
    $bandMember1 = $_GET["bandMember1"];
    $bandMember2 = $_GET["bandMember2"];
    $bandMember3 = $_GET["bandMember3"];
    $bandMember4 = $_GET["bandMember4"];    
    $bandMember5 = $_GET["bandMember5"];
    $bandMember6 = $_GET["bandMember6"];
    $bandMembers = array($bandMember1, $bandMember2, $bandMember3, $bandMember4, $bandMember5, $bandMember6);
?>    

<?php
    $album1 = $_GET["album1"];
    $album2 = $_GET["album2"];
    $album3 = $_GET["album3"];
    $album4 = $_GET["album4"];    
    $album5 = $_GET["album5"];
    $album6 = $_GET["album6"];
    $albums = array($album1, $album2, $album3, $album4, $album5, $album6); 
?>   

<?php
    $tourDate1 = $_GET["tourDate1"];
    $tourDate2 = $_GET["tourDate2"];
    $tourDate3 = $_GET["tourDate3"];
    $tourDate4 = $_GET["tourDate4"];    
    $tourDate5 = $_GET["tourDate5"];
    $tourDate6 = $_GET["tourDate6"];
    $tourDates = array($tourDate1, $tourDate2, $tourDate3, $tourDate4, $tourDate5, $tourDate6);    
?> 


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">

    <title>Screaming Newspapers</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
  
<!--<![endif]-->

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/pricing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="css/layouts/pricing.css">
    <!--<![endif]-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>
<?php include('inc/header.php'); ?>

    <div class="l-content">
        <div class="pricing-tables pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table pricing-table-free">
                    <div class="pricing-table-header">
                        <h2>Band Members</h2>
                    </div>
                    <ul class='pricing-table-list'>
            <?php 
            foreach ($bandMembers as $bandMember){
                    echo "<li>" . $bandMember . "</li>";
                }
            ?>  
                    </ul>      
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table pricing-table-biz pricing-table-selected">
                    <div class="pricing-table-header">
                        <h2><a href="albums.php">Albums</a></h2>
                    </div>

                    <ul class="pricing-table-list">
                        <li><?php echo $album1; ?></li>
                        <li><?php echo $album2; ?></li>
                        <li><?php echo $album3; ?></li>
                        <li><?php echo $album4; ?></li>
                        <li><?php echo $album5; ?></li>
                        <li><?php echo $album6; ?></li>
                    </ul>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table pricing-table-enterprise">
                    <div class="pricing-table-header">
                        <h2>Tour</h2>
                    </div>

                    <ul class="pricing-table-list">
                        <li><?php echo $tourDate1; ?></li>
                        <li><?php echo $tourDate2; ?></li>
                        <li><?php echo $tourDate3; ?></li>
                        <li><?php echo $tourDate4; ?></li>
                        <li><?php echo $tourDate5; ?></li>
                        <li><?php echo $tourDate6; ?></li>
                    </ul>
                </div>
            </div>
        </div> <!-- end pricing-tables -->

        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-2">
                <div class="l-box">
                    <h3 class="information-head">Get started today</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-2">
                <div class="l-box">
                    <h3 class="information-head">Pay monthly or annually</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                    </p>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-2">
                <div class="l-box">
                    <h3 class="information-head">24/7 customer support</h3>
                    <p>
                        Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-2">
                <div class="l-box">
                    <h3 class="information-head">Cancel your plan anytime</h3>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div> <!-- end information -->
    </div> <!-- end l-content -->

    <div class="footer l-box">
            <p>Copyright <?php echo date ("Y"); ?> </p>
    </div>


</body>
</html>
