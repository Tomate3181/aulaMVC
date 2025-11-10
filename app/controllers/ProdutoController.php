<?php
include_once './config/Database.php';
include_once './app/models/Produto.php';

class ProdutoController {

    public function index() {
        $database = new Database();
        $db = $database->getConnection();
        $produto = new Produto($db);
        $stmt = $produto->listar();
        include './app/views/produto/index.php';
    }

    public function novo() {
        if ($_POST) {
            $database = new Database();
            $db = $database->getConnection();
            $produto = new Produto($db);

            $produto->nome = $_POST['nome'];
            $produto->preco = $_POST['preco'];
            $produto->categoria = $_POST['categoria'];

            if ($produto->criar()) {
                header("Location: index.php");
            }
        }
        include './app/views/produto/novo.php';
    }

    public function editar($id) {
        $database = new Database();
        $db = $database->getConnection();
        $produto = new Produto($db);

        if ($_POST) {
            $produto->id = $id;
            $produto->nome = $_POST['nome'];
            $produto->preco = $_POST['preco'];
            $produto->categoria = $_POST['categoria'];

            if ($produto->atualizar()) {
                header("Location: index.php");
            }
        } else {
            $produto->lerPorId($id);
            include './app/views/produto/editar.php';
        }
    }

    public function excluir($id) {
        $database = new Database();
        $db = $database->getConnection();
        $produto = new Produto($db);
        $produto->id = $id;

        if ($produto->excluir()) {
            header("Location: index.php");
        }
    }
}
?>