<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Mulher';
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
            <h1 class="GlobalMulher">Mulher</h1>
            <section class="col-md-12">
             <div class="GlobalRecomendadoMulher">
                <a href="casamento.php"> 
                    <h2 class="GlobalMulher text-center">Casamento</h2>
                    <img src="imagens/imgMulher/buquet_flo.jpg" alt="#" class="center-block"/>
                    <p class="text-center">Vindice sed pondere diu legebantur tellus silvas.</p>
                </a>
            </div>
            </section>
            <section class="col-md-12">
                <a href="moda.php">
                    <h2 class="GlobalMulher text-center">Moda</h2>
                     <div class="GlobalRecomendadoMulher">
                    <img src="imagens/imgMulher/moda_langerie.jpg" alt="#" class="center-block"/>
                    <p class="text-center">Quod adhuc peragebant, mundo recens illi melioris.</p>
                </a>
            </div>
            </section>   
            <section class="col-md-12">
                 <a href="resenhas.php">
                    <h2 class="GlobalMulher text-center">Beleza</h2>
                      <div class="GlobalRecomendadoMulher">
                    <img src="imagens/imgMulher/thais_cacho.jpg" alt="#" class="center-block"/>
                     <p class="text-center">Hunc sic, peragebant neu otia nitidis moderantum. </p>
                </a>
                </div>
                    </section>
            <section class="col-md-12">
                 <a href="resenhas.php">
                    <h2 class="GlobalMulher text-center">Casa & Decoração</h2>
                      <div class="GlobalRecomendadoMulher">
                    <img src="imagens/imgMulher/decorar_quarto.jpg" alt="#" class="center-block"/>
                     <p class="text-center">Hunc sic, peragebant neu otia nitidis moderantum. </p>
                </a>
                </div>
                    </section>
            <section class="col-md-12">
                 <a href="resenhas.php">
                    <h2 class="GlobalMulher text-center">Gastronomia</h2>
                      <div class="GlobalRecomendadoMulher">
                    <img src="imagens/imgMulher/torta_holadesa.jpg" alt="#" class="center-block"/>
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