<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Tecnologia';
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
            <h1 class="GlobalTecnologia">Tecnologia</h1>
            <section class="col-md-12">
             <div class="GlobalRecomendadoTecnologia">
                <a href="aplicativos.php"> 
                    <h2 class="GlobalTecnologia text-center">Aplicativos</h2>
                        <img src="imagens/imgTecnologia/aplicativo1.jpg" alt="#" class="center-block"/>
                    <p class="text-center">Vindice sed pondere diu legebantur tellus silvas.</p>
                </a>
            </div>
            </section>
            <section class="col-md-12">
                     <div class="GlobalRecomendadoTecnologia">
                         <a href="noticias.php">
                         <h2 class="GlobalTecnologia text-center">Notícias</h2>
                    <img src="imagens/imgTecnologia/noticia1.jpg" alt="#" class="center-block"/>
                    <p class="text-center">Quod adhuc peragebant, mundo recens illi melioris.</p>
                </a>
            </div>
            </section>   
            <section class="col-md-12">
                      <div class="GlobalRecomendadoTecnologia">
                        <a href="area.php">
                            <h2 class="GlobalTecnologia text-center">Área Técnica</h2>
                    <img src="imagens/imgTecnologia/hardware.jpg" alt="#" class="center-block"/>
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