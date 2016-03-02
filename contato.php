<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->    
    <?php
    $title='Contato';
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
                    <form class="form-horizontal">
                        <div class="row MuEspacinho">
                            <h1>Preencha os campos abaixo e deixe sua mensagem para nós</h1>
                        </div>
                        <div class="row MuEspacinho">
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-8">
                                    <input type="name" class="form-control" placeholder="Nome">
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Telefone</label>
                                <div class="col-sm-8">
                                    <input type="tel" class="form-control" placeholder="Telefone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Deixe sua mensagem</label>    
                                <div class="col-sm-8">
                                    <textarea class="form-control" placeholder="Deixe sua mensagem" rows="8"></textarea>
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="col-md-12">
                        <div class="col-md-offset-6 row MuEspacinho">
                            <h1>Nosso contato</h1>
                            <h2 class="control-label">Mosaico - SA Entretenimento</h2>
                            <h4 class="control-label">Endereço: Rua Madrugada, 530 - São Roque - SP</h4>
                            <h4 class="control-label">Telefone: 055 11 4999-3333</h4>
                        </div>
                    </div>
                </div><!--fim container -->
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