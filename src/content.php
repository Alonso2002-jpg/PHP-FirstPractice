<div class="bg-secondary-subtle py-3">
    <?php
    global $alumnosApro, $notas, $mediaNotas, $alumnosDesapro;
    require 'listado.php';
    ?>
    <h2 class="text-center">Tabla de Notas</h2>

    <table class="m-auto bg-body-secondary">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Avatar</th>
            <th>Nota</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($notas as $estudiante) : ?>
            <tr>
                <td>
                    <?= $estudiante ->id; ?>
                </td>
                <td>
                    <?= $estudiante->nombre; ?>
                </td>
                <td>
                    <img src="<?= $estudiante->imagen; ?>" class="w-50 mx-auto" alt="Avatar">
                </td>
                <td>
                    <?= $estudiante->nota; ?>
                </td>
                <?= $estudiante->nota >= 5 ? "<td class='bg-success-subtle'>Aprobado</td>" : "<td class='bg-danger-subtle'>Reprobado</td>"?>
            </tr>
        <? endforeach;?>
        </tbody>
    </table>

</div>

<h1 class="text-center my-3 py-3 bg-info-subtle">Promedios</h1>
<div class="container row">
    <div class="col-12 bg-warning-subtle text-center py-3"><p>Notas Medias: <?= $mediaNotas; ?></p></div>
    <div class="col-6 bg-success-subtle py-3"><p>N° Aprobados: <? echo $alumnosApro * 100 / count($notas); ?> %</p></div>
    <div class="col-6 bg-danger-subtle py-3"><p>N° Desaprobados : <? echo $alumnosDesapro * 100 / count($notas); ?> %</p></div>
</div>