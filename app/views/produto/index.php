<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Lista de Produtos</title>
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
                            
                            <!-- 
                              MODIFICAÇÃO 1: 
                              - Removemos o 'onclick="..."'
                              - Adicionamos a classe 'link-excluir' para o JavaScript encontrar este link.
                            -->
                            <a href="index.php?acao=excluir&id=<?php echo $row['id']; ?>" class="link-excluir">[excluir]</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- 
      MODIFICAÇÃO 2: 
      - Incluímos a biblioteca SweetAlert2 via CDN.
      - Deve ser colocado no final do body para carregar mais rápido.
    -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- 
      MODIFICAÇÃO 3: 
      - Nosso script customizado para criar o alerta.
    -->
    <script>
        // Pega todos os links que têm a classe 'link-excluir'
        const linksExcluir = document.querySelectorAll('.link-excluir');

        // Para cada link encontrado...
        linksExcluir.forEach(function(link) {
            // Adiciona um "escutador" de evento de clique
            link.addEventListener('click', function(event) {
                // 1. Previne o comportamento padrão do link (que seria navegar para a URL)
                event.preventDefault();

                // 2. Guarda a URL de exclusão que está no href do link
                const deleteUrl = this.href;

                // 3. Exibe o alerta customizado do SweetAlert2
                Swal.fire({
                    title: 'sudo rm -rf produto', // Título no estilo de comando
                    text: "Essa ação não pode ser desfeita. Prosseguir?", // Texto de aviso
                    icon: 'warning',
                    background: '#0c0c0c', // Fundo preto do nosso terminal
                    color: '#c0c0c0',      // Cor do texto
                    showCancelButton: true,
                    confirmButtonColor: '#4e9a06', // Verde para confirmar
                    cancelButtonColor: '#d33',     // Vermelho para cancelar
                    confirmButtonText: '> y (yes)', // Texto do botão de confirmação
                    cancelButtonText: '> n (no)'   // Texto do botão de cancelar
                }).then((result) => {
                    // 4. Se o usuário clicou no botão de confirmação ('y')...
                    if (result.isConfirmed) {
                        // ...redireciona a página para a URL de exclusão.
                        window.location.href = deleteUrl;
                    }
                });
            });
        });
    </script>
</body>
</html>