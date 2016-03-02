<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Novidades';
    include 'head.php';
    ?>
    
 <!-- Corpo do código -->   
<body>
    
    <!-- Começa o Header  --> 
    <?php
    include 'header.php';
    ?>
  
        <!--Menu de Navegação  --> 
        <?php
        include 'nav.php';
        ?>
           <div class="container">
        
        
        <!--Chamada da matéria principal-->
           <a href="conscnegra.php" target="_blank"><h1 class="conscnegra ">SESC Rio promove shows e apresentações teatrais gratuitas no mês da Consciência Negra</h1></a>
        
         <!--Imagem sobre a matéria principal da página-->
           <img class="imgconscnegra imgresponsive" src="imagens/imgMusica/consiencnegra.jpg" alt="imagem de uma cantora negra">
        
           <!--linha de separação de matérias-->        
          <div class="col-md-12 GlobalRecomendadoMusica consc"></div>
                 
        <!--imagem do One Direction e Justin Bieber-->
           <img class= "imgnovidades imgresponsive" src="imagens/imgMusica/onedirectionjustinbieber.jpg" alt="one direction e justin bieber">
        
         <!--Texto sobre o One Direction e Justin Bieber-->
           <a href="onedirectionjustin.php" target="_blank"><h1 class="hum">One Direction lança o disco "Made in the AM" e Justin Bieber lança o seu disco "Purpose" no mesmo dia</h1></a>
        
         <!--linha de separação de matérias-->    
       <div class="col-md-12 GlobalRecomendadoMusica one"></div>    
        
        <div class="row">         
        <!--imagem dos paralamas-->
           <section class="imgparalamas imgresponsive col-xs-12 col-sm-12 col-md-6"><img src="imagens/imgMusica/paralamasdosucesso.jpg" alt="imagem da banda paralamas do sucesso"></section>
        
        <!--texto sobre os paralamas do sucesso-->              
       <a href="osparalamasdosucesso.php" target="_blank"><h1 class="paralamas"> Os Paralamas do Sucesso comemoram 30 anos de carreira</h1></a>
         </div>
            
         <!--linha de separação de matérias-->    
       <div class="col-md-12 GlobalRecomendadoMusica paralamassucesso"></div>  
        
        <!--imagem da banda aviões do forró-->
            <img class="imgavioes imgresponsive" src="imagens/imgMusica/avioesdoforro.jpg" alt="imagem da banda aviões do forró">     
       
        <!--texto sobre a banda aviões do forró-->
      <a href="avioesdoforro.php" target="_blank"><h1 class="avioes"> Aviões do Forró é uma das atrações do Show da Virada! Banda cearense comanda o especial ao lado de Ivete Sangalo, Luan Santana, Capital Inicial e Sorriso Maroto</h1></a>
        
        </div>
        <!--Area do Footer --> 
         <?php
        include 'footer.php';
        ?>
    
<!-- Scripts --> 
<?php 
include 'scripts.php';
?>
    
</body>
</html>