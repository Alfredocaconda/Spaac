<?php
include "../Controller/arquivoController.php";

if (isset($_GET['id'])) {
    $controller = new ArquivoController();
    $controller->arquivo($_GET['id']);
} else {
    echo "ID do documento não fornecido.";
}
