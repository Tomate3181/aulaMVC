<?php
include_once './app/controllers/ProdutoController.php';

$controller = new ProdutoController();

$acao = isset($_GET['acao']) ? $_GET['acao'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($acao) {
    case 'index':
        $controller->index();
        break;
    case 'novo':
        $controller->novo();
        break;
    case 'editar':
        $controller->editar($id);
        break;
    case 'excluir':
        $controller->excluir($id);
        break;
    default:
        $controller->index();
        break;
}
?>