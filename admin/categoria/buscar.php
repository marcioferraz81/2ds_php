<div class="col-md-6 col-sm-12">
    <h3>Pesquisar categoria</h3>
</div>

<table class="table mt-4">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
        </tr>
    </thead>
    <tbody>

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
        <tr>
            <th scope="row"><?= $id ?></th>
            <td><?= $nome ?></td>
            <td><?= $descricao ?></td>
        </tr>
    </tbody>
</table>
