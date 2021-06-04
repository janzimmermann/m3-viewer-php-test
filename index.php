<!doctype html>
<html>
  <head>
    <title>Basic Mirador</title>
  </head>
  <body>
    <?php 
      // echo "<div>moin</div>";
      $data = htmlspecialchars($_POST["collection"]);
      // $data = file_get_contents('collections/sample_detektiiif_output.json');
      // echo "<div>" . $div . "</div>";
      // echo "<div>" . htmlspecialchars($_POST["collection"]) . "</div>"
      $file = './collections/myFabulousCollection.json';
      file_put_contents($file , $data);
    ?>
    <div id="mirador-viewer"></div>
    <script src="/dist/main.js"></script>
  </body>
</html>
