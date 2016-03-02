<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Agenda de Shows';
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
        
     <a href="showsdempb.php" target="_blank"><h1 class="mpb col-md-12">Centro Cultural recebe grandes nomes da MPB para shows gratuitos</h1></a>
        
         <!--imagem sobre a matéria principal da página-->
        
           <img class="tonytornado imgresponsive" src="imagens/imgMusica/tonytornado.jpg" alt="imagem do cantor tony tornado">
        
        <!--linha de separação de matérias-->  
        <div class="col-md-12 GlobalRecomendadoMusica"></div>  
        
        <!--imagem da cantora elis regina-->
           <img class= "imgelis imgresponsive" src="imagens/imgMusica/elisregina.jpg" alt="imagem da cantora elis regina">
        
         <!--texto sobre a cantora elis regina-->
      <a href="elisregina.php" target="_blank"><h2 class="elis">Show gratuito na Vila Madalena celebra o aniversário de 70 anos de Elis Regina</h2></a>

          <!--linha de separação de matérias-->        
          <div class="col-md-12 GlobalRecomendadoMusica"></div>
        
        <!--imagem do coral da usp-->
           <section class="imgusp imgresponsive"><img src="imagens/imgMusica/coraldausp.jpg" alt="imagem do coral da usp"></section>
        
        <!--texto sobre o coral da usp-->              
       <a href="coralusp.php" target="_blank"><h2 class="usp"> 19 concertos do CORALUSP para assistir de graça em novembro. Os repertórios incluem desde a MPB dos anos 70 até o jazz, passando também pelo rock, ritmos de matriz africana e outros</h2></a>
        
       <!--linha de separação de matérias-->    
       <div class="col-md-12 GlobalRecomendadoMusica"></div>
        
        <!--imagem do paulinho da viola-->
            <img class="imgpaulinho imgresponsive" src="imagens/imgMusica/paulinhodaviola.jpg" alt="imagem do paulinho da viola">     
       
        <!--texto sobre o paulinho da viola-->
      <a href="paulinho.php" target="_blank"><h2 class="paulinho"> Paulinho da Viola faz show em comemoração aos 50 anos de carreira</h2></a>
        
            
       
           </div><!-- final do container -->
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