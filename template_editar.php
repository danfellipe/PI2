<?php
include('../db/bancodedados.php');
include('../auth/controle.php');
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Hippo | Produto | Editar</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/1defc9531d.js"></script>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
<div class="all">
    <aside class="lateral">
    <div class="logo">
    <img src="../img/logo.jpg" alt="Logo Hippo"/>
    </div>
        <nav>
            <ul>
                <li ><a href="../menu"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                <li><a href="../cat"><i class="fa fa-folder" aria-hidden="true"></i>Categoria</a></li>
                <li class="ativo"><a href="../product"><i class="fa fa-tag" aria-hidden="true"></i>Produtos</a></li>
                <li><a href="../user"><i class="fa fa-user" aria-hidden="true"></i>Usuários</a></li>
                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a></li>
                <li><a href="../upgrade"><i class="fa fa-money" aria-hidden="true"></i>Upgrade</a></li>
            </ul>
        </nav>
    </aside>
	<div class="conteudo">
        <header>
        	<div class="barra-superior">
            <p><i class="fa fa-tag" aria-hidden="true"></i>Produto</p>
            <p>Olá, <?php echo $_SESSION['nomeUsuario'];?> <a href="/pi/?logout=1">[x] Sair</a></p>
            
            </div>
        </header>
        
        <section>
            <div class="container">
		<?php 
		echo $msg;
		?>
		<form method="post" enctype="multipart/form-data">
		
			
			Nome do produto: <input type="text" 
					name="nomeProduto"
					value="<?php echo $dadosProduto['nomeProduto']; ?>"><br><br>
					
			Descrição: <input type="text" 
					name="descProduto"
					value="<?php echo $dadosProduto['descProduto']; ?>"><br><br>

			Preço: <input type="text" 
					name="precProduto"
					value="<?php echo $dadosProduto['precProduto']; ?>"><br><br>

            Categoria: <select name="idCategoria">
                        <?php

                        foreach ($categorias as $idCategoria => $categoria) {
                            echo "<option value='$idCategoria'> {$categoria['nomeCategoria']} </option> ";
                        }

                        ?>
                        </select><br><br>
           

            Status: <input type="checkbox" name="ativoProduto" 
                    <?php if($dadosProduto['ativoProduto'] == 1) echo "checked"; ?>><br><br>

            Imagem <input type="file" 
                          name="imagem">
			
		
			<input type="hidden" name="idProduto" 
				value="<?php echo $dadosProduto['idProduto']; ?>">		
			<input type="submit" value="Atualizar" name="btnAtualizar">
		</form>
		
	 </div><!-- FIM CONTAINER SECTION -->
        </section>
	</div><!-- FIM CONTEUDO -->
</div>



</body>
</html>