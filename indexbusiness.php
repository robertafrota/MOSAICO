<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Business';
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
            <h1 class="GlobalBusiness"></h1>
            <section class="col-md-12">
             <div class="GlobalRecomendadoBusiness">
                <a href="casamento.php"> 
                    <h2 class="GlobalBusiness text-center">Negócios</h2>
                    <img src="imagens/imgBusiness/imgNegocios.jpg" alt="#" class="center-block"/>
                    <p class="text-center">Vindice sed pondere diu legebantur tellus silvas.</p>
                </a>
            </div>
            </section>
            <section class="col-md-12">
                <a href="moda.php">
                    <h2 class="GlobalBusiness text-center">Inovação</h2>
                     <div class="GlobalRecomendadoBusiness">
                    <img src="imagens/imgBusiness/imBInovacao.jpg" alt="#" class="center-block"/>
                    <p class="text-center">Quod adhuc peragebant, mundo recens illi melioris.</p>
                </a>
            </div>
            </section>   
            <section class="col-md-12">
                 <a href="resenhas.php">
                    <h2 class="GlobalMulher text-center">Emprego</h2>
                      <div class="GlobalRecomendadoBusiness">
                    <img src="imagens/imgBusiness/imgEmpregoAt.jpg" alt="#" class="center-block"/>
                     <p class="text-center">Hunc sic, peragebant neu otia nitidis moderantum. </p>
                </a>
                </div>
                    </section>
            <section class="col-md-12">
                 <a href="resenhas.php">
                    <h2 class="GlobalMulher text-center">Empreendedorismo</h2>
                      <div class="GlobalRecomendadoBusiness">
                    <img src="imagens/imgBusiness/imgEmpOportunidade.JPG" alt="#" class="center-block"/>
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