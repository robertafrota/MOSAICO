<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Literatura';
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
            <h1 class="GlobalLiteratura">Literatura</h1>
            <section class="col-md-12">
             <div class="GlobalRecomendadoLiteratura">
                <a href="lancamentos.php"> 
                    <h2 class="GlobalLiteratura text-center">Lançamentos</h2>
                    <img src="imagens/imgLiteratura/trocademensagens.jpg" alt="#" class="center-block"/>
                    <p class="text-center">Vindice sed pondere diu legebantur tellus silvas.</p>
                </a>
            </div>
            </section>
            <section class="col-md-12">
                <a href="materiasliterarias.php">
                    <h2 class="GlobalLiteratura text-center">Matérias Literárias</h2>
                     <div class="GlobalRecomendadoLiteratura">
                    <img src="imagens/imgLiteratura/casotatelabianca.jpg" alt="#" class="center-block"/>
                    <p class="text-center">Quod adhuc peragebant, mundo recens illi melioris.</p>
                </a>
            </div>
            </section>   
            <section class="col-md-12">
                 <a href="resenhas.php">
                    <h2 class="GlobalLiteratura text-center">Resenhas</h2>
                      <div class="GlobalRecomendadoLiteratura">
                    <img src="imagens/imgLiteratura/escafandroeaborboleta.jpg" alt="#" class="center-block"/>
                     <p class="text-center">Hunc sic, peragebant neu otia nitidis moderantum. </p>
                </a>
                </div>
                    </section>
                                </div>
    
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