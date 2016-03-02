<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Lançamentos';
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
           <h1 class="GlobalLiteratura">Lançamentos</h1>
        <article class="col-md-12 text-center">
            <h2 class="GlobalLiteratura text-center h2mat text-left">Troca de Mensagens entre Sherlock e Watson</h2>
                <div class="GlobalRecomendadoLiteratura">
                    <img src="imagens/imgLiteratura/trocademensagens.jpg" alt="#" class="#"/>
                    <p>Pondere rapidisque numero undis radiis homini auroram, corpore fabricator addidit.</p>
             <a href="trocademensagens.php" target="_blank"><p>Continue lendo...</p></a>
                </div>
        </article>
        <section class="col-md-6 text-center h2mat">
            
            <h2 class="GlobalLiteratura">A lança do deserto</h2>
            <div class="GlobalRecomendadoLiteratura">
            <img src="imagens/imgLiteratura/alancadodeserto.jpg" alt="#" class="GlobalImgResponive"/>   
            <p>Caeca pondus terras iussit illic terrenae phoebe densior homo terrae.</p>
            <a href="alancadodeserto.php" target="_blank"><p>Continue lendo...</p></a>
            </div>
        </section>
        <section class="col-md-6 text-center h2mat">
            
            <h2 class="GlobalLiteratura">Parceiros e rivais</h2>
            <div class="GlobalRecomendadoLiteratura">
            <img src="imagens/imgLiteratura/parceiroserivais.jpg" alt="#" class="#"/>
            <p>Prima grandia faecis perveniunt haec liberioris diverso cornua, habentem stagna.</p>
            <a href="parceiroserivais.php" target="_blank" ><p>Continue lendo...</p></a>
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