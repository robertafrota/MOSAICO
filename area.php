<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Área Técnica';
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
                <h1 class="GlobalTecnologia">Área Técnica</h1>
                
                    
                    <div class="col-md-9">
                        <h2 class="GlobalRecomendadoTecnologia">Hardware</h2>
                            <a href="hardware.php" target="_blank"><h3>Como formatar o PC</h3></a>
                            <img src="imagens/imgTecnologia/hardware.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem de um computador com ferramentas">                      
                            <p>Foto:</p>
                
                    </div>
                
                
                
                    <div class="col-md-9">
                    <h2 class="GlobalRecomendadoTecnologia">Redes</h2>
                        <a href="redes.php" target="_blank"><h3>Configurando o roteador</h3></a>
                        <img src="imagens/imgTecnologia/redes.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem de uma configuração do roteador pela interface grafica">                      
                        <p>Foto:</p>
                    </div>
                
                    
               
                    <div class="col-md-9">
                        <h2 class="GlobalRecomendadoTecnologia">Programação</h2>
                            <a href="programacao.php" target="_blank"><h3>Programe em C</h3></a>
                            <img src="imagens/imgTecnologia/programacao.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem com comandos em linguagem C">                      
                            <p>Foto:</p>
                        </div>
                
                
                  
            
        
        <div class="row">
        <div class="col-md-3">
        <img src="imagens/imgTecnologia/aplicativo4.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem do aplicativo skype">
        <a href="aplicativo3.php" target="_blank"><h4>Clique e confira</h4></a> 
       
        <img src="imagens/imgTecnologia/noticia3.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem do browser da Google para iOS">
        <a href="noticia3.php" target="_blank"><h4>Clique e confira</h4></a> 
        
        <img src="imagens/imgTecnologia/aplicativo2.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem do aplicativo clean master">
        <a href="aplicativo2.php" target="_blank"><h4>Clique e confira</h4></a> 
        </div>
            </div>
                
                    
                
           
            </article>
        
            
        
       
        </div><!--fim container -->   
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