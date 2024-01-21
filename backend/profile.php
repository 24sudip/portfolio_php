<?php
session_start();
require_once('header.php');
?>

<div class="col-lg-6">
    <div class="example-container">
        <div class="example-content">
            <form action="profile_post.php" method="post">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php if (isset($_SESSION['login_name'])) {echo $_SESSION['login_name'];}?>" name="name">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="name_change">Name Change</button>
            </form>
        </div>
    </div>
</div>
<!-- Profile Photo -->
<div class="col-lg-6">
    <div class="example-container">
        <div class="example-content">
            <form action="profile_post.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <img src="../assets/backend2/profile_photos/<?= $default_profile_photo_after_assoc;?>" style="width: 100px; border-radius: 10px;">
                    <label class="col-sm-2 col-form-label">Photo Upload</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="profile_photo">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="profile_photo_btn">Photo Change</button>
            </form>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>