<!doctype html>
<html>
  <head>
    <title>Basic Mirador Feature Branch</title>
  </head>
  <body>
    <div id="mirador-viewer"></div>
<<<<<<< HEAD
    <script src="src/index.js"></script>
=======
    <!-- <script src="/dist/main.js"></script> -->
    <script type='text/javascript'>
      import Mirador from 'mirador/dist/es/src/index';
    </script>
>>>>>>> b1f097ee941d406485f17132f2d92112a88dc93c
    
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
