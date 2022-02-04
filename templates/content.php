<?php
   require_once "templates\layouts\modal.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center text-dark font-weight-normal my-2">Vásárlói Adatbázis</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary m-1 float-left" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus fa-lg"></i>&nbsp; &nbsp; Új Vásárló Felvétele</button>
            <a href="#" class="btn btn-primary m-1 float-left"><i class="fas fa-table fa-lg"></i>&nbsp; &nbsp; Napló</a>
        </div>
    </div>
    <hr class="my-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive" id="table">
                <table class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>ID:</th>
                            <th>Név:</th>
                            <th>Email:</th>
                            <th>Jelszó:</th>
                            <th>Adószám:</th>
                            <th>Számlázási Cím:</th>
                            <th>Szállítási Cím:</th>
                            <th>Műveletek:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 1; $i <= 100; $i++) :
                        ?>
                            <tr class="text-center">
                                <td><?= $i ?></td>
                                <td>John Doe<?= $i ?></td>
                                <td>johndoe@gmail.com<?= $i ?></td>
                                <td>password<?= $i ?></td>
                                <td>12345678</td>
                                <td>Kossuth utca 7.</td>
                                <td>Kossuth utca 7.</td>
                                <td>
                                    <a href="#" title="Infó" class="text-primary"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                                    <a href="#" title="Szerkesztés" class="text-success"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                                    <a href="#" title="Törlés" class="text-danger"><i class="fas fa-user-times fa-lg"></i></a>&nbsp;&nbsp;
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
                <hr class="my-4">
            </div>
        </div>
    </div>
</div>

 

