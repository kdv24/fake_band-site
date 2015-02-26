


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
            foreach ($bandMembers as $name=> $instrument){
                if($name && $instrument){
                    echo "<li> $name: $instrument </li>";
                }
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
            foreach ($albums as $name => $price){
                if($name && $price){
                    echo "<li>" . "$name" ." $" . "$price" . "</li>";
                }
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
            <button class="pure-button centered"><a href="update_form.php">Update</a></button>
        </div> <!-- end pricing-tables -->


    </div> <!-- end l-content -->

    <div class="footer l-box">
            <p>Copyright <?php echo date ("Y"); ?> </p>
    </div>


</body>
</html>
