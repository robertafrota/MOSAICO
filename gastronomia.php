<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Gastronomia';
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
            <!--Area do Article --> 
            <article>
                <div class="row MuEspacinho">
                    <h1 class="GlobalMulher">Gastronomia >></h1>
                    <h2 class="GlobalMulher GlobalRecomendadoMulher">Tradicional Strogonoff de carne</h2>
                        <div class="col-md-8">        
                            <p>   <br> 1 Mentes acervo
                                    <br>    distinxit  derecti his
                                    <br>2/3 duae caelo
                                    <br>2 habitabilis cuncta
                                    <br>Litem congestaque spisso  ponderibus dissociata fidem coeptis moles.
                                </p>
                            <div class="col-md-3 col-md-offset-5">
                                 <a href="receita1.php" class="btn MuBtn btn-default" target="_blank"><h4 class="GlobalMulher MuMedio">Continue lendo...</h4></a>
                              </div>
                        </div><!--fim coluna 7 -->  
                      <div class="col-md-4">
                            <img src="imagens/imgHome/strogonoff_tradicional.jpg" class="GlobalImgResponsive" alt="Tradicional Strogonoff de carne">  
                        </div><!--fim coluna 4 -->
                        
                </div> 
                <div class="row MuEspacinho">
                    <h2 class="GlobalMulher GlobalRecomendadoMulher">Torta Holandesa</h2>
                        <div class="col-md-8">        
                            <p>   <br> 1 Mentes acervo
                                    <br>    distinxit  derecti his
                                    <br>2/3 duae caelo
                                    <br>2 habitabilis cuncta
                                    <br>Litem congestaque spisso  ponderibus dissociata fidem coeptis moles.
                                </p>
                            <div class="col-md-3 col-md-offset-5">
                                 <a href="receita2.php" class="btn MuBtn btn-default" target="_blank"><h4 class="GlobalMulher MuMedio">Continue lendo...</h4></a>
                              </div>
                        </div><!--fim coluna 7 -->  
                      <div class="col-md-4">
                            <img src="imagens/imgMulher/torta_holadesa.jpg" class="GlobalImgResponsive" alt="Torta holandesa">  
                        </div><!--fim coluna 4 -->
    
                </div> 
                
              </div><!--fim container -->
            </article>
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