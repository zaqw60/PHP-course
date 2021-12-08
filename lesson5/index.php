<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
<div class="container" style="height: 100vh">
  <div class="row" style="height: 10%; background-color: darkseagreen;">
    <div style="text-align: center" class="col">
        <?php
        require("components/header.php");
        ?>
    </div>
  </div>
  <div class="row" style="height: 80%;">
    <div class="col-2" style="; background-color: aliceblue"></div>
    <div class="col-8">
      <?php
          require("components/content.php");
          ?>
    </div>
    <div class="col-2" style="; background-color: lavenderblush"></div>
  </div>
  <div class="row" style="height: 10%; background-color: antiquewhite;">
    <div class="col"></div>
  </div>
</div>
</body>
</html>