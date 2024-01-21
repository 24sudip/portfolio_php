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
                        <form action="add_service_post.php" method="post">
                            <div class="row mb-3">
                                <div class="card-header">
                                    Add Services
                                </div>                                                   
                                <div class="card-body">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="service_title" placeholder="Your Title">
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea rows="10" class="form-control" name="service_description" placeholder="Your Description"></textarea>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="service_icon" placeholder="Service Icon">
                                        <a href="https://fontawesome.com/v4/icons/" target="_blank">Icons Here</a>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <select class="form-control" name="service_status">
                                            <!-- <option value="">Choose Status</option> -->
                                            <option name="Active">Active</option>
                                            <option name="Deactive">Deactive</option>                                           
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="add_services_btn">Add Services</button>
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