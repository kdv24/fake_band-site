<?php
  class Album
  {
    public $artist;
    public $title;
    private $price;
    public $cover_art;

    function __construct($band_name, $album_name, $album_price, $album_cover)
    {
      $this->artist = $band_name;
      $this->title = $album_name;
      $this->price = $album_price;
      $this->cover_art = $album_cover;
    }

    function itemMatch($title_match)
      {
        return $this->title == $title_match;
      }

    function setPrice($new_price)
    {
      $float_price = (float) $new_price;
      if($float_price != 0) {
        $formatted_price = number_format($float_price, 2);
        $this->price = $formatted_price;
      }
    }

    function getPrice()
    {
      return $this->price;
    }
  }

  $album1 = new Album("Screaming Newspapers", "Sneakers", 15.00, "https://farm3.staticflickr.com/2684/4445168437_7010ccc10b_n.jpg");
  $album2 = new Album("Screaming Newspapers", "Bikes on Main Street", 19.00, "https://farm3.staticflickr.com/2552/4167165950_59d8f83e29_n.jpg");
  $album3 = new Album("Screaming Newspapers", "The Music Scene", 15.00, "https://farm3.staticflickr.com/2779/4479566238_6c0b6ea80b_n.jpg");
  $album4 = new Album("Screaming Newspapers", "Boots", 14.00, "img/red_boots.jpg");

  $albums_info = array($album1, $album2, $album3, $album4);

  $albums_matching_search = array();
    foreach($albums_info as $album_info) {
      if ($album_info->itemMatch($_GET['title'])){
        array_push($albums_matching_search, $album_info);
      }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Album Search Results
    </title>
  </head>
  <body>
    <div class="container">
      <h2>Album Search Results</h2>
      <?php
        foreach($albums_matching_search as $album_info){
          $cost = $album_info->getPrice();
          echo "<li> $album_info->title</li>";
          echo "<ul>";
            echo "<img src='$album_info->cover_art'>";
            echo "<li> $album_info->artist </li>";
            echo "<p> $$cost</p>";
          echo "</ul>";
        }
      ?>
    </div>
  </body>
</html>
