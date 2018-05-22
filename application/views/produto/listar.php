<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Manga Base - Inicio</title>
    <link rel="stylesheet" type="text/css" href="../../css/base-style.css?v=<?php echo time(); ?>">
    <script type="text/javascript">
      function myfunction(id){

           if(id == "alterar") 
           {
            document.getElementById("lista").action = "carregarProduto";
            document.getElementById("lista").submit();
           }else{
            document.getElementById("lista").action = "deletar_produto"; 
            document.getElementById("lista").submit();
           }
       }
    </script>
</head>
<body class="fundo">
    
    <div class="cabecalho"></div>
    <form id="lista" method="get">
    <div class="conteudo">
        <div class="dentroconteudo">
            <div class="container">
                <?php foreach ($resultado as $result): ?>
                <div class="box">
                    <p><?php echo $result->descricao; ?></p>
                    <p><?php echo $result->valor; ?></p>
  
                    <button name="GetProd" id="alterar" type="submit" name="alterar" onClick="myfunction(this.id)" value="<?php echo $result->id_produto; ?>"​​​​​>Alterar</button>
                                 
                    <button name="Getdelete" id="excluir" type="submit" name="excluir" onClick="myfunction(this.id)" value="<?php echo $result->id_produto; ?>"​​​​​>Excluir</button>
                </div>            
            <?php endforeach; ?>
            </div>
        </div>
    </form>
    </div>
</body>
</html>