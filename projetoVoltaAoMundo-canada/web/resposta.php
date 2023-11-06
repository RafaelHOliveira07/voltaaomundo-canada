<?php
    require_once "../classes/Mensagem.php";
    $mensagem = new Mensagem();
    $lista = $mensagem->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responder</title>
</head>
<body>
    <main class="container-fluid">
        
        <section class="form container">
            
            <div class="content">
                
                <h1 class="section_title"><i class="icon icon-file-text-1"></i> Fale Conosco</h1>
                
                <div class="box-artigo">
                    
                <div class="formularioContato">
                    
                    <form action="../gravar-resposta.php" method="post">
                    <input type="hidden" name="id_mensagem" value="<?php echo $_GET['id_mensagem']; ?>">
                        <label>
                            <span><i class="icon icon-comment"></i> Responder:</span>
                             <textarea name="resposta" rows="3" required=""></textarea> 
                        </label>
                       
                        <input type="hidden" name="acao" value="enviar" />
                      <button class="btn-envia" title="Enviar"><b class="icon icon-paper-plane-o"> Enviar</b>
                        </button></a>
                      
                    </form>
    
                </div><!--Formulario Contato-->
    
    
                </div><!--Box Artigo-->
    
    
            <div class="clear"></div>
            </div>
        </section><!--FECHA BOX HTML-->
    
    
        </section><!--FECHA BOX SEU DOWNLOAD-->
    
    </main>
    
    
</body>
</html>