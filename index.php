<!doctype html>
<html>
  <head>
    <title>Basic Mirador</title>
  </head>
  <body>
    <?php 
      // get post data
      $data = $_POST["collection"];
      // collections directory
      $directoryToStoreCollections = './collections/stored_collections/';
      // Returns array of files in collections array
      $alreadySavedCollections = scandir($directoryToStoreCollections);
      // Count number of files
      //$fileCount = count(alreadySavedCollections);
      // file directory
      //$file = $directoryToStoreCollections . 'myFabulousCollection_'. $fileCount .'.json';

      // Initialize filecount variavle
      $fileCount = 0;
        
      $alreadySavedCollections = glob( $directoryToStoreCollections ."*" );
        
      if( $alreadySavedCollections ) {
          $fileCount = count($alreadySavedCollections);
      }
  
      echo "<div>" $fileCount . "files </div>";
      $file = $directoryToStoreCollections . 'myFabulousCollection_'. $fileCount .'.json';

      file_put_contents($file , $data);
    ?>
    <div id="mirador-viewer"></div>
    <script src="/dist/main.js"></script>
  </body>
</html>
