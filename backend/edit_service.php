<!--  -->
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
                        $id = $_GET['id'];
                        $db_connect = mysqli_connect('localhost', 'root', '', 'portfolio');
                        $service_edit_select = "SELECT * FROM services WHERE id =$id;";
                        $service_edit_final = mysqli_query($db_connect, $service_edit_select);
                        $edit_after_assoc = mysqli_fetch_assoc($service_edit_final);
                        ?>
                        <form action="edit_service_post.php" method="post">
                            <div class="row mb-3">
                                <div class="card-header">
                                    Edit Services
                                </div>                                                   
                                <div class="card-body">
                                    <input type="hidden" value="<?= $edit_after_assoc['id']?>" name="id">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="service_title" placeholder="Your Title" value="<?= $edit_after_assoc['service_title']?>">
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea rows="10" class="form-control" name="service_description" placeholder="Your Description"><?= $edit_after_assoc['service_description']?></textarea>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="service_icon" placeholder="Service Icon" value="<?= $edit_after_assoc['service_icon']?>">
                                        <a href="https://fontawesome.com/v4/icons/" target="_blank">Icons Here</a>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <select class="form-control" name="service_status" value="<?= $edit_after_assoc['service_status']?>">
                                            <!-- <option value="">Choose Status</option> -->
                                            <option name="Active">Active</option>
                                            <option name="Deactive">Deactive</option>                                           
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="edit_services_btn">Edit Services</button>
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