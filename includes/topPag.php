<!DOCTYPE html>
<html>
    
    <head>
        
        <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset='uft-8'>
    <title>phpOO</title>
    </head>

    <body>

 <?php   
if(isset($_POST['nome'] ) ){
      if($_POST['nome']=="Rômulo" || $_POST['nome'] =="Rômulo Kennedy Nascimento de Medeiros"){
    echo "Usuário:".$_POST['nome']."<div class='col s12 m8 offset-m2 l6 offset-l3'>
    <div class='card-panel grey lighten-5 z-depth-3'>
      <div class='row valign-wrapper'>
        <div class='col s2'>
          <img src='includes/roronoa zoro..jpg' alt='' class='circle responsive-img'> 
        </div>
        <div class='col s10'>
        <span class='purple-text'>
        Bem vindo.
      </span>
        </div>
      </div>
    </div>
  </div> <br>";}
  else{  
        echo "Usuário:".$_POST['nome']."<div class='col s12 m8 offset-m2 l6 offset-l3'>
    <div class='card-panel grey lighten-5 z-depth-3'>
      <div class='row valign-wrapper'>
        <div class='col s2'>
          <img src='includes/download.jpg' alt='' class='circle responsive-img'> 
        </div>
        <div class='col s10'>
        <span class='black-text'>
        Bem vindo Random.
      </span>
        </div>
      </div>
    </div>
  </div> <br>";

  }
}
?>