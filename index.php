<!doctype html>
<html>
  <head>
    <title>Basic Mirador Feature Branch</title>
  </head>
  <body>
    <div id="mirador-viewer"></div>
    <script src="src/index.js"></script>
    
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
  
      $file = $directoryToStoreCollections . 'myFabulousCollection_'. $fileCount .'.json';

      file_put_contents($file , $data);
      
      // TMP output
      echo "<div>" . $fileCount . " files</div>";
      
      // Display collection in viewer windows
      $collection = json_decode($data, true);
      $manifests = [];
      foreach($collection["manifests"] as $manifest) {
        $manifests[] = $manifest["@id"];
      }
      unset($manifest);
    ?>

    <script type='text/javascript'>
      var miradorInstance = Mirador.viewer({
        id: 'mirador-viewer',
          windows: [
            <?php
            foreach($manifests as $manifestId) {
              echo "{manifestId: '". $manifestId ."'}, \n";
            }
            ?>
          ],
          catalog: [
            <?php
              foreach($manifests as $manifestId) {
                echo "{ manifestId: '". $manifestId ."' }, \n";
              }
            ?>
        ]
      });
    </script>
  </body>
</html>
