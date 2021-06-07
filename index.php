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
      // Count number of files, remove . and ..
      $fileCount = count(alreadySavedCollections) - 2;
      // file directory
      $file = $directoryToStoreCollections . 'myFabulousCollection'. $fileCount .'.json';
      file_put_contents($file , $data);
    ?>
    <div id="mirador-viewer"></div>
    <script src="/dist/main.js"></script>
  </body>
</html>
