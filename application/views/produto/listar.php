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
    <form id="lista" method="get">
    <div class="conteudo">
        <div class="dentroconteudo">
            <div class="cabecalho"></div>
            <nav class="menu">			
                <ul>
                    <li><a href="#" title="Home"></a></li>
                    <li><a href="#" title="Home">Home</a></li>
                    <li><a href="#" title="Titulos">Titulos</a></li>
                    <li><a href="#" title="Usados">Usados</a></li>
                    <li><a href="#" title="Venda">Venda</a></li>
                    <li><a href="#" title="Troca">Troca</a></li>
                </ul>
            </nav>
                <div class="container"> 
                    <div class="box">
                        <ul>
                            <li>
                                <img src="../../imagens/VOL40.jpg" alt="Smiley face">
                            </li>
                            <li>
                            <div class="texto-item">
                                <a href=""> 
                                    Teste de texto
                                </a>
                            </div>
                            <div class="texto-item">
                                   R$ 99,99
                            </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box">
                        <ul>
                            <li>
                                <img src="../../imagens/VOL40.jpg" alt="Smiley face">
                            </li>
                            <li>
                            <div class="texto-item">
                                <a href=""> 
                                    Teste de texto
                                </a>
                            </div>
                            <div class="texto-item">
                                   R$ 99,99
                            </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box">
                        <ul>
                            <li>
                                <img src="../../imagens/VOL40.jpg" alt="Smiley face">
                            </li>
                            <li>
                            <div class="texto-item">
                                <a href=""> 
                                    Teste de texto
                                </a>
                            </div>
                            <div class="texto-item">
                                   R$ 99,99
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>                           
            </div>
            <div class="rodape"></div>
        </div>
    </form>
    </div>
</body>
</html>