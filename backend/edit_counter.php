<?php
session_start();
require_once('header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="example-container">
                <div class="example-content">
                    <div class="card">
                        <?php
                        $edit_id = $_GET['view_counter_id'];
                        $db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
                        $counter_edit_select = "SELECT * FROM counters WHERE counter_id=$edit_id;";
                        $counter_edit_final = mysqli_query($db_connect, $counter_edit_select);
                        $counter_edit_after_assoc = mysqli_fetch_assoc($counter_edit_final);
                        ?>
                        <form action="edit_counter_post.php" method="post">
                            <div class="row mb-3">
                                <div class="card-header">
                                    Edit Counters
                                </div>                                                   
                                <div class="card-body">
                                    <input type="hidden" value="<?= $counter_edit_after_assoc['counter_id']?>" name="edit_counter_id">
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="counter_icon" placeholder="Counter Icon" value="<?= $counter_edit_after_assoc['counter_icon']?>">
                                        <a href="https://fontawesome.com/v4/icons/" target="_blank">Icons Here</a>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <input type="number" class="form-control" name="counter_number" placeholder="Counter Number" value="<?= $counter_edit_after_assoc['counter_number']?>"></input>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="counter_title" placeholder="Your Title" value="<?= $counter_edit_after_assoc['counter_title']?>">
                                    </div>                                                                        
                                    <div class="col-sm-10 mb-3">
                                        <select class="form-control" name="counter_status" value="<?= $counter_edit_after_assoc['counter_status']?>">
                                            <option value="">Choose Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Deactive">Deactive</option>                                           
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="edit_counters_btn">Edit Counters</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>