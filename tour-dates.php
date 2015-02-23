

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">

    <title>Screaming Newspapers Tour Dates</title>

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
        <div class="information pure-g">

            <div class="pure-u-1 pure-u-md-1-2">
                <div class="l-box">
                <?php foreach ($tourDates as $tourDate => $tourCity){
                    echo "<h3 class='information-head'>" . $tourDate . "</h3>" . "<h4>" . $tourCity . "</h4>";
                
                    echo "<div class='tourDate-image'>" .
                        "<img src='http://rsnash7.files.wordpress.com/2011/11/newspaper_20icon_15b15d.jpg'>" . "</div>";
                    }
                ?>  
                </div>
            </div>


        </div> <!-- end information -->
    </div> <!-- end l-content -->

    <div class="footer l-box">
            <p>Copyright <?php echo date ("Y"); ?> </p>
    </div>


</body>
</html>