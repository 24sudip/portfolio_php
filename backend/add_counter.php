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
                        <form action="add_counter_post.php" method="post">
                            <div class="row mb-3">
                                <div class="card-header">
                                    Add Counters
                                </div>                                                   
                                <div class="card-body">
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="counter_icon" placeholder="Counter Icon">
                                        <a href="https://fontawesome.com/v4/icons/" target="_blank">Icons Here</a>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <input type="number" class="form-control" name="counter_number" placeholder="Counter Number"></input>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="counter_title" placeholder="Your Title">
                                    </div>                                                                        
                                    <div class="col-sm-10 mb-3">
                                        <select class="form-control" name="counter_status">
                                            <option value="">Choose Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Deactive">Deactive</option>                                           
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="add_counters_btn">Add Counters</button>
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