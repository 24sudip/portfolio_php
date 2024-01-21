<?php
session_start();
require_once('header.php');
?>

<div class="container">
    <div class="row">
        <?php
        $db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
        $counter_view_query = "SELECT * FROM counters;";
        $counter_view_final = mysqli_query($db_connect, $counter_view_query);
        $serial = 1;
        ?>
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    View Counter
                </div>
                <div class="card-body">
                    <table class="table table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Counter Icon</th>
                                <th scope="col">Counter Number</th>
                                <th scope="col">Counter Title</th>
                                <th scope="col">Counter Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($counter_view_final as $counter_view_item):?>
                            <tr>
                                <th scope="row"><?= $serial++?></th>
                                <td><?= $counter_view_item['counter_icon']?></td>
                                <td><?= $counter_view_item['counter_number']?></td>
                                <td><?= $counter_view_item['counter_title']?></td>
                                <td><?= $counter_view_item['counter_status']?></td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="delete_counter.php?view_counter_id=<?= $counter_view_item['counter_id']?>">
                                    <i class="material-icons-two-tone">delete</i></a>
                                    <a class="btn btn-info btn-sm" href="edit_counter.php?view_counter_id=<?= $counter_view_item['counter_id']?>"><i class="material-icons-two-tone">edit_note</i></a>
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