<?php

    $conexion=mysqli_connect('localhost','root','','base');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appweb</title>
    <link rel="stylesheet" href="stylos.css" title="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>
<div class="container text-center mt-4 ">
    <div class="row">
      <div class="opacity-75">
        <div class="card opa">
          <div class="card-body">
            <h5 class="card-title"> <b>TEMPERATURA AMBIENTE </b></h5>
                
          </div>
        </div>
        <table class="mt-4 table table-success table-striped-columns">
          <thead>
            <tr>
            <tr>
        <td> <b>fecha </b> </td>
        <td> <b>humedad </b></td>
        <td> <b>temperatura </b></td>
    </tr>
    <?php
        $sql= "SELECT * from respuestas";
        $result = mysqli_query($conexion,$sql);

        while($mostrar = mysqli_fetch_array($result)){
    
    ?>
          </thead>
          <tbody>
          <tr>
        <td><?php echo $mostrar['fecha'] ?></td>
        <td><?php echo $mostrar['temperatura'] ?></td>
        <td><?php echo $mostrar['humedad'] ?></td>
    </tr>
    <?php
    }
    ?>
          </tbody>   
        </table>
      </div>
      
    </div>
  </div>
    <table>
  

   
    </table>
</body>
</html>