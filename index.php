<!doctype html>
<html>
  <head>
    <title>PHP ZB-Viewer Feature Branch</title>
  </head>
  <body>
    <!-- <script type="text/javascript" src="mirador.min.js"></script> -->

    <div id="mirador"></div>
    <!-- LOCALHOST -->
    <!-- <script type="text/javascript" src="/git/zb-viewer/dist/main.js"></script> -->
    <script src="dist/main.js"></script>
    <!-- LIVE -->
    <!-- <script type="text/javascript" src="/dist/main.js"></script> -->

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

      // Initialize filecount variavlegit 
      $fileCount = 0;
        
      $alreadySavedCollections = glob( $directoryToStoreCollections ."*" );
        
      if( $alreadySavedCollections ) {
          $fileCount = count($alreadySavedCollections);
      }
  
      echo "<div>" . $fileCount . " files</div>";
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
        id: 'mirador',
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
          ],
          selectedTheme: 'ZBTheme',
          themes:  {
              ZBTheme: {
                  palette: {
                      primary: {                    
                          main: '#846963',  //ZB-braun
                          dark: '#66514d',
                      },
                      secondary: {
                          main: '#5574bb', // ZB-blau
                          dark: '#415fa4',
                      }
                  }
              }
          },
      });
    </script>


    <script type='text/javascript'>
      console.log("ZB-Viewer loaded!")
    </script>
  </body>
</html>
