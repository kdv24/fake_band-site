


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
            <?php 
            foreach ($albums as $album){
                    echo "<li>" . $album . "</li>";
                }                        
            ?>                      
                    </ul>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table pricing-table-enterprise">
                    <div class="pricing-table-header">
                        <h2><a href="tour-dates.php">Tour Dates</a></h2>
                    </div>

                    <ul class="pricing-table-list">
                        <li><?php echo $tourDate1 . " in " . $tourCity1; ?></li>
                        <li><?php echo $tourDate2 . " in " . $tourCity2; ?></li>
                        <li><?php echo $tourDate3 . " in " . $tourCity3; ?></li>
                        <li><?php echo $tourDate4 . " in " . $tourCity4; ?></li>
                        <li><?php echo $tourDate5 . " in " . $tourCity5; ?></li>
                        <li><?php echo $tourDate6 . " in " . $tourCity6; ?></li>
                    </ul>
                </div>
            </div>
            <button class="pure-button"><a href="update_form.php">Update</a></button>
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
