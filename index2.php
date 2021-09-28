
<?php 
include_once 'includes\topPag.php';
?>

<center><form action='pagina1.php' method='POST'>
<div class="input-field">
<input type='text' name='nome' id='nome'>
<label for="nome">Digite seu nome e vá para página 1</label>
</div>
    <button name='botao' class='btn green'>Ir</button>


 <!-- a href=index.php type='submit' class='btn'>Ir</a> -->
</form></center>

<center><form action='pagina2HERANÇA.php' method='POST'>
<div class="input-field">
<input type='text' name='nome' id='nome'>
<label for="nome">Digite seu nome e vá para a página de Herança</label>
</div>
    <button name='botao' class='btn green'>Ir</button>


 <!-- a href=index.php type='submit' class='btn'>Ir</a> -->
</form></center>
  
<center><form action='pagina3modDeAcesso.php' method='POST'>
<div class="input-field">
<input type='text' name='nome' id='nome'>
<label for="nome">Digite seu nome e vá para a página de Modificadores de Acesso</label>
</div>
    <button name='botao' class='btn green'>Ir</button>


 <!-- a href=index.php type='submit' class='btn'>Ir</a> -->
</form></center>

<center><form action='pagina4Abstraçao.php' method='POST'>
<div class="input-field">
<input type='text' name='nome' id='nome'>
<label for="nome">Digite seu nome e vá para a página de Abstração</label>
</div>
    <button name='botao' class='btn green'>Ir</button>


 <!-- a href=index.php type='submit' class='btn'>Ir</a> -->
</form></center>


 <?php include_once 'includes\lowPag.php'; ?>