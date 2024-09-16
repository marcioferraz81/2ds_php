<?php
$id = filter_input(INPUT_GET, 'id');
include_once '../class/Categoria.php';
$cat = new Categoria();

$listar = $cat->buscar($id);
$nome = '';
$descricao = '';

if (is_array($listar)) {
    foreach ($listar as $chave => $valor) {
        if ($chave === 'descricao') {
            $descricao = $valor;
        } elseif ($chave === 'nome') {
            $nome = $valor;
        }
    }
}
?>
<div class="col-md-6 col-sm-12">
    <h3>Salvar</h3>
</div>

<div class="col-md-12 col-sm-12">
    <form method="post" enctype="multipart/form-data" name="frmCadastro" id="frmcadastro">    
        <div class="form-group">
            <label>#</label>
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="txtnome" id="txtnome" placeholder="Informe a categoria" maxlength="50" minlength="3" value="<?= $nome ?>" />
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="txtdescricao" id="txtdescricao" rows="3" placeholder="Informe a descrição"><?= $descricao ?></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" name="btneditar" id="btneditar" value="Editar" />
        </div>    
    </form>
</div>

<?php
if (filter_input(INPUT_POST, 'btneditar')) {
    $nome = filter_input(INPUT_POST, 'txtnome');
    $descricao = filter_input(INPUT_POST, 'txtdescricao');

    $dados = array(
        'nome' => $nome,
        'descricao' => $descricao
    );

    include_once '../class/Categoria.php';
    $cat = new Categoria();

    $cat->setJsonDados($dados);

    $msg = $cat->atualizar($id) === true ? "Erro" : "Dados salvo";

    echo '<div class="col-md-12 col-sm-12">'
    . '<div class="alert alert-primary mt-3" role="alert">'
    . $msg
    . '</div>'
    . '</div>';

    echo '<meta http-equiv="refresh" content="0.5;URL=?p=categoria/listar">';
}


