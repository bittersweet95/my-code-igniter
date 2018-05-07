<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="<?php=base_url() ?>assets/js/chart/fusioncharts.js"></script>
    <script src="<?php=base_url() ?>assets/js/chart/fusioncharts.charts.js"></script>
    <script src="<?php=base_url() ?>assets/js/chart/themes/fusioncharts.theme.fint.js"></script>
    <script src="<?php=base_url() ?>assets/js/jquery-3.3.1.js"></script>
    <script src="<?php=base_url() ?>assets/js/fusioncharts-jquery-plugin.js"></script>
    <title>Fishing Vessel</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Fishing Vessel Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('FishingVessel'); ?>">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('FishingVessel/new_vessel'); ?>">New Vessel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('FishingVessel/report'); ?>">report</a>
      </li>
    </ul>
      </div>
</nav>
<div class="container">

