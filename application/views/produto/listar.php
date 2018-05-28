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
                <div class="box">
                    <ul>
                        <li>
                            <img src="../../imagens/VOL40.jpg" alt="Smiley face" height="250" width="200">
                        </li>
                    </ul>
                </div> 
                <div class="box">
                    <ul>
                        <li>
                            <img src="../../imagens/VOL40.jpg" alt="Smiley face" height="250" width="200">
                        </li>
                    </ul>
                </div>
                <div class="box">
                    <ul>
                        <li>
                            <img src="../../imagens/VOL40.jpg" alt="Smiley face" height="250" width="200">
                        </li>
                    </ul>
                </div>            
            </div>
        </div>
    </form>
    </div>
</body>
</html>