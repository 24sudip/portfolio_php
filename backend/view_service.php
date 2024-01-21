<?php
session_start();
require_once('header.php');
?>

<div class="container">
    <div class="row">
        <?php
        $db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
        $service_view_query = "SELECT * FROM services;";
        $view_final_query = mysqli_query($db_connect, $service_view_query);
        $serial = 1;
        ?>
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    View Service
                </div>
                <div class="card-body">
                    <table class="table table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Service Title</th>
                                <th scope="col">Service Description</th>
                                <th scope="col">Service Icon</th>
                                <th scope="col">Service Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($view_final_query as $service_items):?>
                            <tr>
                                <th scope="row"><?= $serial++?></th>
                                <td><?= $service_items['service_title']?></td>
                                <td><?= $service_items['service_description']?></td>
                                <td><?= $service_items['service_icon']?></td>
                                <td><?= $service_items['service_status']?></td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="delete_service.php?id=<?= $service_items['id']?>">
                                    <i class="material-icons-two-tone">delete</i></a>
                                    <a class="btn btn-info btn-sm" href="edit_service.php?id=<?= $service_items['id']?>"><i class="material-icons-two-tone">edit_note</i></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>           
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>