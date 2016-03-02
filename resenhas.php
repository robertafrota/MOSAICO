<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Resenhas';
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
             <h1 class="GlobalLiteratura">Resenhas</h1>
           <article class="text-center">
            <h2>O escafandro e a borboleta</h2>
               <div class="GlobalRecomendadoLiteratura">
            <img src="imagens/imgLiteratura/escafandroeaborboleta.jpg" alt="#" class="#"/>
            <p>Circumfluus levius declivia tum occiduo adsiduis his deus perveniunt carentem iussit, quisquis lanient primaque terra.</p>
            <p>Piscibus figuras obliquis derecti caelo summaque sive caelumque cepit retinebat nix fidem bracchia haec sole. </p>
             <a href="oescafandro.php" target="_blank" >Continue lendo...</a>
               </div>
        </article>
        <section class="col-md-6 text-center">
            <h2>Um teto todo seu</h2>
            <div class="GlobalRecomendadoLiteratura">
            <img src="imagens/imgLiteratura/umtetotodoseu.jpg" alt="#" class="#"/>
            <p>Posset: abscidit nullo mentes vix animal pro foret concordi certis illis densior animal eodem crescendo caeli opifex.</p>
            <p>Nam tuti fecit erectos onerosior homo utramque pulsant capacius horrifer aer madescit opifex cepit induit coegit coercuit dispositam abscidit divino frigore super titan. </p>
            <a href="umtetotodoseu.php" target="_blank" >Continue lendo...</a>
            </div>
        </section>
        <section class="col-md-6 text-center">
            <h2>Flores raras e banalíssimas</h2>
            <div class="GlobalRecomendadoLiteratura">
            <img src="imagens/imgLiteratura/floresrarasebanalissimas.jpg" alt="#" class="#"/>
            <p>Rerum pinus grandia vix ad diversa densior dei deducite moles aere speciem moderantum nullaque ultima.</p>
            <p>Nullus dextra litem praeter pluviaque locavit inclusum subdita quarum tum recessit humanas igni totidem campoque. </p>
            <a href="floresraras.php" target="_blank">Continue lendo...</a>
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