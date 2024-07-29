<div class="col-md-6 col-sm-12">
    <h3>Dengue API</h3>
</div>

<table class="table mt-4">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Casos</th>
            <th scope="col">Nível</th>
        </tr>
    </thead>
    <tbody>

        <?php
include_once '../class/Dengue.php';
$d = new Dengue();
$listar = $d->listar();

if (!empty($listar)) {
    foreach ($listar as $mostrar) {
        ?>
                <tr>
                    <th scope="row"><?=$mostrar->data_iniSE?></th>
                    <td><?=$mostrar->casos_est?></td>
                    <td><?=$mostrar->nivel?></td>
                </tr>
                <?php
}
}
?>


    </tbody>
</table>
