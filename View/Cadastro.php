<?php

?>
<!doctype html>
<html lang="en">
    <!-- HEAD -->
    <?php include('shared/head.php') ?>
<body>
    <div class="container">
        <!-- HEADER -->
        <?php include('shared/header.php') ?>
        <?php include('shared/modal-add.php')?>
        <?php include('shared/modal-add_dependente.php')?>
        <?php include('shared/modal-delete.php')?>

        <div class="menu-add mt-5">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalScrollable">Novo Cliente</button>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" class="w-50">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Idade</th>
                <th scope="col">Sexo</th>
                <th scope="col">Opções</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Lorem ipsum dollor</td>
                <td>812.123.312-12</td>
                <td>28</td>
                <td>M</td>
                <td>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modalDependente">Novo Dependente</button>
                    <button class="btn btn-outline-secondary" >Editar</button>
                    <button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalDelete">Deletar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Lorem ipsum dollor</td>
                <td>812.123.312-12</td>
                <td>28</td>
                <td>M</td>
                <td>
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modalDependente">Novo Dependente</button>
                    <button class="btn btn-outline-secondary">Editar</button>
                    <button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalDelete">Deletar</button>
                </td>
            </tr>

            </tbody>
        </table>

    </div>

<?php include('shared/scripts.php')?>
</body>
</html>