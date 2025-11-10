<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Adicionar Novo Produto</title>
</head>
<body>
    <div class="terminal-window main-terminal">
        <div class="ascii-align">
            <pre class="ascii-art">
                   -`
                  .o+`
                 `ooo/
                `+oooo:
               `+oooooo:
               -+oooooo+:
             `/:-:++oooo+:                     \e[1;37m               #     \e[1;36m| *
            `/++++/++++oooo:                   \e[1;37m a##e #%" a#"e 6##%  \e[1;36m| | |-^-. |   | \ /
           `/++++++++++++++:                   \e[1;37m.oOo# #   #    #  #  \e[1;36m| | |   | |   |  X
          `/+++ooooooooooooo/`                 \e[1;37m%OoO# #   %#e" #  #  \e[1;36m| | |   | ^._.| / \ \e[0;37mTM
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
        <form action="index.php?acao=novo" method="post">
            <h1>add<span class="cursor"></span></h1>
            Nome: <input type="text" name="nome" required><br>
            Preço: <input type="text" name="preco" required><br>
            Categoria:
            <select name="categoria">
                <option value="Tecnologia">Tecnologia</option>
                <option value="Jardinagem">Jardinagem</option>
                <option value="Casa">Casa</option>
            </select><br>
            <input type="submit" value="Salvar e Sair">
        </form>
        <a href="index.php" class="link-voltar">cd ..</a>
    </div>
</body>
</html>