<!doctype html>
<html>
  <head>
    <title>Basic Mirador</title>
  </head>
  <body>
    <div id="mirador-viewer"></div>
    <script src="/dist/main.js"></script>
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
  
      echo "<div>" . $fileCount . " files</div>";
      $file = $directoryToStoreCollections . 'myFabulousCollection_'. $fileCount .'.json';

      file_put_contents($file , $data);
      // Display collection in viewer windows
      $collection = json_decode($data, true);
      $manifests = array();
      foreach($collection["manifests"] as $value) {
        $manifests[] = $value["@id"];
      }
      unset($value);
      echo "<script type=\"text/javascript\">
        var miradorInstance = Mirador.viewer({
          id: 'mirador-viewer',
          windows: [";
      foreach($manifests as $value) {
        echo "{ manifestId: '$value' },";
      unset($value);
      echo "]});</script>";          
    ?>
  </body>
</html>
