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
                        <form action="portfolio_post.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="card-header">
                                    Add Portfolio
                                </div>                                                   
                                <div class="card-body">
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="portfolio_category" placeholder="Portfolio Category">
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="portfolio_title" placeholder="Portfolio Title">
                                    </div>                                    
                                    <div class="col-sm-10 mb-3">
                                        <input type="file" class="form-control" name="portfolio_photo">
                                    </div>
                                    <?php if (isset($_SESSION['add_portfolio_success'])) :?>
                                    <div class="col-sm-10 mb-3 alert alert-success">
                                        <?= $_SESSION['add_portfolio_success'];?>
                                    </div>
                                    <?php endif; unset($_SESSION['add_portfolio_success']);?>                                  
                                    <button type="submit" class="btn btn-primary" name="add_portfolio_btn">Add Portfolio</button>
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