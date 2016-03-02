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
        <div class="container">
            <!--Area do Article --> 
            <article>
                        <div class="col-md-9">
                            <h1 class="GlobalBusiness">O profissional de TI precisa entender de negócio?</h1>
                            <a href="negocios.php"><img src="imagens/imgHome/ti_conhece_negocio.jpg" class="GlobalImgResponsive GlobalImgN" alt="Profissional de Ti com ferramentas"></a>
                            <p>
                                Derecti lanient fuit pronaque dispositam cesserunt mentes invasit alto recepta caelo inmensa plagae mentes coeptis glomeravit traxit montes aer galeae grandia undae obstabatque umentia proximus tuba silvas omnia pontus tepescunt et diversa deducite aequalis coeptis montibus surgere undae capacius aeris ligavit: galeae flamma pondere his habendum coeperunt dissociata aetas horrifer hanc aliud nullo erant vix pressa quarum caligine terris tegit aeris fulminibus consistere caesa ante totidem tellure dei fluminaque tractu locum arce quisquis librata ille zonae caelo cavit ne vultus temperiemque aethere alto aeris caelumque militis utque modo nix obsistitur cuncta congestaque dissociata tollere obliquis.
                                Lanient fuit pronaque dispositam cesserunt mentes invasit alto recepta caelo inmensa plagae mentes coeptis glomeravit traxit montes aer galeae grandia undae obstabatque umentia proximus tuba silvas omnia pontus tepescunt et diversa deducite aequalis coeptis montibus surgere undae capacius aeris ligavit: galeae flamma pondere his habendum coeperunt dissociata aetas horrifer hanc aliud nullo erant vix pressa quarum caligine terris tegit aeris fulminibus consistere caesa ante totidem tellure dei fluminaque tractu locum arce quisquis librata ille zonae caelo cavit ne vultus temperiemque aethere alto aeris caelumque militis utque modo nix obsistitur cuncta congestaque dissociata tollere obliquis
                            </p>
                        </div><!--fim coluna 9 -->
                    <aside>
                        <div class="col-md-3">
                                <h2>Recomendado</h2>
                            <a href="empreendedorismo.php">
                                <div class="GlobalRecomendadoBusiness">
                                    <h4>Guia para orientar empreendedor visa impulsionar o desenvolvimento de negócios de impacto</h4>    
                                </div>
                            </a>
                            <a href="empregos.php">
                                <div class="GlobalRecomendadoBusiness">
                                    <h4>Primeiro banco de empregos de economia criativa</h4>    
                                </div>
                                <h2 class="GlobalLiteratura">Literatura</h2>
                            </a>
                            <a href="trocademensagens.php">
                                <div class="GlobalRecomendadoLiteratura">
                                    <h4>Lançamento do livro Troca de mensagens entre Sherlock e Watson</h4> 
                                    <img src="imagens/imgHome/liberatura_troca_de_mensagens.jpg" class="GlobalImgResponsive GlobalImgN" alt="Capa do livro troca de mensagens">  
                            
                                </div>
                            </a>
                        </div><!--fim coluna 3 --> 
                    </aside>
            </article>
            <section>
                    <div class="row">
                        <div class="col-md-7">
                            <h2 class="GlobalMulher">Mulher</h2>
                            <a href="casadecoracao.php">
                                <div class="GlobalRecomendadoMulher">
                                    <h4>10 Dicas para dar uma cara nova para o seu quarto gastando pouco</h4>
                                    <img src="imagens/imgHome/decorar_quarto.jpg" class="GlobalImgResponsive GlobalImgN" alt="Decoração de móveis antigos com adesivos">  
                                </div>
                            </a>
                        </div><!--fim coluna 7 --> 
                        <a href="#">
                                <div class="col-md-5">
                                    <h2 class="GlobalTecnologia">Tecnologia</h2>
                                <div class="GlobalRecomendadoTecnologia">
                                    <h4>Cloud Computing: O que é o modelo de serviços IaaS?</h4>  
                                </div>
                            </div><!--fim coluna 5 --> 
                        </a>  
                        <a href="onedirectionjustin.php">
                                <div class="col-md-5">
                                    <h2 class="GlobalMusica">Música</h2>
                                <div class="GlobalRecomendadoMusica">
                                    <h4>One Direction lança o disco "Made in the AM" e Justin Bieber lança o seu disco "Purpose" no mesmo dia.</h4>  
                                    <img src="imagens/imgHome/musica.jpg" class="GlobalImgResponsive GlobalImgN" alt="One Direction versus Justin Bieber">  
                                </div>
                            </div><!--fim coluna 5 --> 
                        </a>
                        <a href="receita1.php">
                            <div class="col-md-5">
                                    <h2 class="GlobalMulher">Mulher</h2>
                                <div class="GlobalRecomendadoMulher">
                                    <h4>Aprenda a fazer uma deliciosa receita de Strogonoff do chefe Edu Gomes.</h4>  
                                    <img src="imagens/imgHome/strogonoff_tradicional.jpg" class="GlobalImgResponsive GlobalImgN" alt="Strogonoff de carne">  
                                </div>
                            </div><!--fim coluna 5 --> 
                        </a>
                    </div><!--fim row --> 
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