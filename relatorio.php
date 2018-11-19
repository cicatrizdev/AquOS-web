<?php
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "aquos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, temperatura FROM modulo_temperatura";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $dataPoints = array(
      array("y" => $row["temperatura"], "label" => $row["id"] )
    );
  }
} else {
  echo "Erro em obter data!";
}
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css"> 

  <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Temperatura"
	},
	axisY: {
		title: "Temperatura (em C)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## C",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>

<body>
  <div class="bg-primary p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a href="home.html" class="active nav-link">
                <i class="fa fa-home fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a href="config.php" class="nav-link text-secondary">Configuração</a>
            </li>
            <li class="nav-item">
              <a href="relatorio.php" class="nav-link text-secondary">Relatório</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
  <div>
    
    <?php /*
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo " - Temperatura: " . $row["temperatura"]. " " . "Umidade: ". $row["umidade"]. "<br>";
        }
      } else {
        echo "Deu ruim! 0 results";
      }
      $conn->close();
    */?>
  </div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>