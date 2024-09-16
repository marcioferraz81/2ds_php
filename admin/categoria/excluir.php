<?php
$id = filter_input(INPUT_GET, 'id');
include_once '../class/Categoria.php';
$cat = new Categoria();

if ($cat->deletar($id) === 'null') {
    $msg = 'Erro';
} else {
    $msg = 'Excluído';
}
?>
<div class="col-md-12 col-sm-12">
    <div class="alert alert-warning" role="alert">
        <?= $msg ?>
    </div>
</div>
<meta http-equiv="refresh" content="0.5;URL=?p=categoria/listar">