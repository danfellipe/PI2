<!doctype html>
<html lang="pt-BR">
   <head>
   	  <title>Hippo | Produtos</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
      <script src="https://use.fontawesome.com/1defc9531d.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="../css/estilo.css">
   </head>
   <body>
      <div class="all">
         <aside class="lateral">
            <div class="logo">
               <img src="../img/logo.jpg" alt="Logo Hippo" />
            </div>
            <nav>
               <ul>
                  <li><a href="../menu"><i class="material-icons">dashboard</i>Dashboard</a></li>
                  <li><a href="../cat"><i class="fa fa-folder-o" aria-hidden="true"></i>Categoria</a></li>
                  <li class="ativo"><a href="../product"><i class="fa fa-tag" aria-hidden="true"></i>Produtos</a></li>
                  <li><a href="../user"><i class="fa fa-user-o" aria-hidden="true"></i>Usuários</a></li>
                  <li><a href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Configurações</a></li>
                  <li><a href="../upgrade"><i class="fa fa-money" aria-hidden="true"></i>Upgrade</a></li>
               </ul>
            </nav>
         </aside>
         <div class="conteudo">
            <header>
               <div class="barra-superior">
                  <p><i class="fa fa-tag" aria-hidden="true"></i>Produtos</p>
                  <p>Olá,
                     <?php echo $_SESSION['nomeUsuario'];?> <a href="/pi/?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
                  </p>
               </div>
            </header>
            <section>
               <div class="container">
		<form method="post" enctype="multipart/form-data">
					
			Produto: <input type="text" name="nomeProduto"><br><br>
			Descrição: <input type="text" name="descProduto"><br><br>
			Preço: <input type="text" name="precProduto"><br><br>
			Categoria: 	<select name="idCategoria">
						<?php

						foreach ($categorias as $idCategoria => $categoria) {
							echo "<option value='$idCategoria'> {$categoria['nomeCategoria']} </option> ";
						}

						?>
						</select><br><br>

			Ativo: <input type="checkbox" name="usuarioAtivo"><br><br>
			
			Imagem: <input type="file" name="file_image">

			

		 <input type="submit" value="Gravar" name="btnProd">

		</form>
               </div>
               <!-- FIM CONTAINER SECTION -->
            </section>
         </div>
         <!-- FIM CONTEUDO -->
      </div>
   </body>
</html>