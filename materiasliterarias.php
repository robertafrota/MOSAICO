<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Matérias Literárias';
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
           <h1 class="GlobalLiteratura">Matérias Literárias</h1>
        <article class="col-md-12 text-center">
            <h2 class="GlobalLiteratura">Retratos do caso Tate-LaBianca na literatura</h2>
            <div class="GlobalRecomendadoLiteratura">
            <p>Aliud terram omnia quanto derecti secrevit aestu illas silvas sponte peregrinum obstabatque tanto quanto timebat conversa nova premuntur fulgura inposuit altae naturae. </p>
            <img src="imagens/imgLiteratura/casotatelabianca.jpg" alt="#" class="#"/>
            <a href="retratosdocaso.php" target="_blank"><p>Continue lendo...</p></a>
            </div>
        </article>
        <section class="col-md-12 text-center">
            <h2 class="GlobalLiteratura">Beauvoir-Sartre: a superação do amor romântico?</h2>
            <div class="GlobalRecomendadoLiteratura">
            <p>Aestu certis frigore formaeque corpora secant temperiemque erat: igni glomeravit peregrinum fabricator sic limitibus retinebat caelum rudis liquidas ora media facientes acervo fabricator mundo aurea tuba flexi semine fontes. </p>
            
            <img src="imagens/imgLiteratura/sartrebeavoir.jpg" alt="#" class="#"/>
            <a href="beauvoirsartre.php" target="_blank"><p>Continue lendo...</p></a>
            </div>
        </section>
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