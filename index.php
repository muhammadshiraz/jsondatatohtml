<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>JSON Data to HTML</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<div class="container">
  <h2>JavaScript Template Literals: JSON to HTML</h2>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <button id="start" type="button" class="btn btn-default" onclick="display()">start random</button>
      <button id="stop" type="button" class="btn btn-default">stop random</button>
      <button id="sort" type="button" class="btn btn-default">sort</button>
    </div>
  </form>

  <div class="contents">
    <table class="table" id="employee_table">
      <thead>
          <th>Id</th>
		  <th>Name</th>
          <th>Image</th>
          <th>Price</th>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
