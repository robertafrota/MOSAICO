<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Home';
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
               
        <!--Area do Article --> 
        <article>
            <div class="container">
            <h6>Empregos</h6><hr class="linhaHr">
                <h2><b>Últimas Notícias</b></h2>
                <img src="imagens/imgBusiness/1100x250.png" alt="Negocios" />
                <p><h3>Primeiro banco de empregos de economia criativa</h3></p>   
                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum augue mauris, sed rhoncus velit iaculis vitae. Ut placerat, metus nec convallis dapibus, velit tellus scelerisque sapien, nec ullamcorper neque enim nec mauris. Integer ac tortor magna.Integer ac tortor magna. Vestibulum viverra nulla ut massa volutpat hendrerit. Nullam interdum dapibus urna, ac tristique tortor dignissim id.</p>
        <p align="justify">Curabitur dapibus erat est. Vestibulum posuere nunc arcu, ut consequat massa mattis nec. Proin a dignissim diam, ut blandit ante.Vestibulum posuere nunc arcu, ut consequat massa mattis nec. Proin a dignissim diam, ut blandit ante.Vestibulum posuere nunc arcu, ut consequat massa mattis nec. Proin a dignissim diam, ut blandit ante.Vestibulum posuere nunc arcu, ut consequat massa mattis nec.Nullam interdum dapibus urna, ac tristique tortor dignissim id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum augue mauris, sed rhoncus velit iaculis vitae. Ut placerat, metus nec convallis dapibus, velit tellus scelerisque sapien, nec ullamcorper neque enim nec mauris. Integer ac tortor magna. Vestibulum viverra nulla ut massa volutpat hendrerit.Proin a dignissim diam, ut blandit ante.</p>
        <p align="justify">Nullam interdum dapibus urna, ac tristique tortor dignissim id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum augue mauris, sed rhoncus velit iaculis vitae. Ut placerat, metus nec convallis dapibus, velit tellus scelerisque sapien, nec ullamcorper neque enim nec mauris. Integer ac tortor magna. Vestibulum viverra nulla ut massa volutpat hendrerit.Proin a dignissim diam, ut blandit ante. <a href="ultimasnoticias.php" class="link">Continue lendo...</a></p>
         <hr class="divisoria-padrao">
         </div> 
            
        <div class="container"> 
            <h6>Freelancer e Ambiente de Trabalho</h6>
				<div class="row">
					<div class="form-group col-md-offset-1 col-md-4">
				        <img class="imgPropaganda" src="imagens/imgBusiness/imgEmpregoAt.jpg" alt="No trampo" />
                        <p><b> 7 atitudes que queimam o filme no ambiente de trabalho
</b><a href="trampos.php" class="link"> Continue lendo...</a></p>
    
					</div> <!-- Final da Row --> 
                    <div class="form-group col-md-offset-2 col-md-4">
				      <img class="imgPropaganda" src="imagens/imgBusiness/ImgFreelancer.jpg" alt="Freelancer" />
                        <p><b> 20 Oportunidades de emprego para freelancer.</b><a href="freelancer.php" class="link"> Continue lendo...</a></p>
          		
					</div> <!-- Final do Group -->         
                </div>        
        </div><!-- Final do Container -->        
            
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