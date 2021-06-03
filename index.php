<!doctype html>
<html>
  <head>
    <title>Basic Mirador</title>
  </head>
  <body>
    <?php 
      echo "<div>moin</div>";
       echo "<div>" . htmlspecialchars($_POST["collection"]) . "</div>"
    ?>
    <div id="mirador-viewer"></div>
    <script src="/dist/main.js"></script>
  </body>
</html>
