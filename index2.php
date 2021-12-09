<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Index</title>
</head>
<body>
  <div class="auction">
  <div class="item">
    <img  class="item" src="golden vase.png" alt="currently selling item">
  </div>
  <div class="d-grid gap-2 col-2 mx-auto raise">
    <button class="btn btn-primary" type="button">Button</button>
  </div>
  </div>
  <?php
  
  include_once "connect_2.php";
  $sql = "SELECT * FROM test";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  while($row = mysqli_fetch_array($result)){
    foreach($row as $row){
      print_r($row);
    }
  }
  mysqli_close($conn);
  
  
  ?>
  
</body>
</html>