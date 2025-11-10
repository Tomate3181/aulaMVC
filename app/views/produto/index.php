<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Lista de Produtos</title>
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
        
        <h1>ls produtos<span class="cursor"></span></h1>
        <a href="index.php?acao=novo" class="button-add">./add_produto.sh</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preco</th>
                    <th>Categoria</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td>R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td>
                            <a href="index.php?acao=editar&id=<?php echo $row['id']; ?>">[editar]</a>
                            <a href="index.php?acao=excluir&id=<?php echo $row['id']; ?>" onclick="return confirm('rm -rf produto/<?php echo $row['id']; ?> ?')">[excluir]</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>