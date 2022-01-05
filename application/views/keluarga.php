<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('asset/css/materialize.min.css') ?>" media="screen,projection" />
    <title>RESTFUL CLIENT KELUARGA</title>
</head>
<body>
<div class="navbar-fixed ">
        <nav class="#00c853 green accent-4">
            <div class="nav-wrapper container ">
                <a href="#" class="brand-logo">KELUARGA</a>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="topnav right hide-on-med-and-down">
                   
                </ul>
            </div>
        </nav>
    </div>
    
    <div class="container">
        
<font color="blue">
    
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<br>
<div>
<a class="waves-effect waves-light btn" href="keluarga/create">+ Tambah data</a>
</div>
<br>
<table class="highlight" border="1">
   <tr>
        <th>no</th>
        <th>nama</th>
        <th>tempat lahir</th>
        <th>tempat lahir</th>
        <th>tanggal lahir</th>
        <th>agama</th>
        <th>pekerjaan</th>
       
    </tr>
    <?php
    foreach ($datakeluarga as $char){
        echo "<tr>
        <td>$char->no</td>
        <td>$char->nama</td>
        <td>$char->tempat_lahir</td>
        <td>$char->tanggal_lahir</td>
        <td>$char->agama</td>
        <td>$char->pekerjaan</td>
        <td>
            ".anchor('Laptop/edit/'.$char->no,'Edit')."
            ".anchor('Laptop/delete/'.$char->no,'Delete')."
        </td>
        </tr>";      
    }
    ?>
    <script type="text/javascript" src="<?= base_url('asset/js/materialize.min.js') ?>"></script>
</body>
</html>