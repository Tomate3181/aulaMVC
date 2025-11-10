<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Editar Produto</title>
</head>
<body>
    <div class="terminal-window">
        <div class="ascii-align">
<pre class="ascii-art">
                   -`
                  .o+`
                 `ooo/
                `+oooo:
               `+oooooo:
               -+oooooo+:
             `/:-:++oooo+:
            `/++++/++++oooo:
           `/++++++++++++++:
          `/+++ooooooooooooo/`
         ./ooosssso++osssssso+`
        .oossssso-````/ossssss+`
       -osssssso.      :sooooso-
      :osssssss/        ossssooo:
     /ossssssss/        +ssssooo/-
   `/ossssso+/:-        -:/+osssso+-
  `+sso+:-`                 `.-/+oso:
 `++:.                           `-/+/
 .`                                 `/
</pre>

        </div>
        <form action="index.php?acao=editar&id=<?php echo $id; ?>" method="post">
            <h1>edit<span class="cursor"></span></h1>
            Nome: <input type="text" name="nome" value="<?php echo $produto->nome; ?>" required><br>
            Preço: <input type="text" name="preco" value="<?php echo $produto->preco; ?>" required><br>
            Categoria:
            <select name="categoria">
                <option value="Tecnologia" <?php echo ($produto->categoria == 'Tecnologia') ? 'selected' : ''; ?>>Tecnologia</option>
                <option value="Jardinagem" <?php echo ($produto->categoria == 'Jardinagem') ? 'selected' : ''; ?>>Jardinagem</option>
                <option value="Casa" <?php echo ($produto->categoria == 'Casa') ? 'selected' : ''; ?>>Casa</option>
            </select><br>
            <input type="submit" value="Salvar e Sair">
        </form>
        <a href="index.php" class="link-voltar">cd ..</a>
    </div>
</body>
</html>