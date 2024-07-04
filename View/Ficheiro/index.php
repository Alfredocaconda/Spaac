<?php
require('fpdf/fpdf.php');
require('fpdi/src/autoload.php');  // Caminho para a biblioteca FPDI

use setasign\Fpdi\Fpdi;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["ficheiro"]["name"]);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $upload_ok = 1;

    if ($file_type != "pdf") {
        echo "Apenas ficheiros PDF são permitidos.";
        $upload_ok = 0;
    }

    if ($_FILES["ficheiro"]["error"] !== UPLOAD_ERR_OK) {
        echo "Houve um erro no upload do ficheiro.";
        $upload_ok = 0;
    }

    if ($_FILES["ficheiro"]["size"] > 5000000) {
        echo "O ficheiro é muito grande.";
        $upload_ok = 0;
    }

    if ($upload_ok == 0) {
        echo "O ficheiro não foi carregado.";
    } else {
        if (move_uploaded_file($_FILES["ficheiro"]["tmp_name"], $target_file)) {
            echo "O ficheiro " . basename($_FILES["ficheiro"]["name"]) . " foi carregado com sucesso.";

            $pdf = new Fpdi();
            $page_count = $pdf->setSourceFile($target_file);

            for ($i = 1; $i <= $page_count; $i++) {
                $tpl_id = $pdf->importPage($i);
                $pdf->AddPage();
                $pdf->useTemplate($tpl_id);
            }

            $pdf->Output();
        } else {
            echo "Houve um erro ao carregar o ficheiro.";
        }
    }
}
?>
