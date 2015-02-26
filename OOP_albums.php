<?php
  class Album
  {
    public $artist;
    public $title;
    public $price;
    public $cover_art;

    function itemMatch($title_match)
      {
        return $this->title == $title_match;
      }
  }

  $album1 = new Album();
  $album1->artist = "Screaming Newspapers";
  $album1->title = "Sneakers";
  $album1->price = "15.00";
  $album1->cover_art = "https://farm3.staticflickr.com/2684/4445168437_7010ccc10b_n.jpg";

  $album2 = new Album();
  $album2->artist = "Screaming Newspapers";
  $album2->title = "Bikes on Main Street";
  $album2->price = "19.00";
  $album2->cover_art = "https://farm3.staticflickr.com/2552/4167165950_59d8f83e29_n.jpg";


  $album3 = new Album();
  $album3->artist = "Screaming Newspapers";
  $album3->title = "The Music Scene";
  $album3->price = "15.00";
  $album3->cover_art = "https://farm3.staticflickr.com/2779/4479566238_6c0b6ea80b_n.jpg";

  $album4 = new Album();
  $album4->artist = "Screaming Newspapers";
  $album4->title = "Boots";
  $album4->price = "15.00";
  $album4->cover_art ="img/red_boots.jpg";

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
          echo "<li> $album_info->title</li>";
          echo "<ul>";
            echo "<img src='$album_info->cover_art'>";
            echo "<li> $album_info->artist </li>";
            echo "<li> $album_info->price </li>";
          echo "</ul>";
        }
      ?>
    </div>
  </body>
</html>
