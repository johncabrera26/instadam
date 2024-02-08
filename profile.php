<!DOCTYPE html>
<html>
<head>
    <title>Instadam</title>
    <?php include 'components/head.php'; ?>
    <!-- https://picsum.photos/v2/list -->
    <h1>Profile</h1>

</head>
<body>
    <?php include 'components/navbar.php'; ?>
 
    <div class="container posts">
    <?php
    include 'db/db.php';

    $posts=getUsersPosts(1);

    foreach ($posts as $post) {
    ?>
        <div class="row"  style=" margin-top: 25px ; margin-bottom: 25px;">
            <div class="col-sm-4">
                <img src="<?=$post['image_url']?>" alt="post" class="post" style="width: 100%; ">
            </div>
           
        </div>
    <?php } ?>
</div>
<?php include 'components/scripts.php'; ?>
</body>
</html>


