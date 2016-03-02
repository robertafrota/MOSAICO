<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='As mais tocadas';
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
        <a href="jorgeemateus.php" target="_blank"><h1 class="jorgeemateus">Jorge e Mateus são os artistas que mais tiveram as suas músicas tocadas no mês de Novembro</h1></a>
        
         <!--imagem sobre a matéria principal da página-->
         <img class="imgjorgeemateus imgresponsive" src="imagens/imgMusica/jorgeemateus.jpg" alt="imagem da dupla jorge e mateus">
        
             <!--linha de separação de matérias-->    
       <div class="col-md-12 GlobalRecomendadoMusica paralamassucesso"></div> 
                 
        <!--imagem da dupla henrique e juliano-->
        <section class="imghenriqueejuliano col-xs-12"><img class="imgresponsive" src="imagens/imgMusica/henriqueejuliano.jpg" alt="imagem da dupla henrique e juliano"></section>
        
        <!--matéria sobre a dupla henrique e juliano-->            
        <a href="henriqueejuliano.php" target="_blank"><h2 class="henriqueejuliano"> Henrique e Juliano ocupam a 2ª posição no ranking do sucesso nacional à gosto do público</h2></a>
         
            <!--linha de separação de matérias-->    
       <div class="col-md-12 GlobalRecomendadoMusica"></div>  
            
        <!--matéria sobre o justin bieber-->
        <a href="justinbieber.php" target="_blank"><h1 class="justinbieber">Justin Bieber lança disco novo e ocupa o 1º lugar no ranking internacional</h1></a>
        
        <!--imagem do Justin Bieber-->
           <img class= "imgjustinbieber imgresponsive" src="imagens/imgMusica/justinbieber.jpg"
         
                
        <!--imagem da cantora adele-->
        <img class="imgadele imgresponsive" src="imagens/imgMusica/adelehello.jpg" alt="imagem da cantora adele">     
       
        <!--texto sobre a cantora adele-->    
      <a href="adele.php" target="_blank"><h2 class="adele col-md-12"> Adele ocupa o 2º lugar no ranking internacional com o hit "Hello"</h2></a>
            
        </div><!--cor de fundo-->
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