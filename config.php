<?php
if (isset($_GET['temperatura']) && $_GET['temperatura'] != ''){
  exec("sudo gpio -g mode PORTA_DO_GPIO out");
  if ($_GET['temperatura'] == 'on'){
    exec("sudo gpio -g write PORTA_DO_GPIO 1");
  } else {
      exec("sudo gpio -g write PORTA_DO_GPIO 0");
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css"> </head>

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
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-primary display-3">AquOS - Configuração</h1>
          <br>
          <br> </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>Módulo</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Temperatura</td>
                <td></td>
              </tr>
              <tr>
                <td>GPIO 1</td>
                <td></td>
              </tr>
              <tr>
                <td>GPIO 2</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4">
          <table class="table">
            <thead>
              <tr>
                <th>On/Off</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input type="radio" name="temperatura" value="on" checked="" href="?temperatura=on"> On
                  <input type="radio" name="temperatura" value="off" href="?temperatura=off"> Off </td>
              </tr>
              <tr>
                <td>
                  <input type="radio" name="gpio1" value="on"> On
                  <input type="radio" name="gpio1" value="off" checked=""> Off </td>
              </tr>
              <tr>
                <td>
                  <input type="radio" name="gpio2" value="on"> On
                  <input type="radio" name="gpio2" value="off" checked=""> Off </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <a href="#" class="btn btn-outline-primary">Atualizar</a>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <div class="row">
          <div class="col-md-12 mt-3 text-center">
            <p>© Copyright 2018 AquOS</p>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>