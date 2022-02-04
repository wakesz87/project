<?php

require_once "db\db.php";

$db = new Database();

if (isset($_POST['action']) && $_POST['action'] == "view") {
    $output = '';
    $data = $db->read();
    if ($db->totalRowCount() > 0) {
        $output .= ' <table class="table table-striped table-sm table-bordered">
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
        <tbody>';

        foreach ($data as $row) {
            $output .= '  <tr class="text-center text-secondary">
            <td>' . $row['id'] . '</td>
            <td>' . $row['full_name'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['pass'] . '</td>
            <td>' . $row['tax_number'] . '</td>
            <td>' . $row['delivery_addr'] . '</td>
            <td>' . $row['billing_addr'] . '</td>
            <td>
            <a href="#" title="Infó" class="text-primary"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
            <a href="#" title="Szerkesztés" class="text-success"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
            <a href="#" title="Törlés" class="text-danger"><i class="fas fa-user-times fa-lg"></i></a>&nbsp;&nbsp;
        </td></tr> ';
        }
        $output .='</tbody></table>';
        echo  $output;
    }else{
        echo '<h3 class="text-center text-secondary mt-5"> Nincs felhasználó az adatbázisban </h3>';
    }
}
