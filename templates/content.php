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
            <div class="table-responsive" id="showUser">
                   
                <hr class="my-4">
            </div>
        </div>
    </div>
</div>

 

