<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$titlepage?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?=base_url()?>assets/images/icons/financiaMiniLogo.png" rel="icon" type="image/png">
    <link href="<?=base_url()?>assets/styles/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/styles/financia.css" rel="stylesheet">
  </head>
  <body>  
    <div class="container-fluid">

      <!-- Header -->
      <header class="row">
        <nav class="col-xs-12 col-md-12">
          <div class="row">

            <!-- Logo -->
            <div class="col-xs-2 col-md-2 headerLogo">
              <a href="" title="financia's home">
                <img src="<?=base_url()?>assets/images/icons/financiaLogoWhite72.png">
                financia
              </a>
            </div>

            <!-- Menu -->
            <div class="col-xs-10 col-md-3 col-md-offset-7 headerMenu">
              <ul>
                <li><a href="records">Registros</a></li>
                <li>Estadísticas</li>
              </ul>
            </div>

          </div>
          
        </nav>
      </header>

