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
  
</head>
<body>

<?php include('inc/header.php'); ?>

<div class="l-content">
  <div class="pricing-tables pure-g">

    <!-- BAND MEMBER NAMES -->
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="pricing-table pricing-table-free">
        <div class="pricing-table-header">
        <h2>Update band member names</h2>
      </div>
        <form action="index.php">
          <div class="pure-form">
            <fieldset>
            <div class="bandMember1">
                <label for"bandMember1"><p>Band Member Name</p></label>
                <input id="bandMember1" name="bandMember1" class="form-control" type="text">  
                <label for"bandMemberInstrument1"><p>Instrument</p></label>
                <input id="bandMemberInstrument1" name="bandMemberInstrument1" class="form-control" type="text">
            </div>  
            </fieldset>
            <fieldset>
            <div class="bandMember2">
                <label for"bandMember2"><p>Band Member Name</p></label>
                <input id="bandMember2" name="bandMember2" class="form-control" type="text">  
                <label for"bandMemberInstrument2"><p>Instrument</p></label>
                <input id="bandMemberInstrument2" name="bandMemberInstrument2" class="form-control" type="text">
            </div>  
            </fieldset>

            <fieldset>
            <div class="bandMember3">
                <label for"bandMember3"><p>Band Member Name</p></label>
                <input id="bandMember3" name="bandMember3" class="form-control" type="text">  
                <label for"bandMemberInstrument3"><p>Instrument</p></label>
                <input id="bandMemberInstrument3" name="bandMemberInstrument3" class="form-control" type="text">
            </div>  
            </fieldset>
            <fieldset>
            <div class="bandMember4">
                <label for"bandMember4"><p>Band Member Name</p></label>
                <input id="bandMember4" name="bandMember4" class="form-control" type="text">  
                <label for"bandMemberInstrument4"><p>Instrument</p></label>
                <input id="bandMemberInstrument4" name="bandMemberInstrument4" class="form-control" type="text">
            </div>  
            </fieldset>   
            <fieldset>
            <div class="bandMember5">
                <label for"bandMember5"><p>Band Member Name</p></label>
                <input id="bandMember5" name="bandMember5" class="form-control" type="text">  
                <label for"bandMemberInstrument5"><p>Instrument</p></label>
                <input id="bandMemberInstrument5" name="bandMemberInstrument5" class="form-control" type="text">
            </div>  
            </fieldset>
            <fieldset>
            <div class="bandMember6">
                <label for"bandMember6"><p>Band Member Name</p></label>
                <input id="bandMember6" name="bandMember5" class="form-control" type="text">  
                <label for"bandMemberInstrument6"><p>Instrument</p></label>
                <input id="bandMemberInstrument6" name="bandMemberInstrument6" class="form-control" type="text">
            </div>  
            </fieldset>               
          </div>  

          <button type="submit" class="btn">"Submit"</button>
        </form>
        </div>
    </div>

    <!-- ALBUM NAMES -->
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="pricing-table pricing-table-biz">
        <div class="pricing-table-header">
        <h2>Update Album Names and Prices</h2>
        </div>
        <form action="albums.php">
          <div class="pure-form">
            <fieldset>
            <div class="album1">
                <label for"album1"><p>Album Name</p></label>
                <input id="album1" name="album1" class="form-control" type="text">  
                <label for"albumPrice1"><p>Price</p></label>
                <input id="albumPrice1" name="albumPrice1" class="form-control" type="text">
            </div>  
            </fieldset>
            <fieldset>
            <div class="album2">
                <label for"album2"><p>Album Name</p></label>
                <input id="album2" name="album2" class="form-control" type="text">  
                <label for"albumPrice2"><p>Price</p></label>
                <input id="albumPrice2" name="albumPrice2" class="form-control" type="text">
            </div>  
            </fieldset>

            <fieldset>
            <div class="album3">
                <label for"album3"><p>Album Name</p></label>
                <input id="album3" name="album2" class="form-control" type="text">  
                <label for"albumPrice3"><p>Price</p></label>
                <input id="albumPrice3" name="albumPrice3" class="form-control" type="text">
            </div>  
            </fieldset>
            <fieldset>
            <div class="album4">
                <label for"album4"><p>Album Name</p></label>
                <input id="album4" name="album4" class="form-control" type="text">  
                <label for"albumPrice4"><p>Price</p></label>
                <input id="albumPrice4" name="albumPrice4" class="form-control" type="text">
            </div>  
            </fieldset>   
            <fieldset>
            <div class="album5">
                <label for"album5"><p>Album Name</p></label>
                <input id="album5" name="album5" class="form-control" type="text">  
                <label for"albumPrice5"><p>Price</p></label>
                <input id="albumPrice5" name="albumPrice5" class="form-control" type="text">
            </div>  
            </fieldset>
            <fieldset>
            <div class="album6">
                <label for"album6"><p>Album Name</p></label>
                <input id="album6" name="album6" class="form-control" type="text">  
                <label for"albumPrice6"><p>Price</p></label>
                <input id="albumPrice6" name="albumPrice6" class="form-control" type="text">
            </div>  
            </fieldset>               
          </div>  

          <button type="submit" class="btn">"Submit"</button>
        </form>
        </div>
    </div>

    <!-- TOUR DATES -->
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="pricing-table pricing-table">
        <div class="pricing-table-header">
        <h2>Update Tour Dates and Cities</h2>
        </div>
        <form action="index.php">
            <div class="pure-form">
        
            <fieldset>
            <div class="tourDate1">
                <label for"tourDate1"><p>Date</p></label>
                <input id="tourDate1" name="tourDate1" class="form-control" type="text">  
                <label for"tourCity1"><p>City</p></label>
                <input id="tourCity1" name="tourCity1" class="form-control" type="text">  
            </div>  
            </fieldset>
            <fieldset>
            <div class="tourDate2">
                <label for"tourDate2"><p>Date</p></label>
                <input id="tourDate2" name="tourDate2" class="form-control" type="text">  
                <label for"tourCity2"><p>City</p></label>
                <input id="tourCity2" name="tourCity2" class="form-control" type="text">  
            </div>  
            </fieldset>
            <fieldset>
            <div class="tourDate3">
                <label for"tourDate3"><p>Date</p></label>
                <input id="tourDate3" name="tourDate3" class="form-control" type="text">  
                <label for"tourCity3"><p>City</p></label>
                <input id="tourCity3" name="tourCity3" class="form-control" type="text">  
            </div>  
            </fieldset>
            <fieldset>
            <div class="tourDate4">
                <label for"tourDate4"><p>Date</p></label>
                <input id="tourDate4" name="tourDate4" class="form-control" type="text">  
                <label for"tourCity4"><p>City</p></label>
                <input id="tourCity4" name="tourCity4" class="form-control" type="text">  
            </div>  
            </fieldset>    
            <fieldset>
            <div class="tourDate5">
                <label for"tourDate5"><p>Date</p></label>
                <input id="tourDate5" name="tourDate5" class="form-control" type="text">  
                <label for"tourCity5"><p>City</p></label>
                <input id="tourCity5" name="tourCity5" class="form-control" type="text">  
            </div>  
            </fieldset>
            <fieldset>
            <div class="tourDate6">
                <label for"tourDate6"><p>Date</p></label>
                <input id="tourDate6" name="tourDate6" class="form-control" type="text">  
                <label for"tourCity6"><p>City</p></label>
                <input id="tourCity6" name="tourCity6" class="form-control" type="text">  
            </div>  
            </fieldset>              
          </div>  

          <button type="submit" class="btn">"Submit"</button>
        </form>
      </div>
   

  </div>
</div>

</body>
</html