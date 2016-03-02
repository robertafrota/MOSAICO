<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Programação';
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
                <div class="col-md-9">
                <h1>Programação</h1>
                    <h3>Programe em C</h3>
                <img src="imagens/imgTecnologia/programacao.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem com comandos em linguagem C">                      
                <ol>
                   <li> Derecti lanient fuit pronaque dispositam cesserunt mentes invasit alto recepta caelo;
                   <li> Ia pontus tepescunt et diversa deducite aequalis coeptis montibus surgere undae capacius;
                   <li> Aeris ligavit: galeae flamma pondere his habendum coeperunt dissociata aetas horrifer;
                   <li> hanc aliud nullo erant vix pressa quarum caligine terris tegit aeris fulminibus consistere.
                </ol>            
                   <form action="javascript:window.close()" method="">
        <p style="text-align: center;">
    <input alt="Voltar" src="" type="image" /></p>
</form>
                </div>
           
    <section>
    
        <div class="col-md-3">
        <img src="imagens/imgTecnologia/noticia3.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem do browser da Google para iOS">
        <a href="noticia3.php" target=""><h3>Clique e confira</h3></a> 
        </div>
    
    </section>
    
    <section>
    
        <div class="col-md-3">
        <img src="imagens/imgTecnologia/aplicativo2.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem do aplicativo clean master">
        <a href="aplicativo2.php" target=""><h3>Clique e confira</h3></a> 
        </div>
    
    </section>
    <section>
    
        <div class="col-md-3">
        <img src="imagens/imgTecnologia/redes.jpg" class="GlobalImgResponsive GlobalImgN" alt="Imagem de uma configuração do roteador pela interface grafica">
        <a href="redes.php" target=""><h3>Clique e confira</h3></a> 
        </div>
    
    </section>
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