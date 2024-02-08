<!DOCTYPE html>
<html>
<head>
    <title>Instadam</title>
    <?php include 'components/head.php'; ?>
    <!-- https://picsum.photos/v2/list -->
    
</head>
<body>
    <?php include 'components/navbar.php'; ?>
 
    <div class="container posts" style=" margin-top: 20%;">
        <div class="row">
            <?php
            include 'db/db.php';

            $posts = getPosts();
            foreach ($posts as $post) {
            ?>
                <div class="col-md-4" > <!-- Utiliza col-md-4 para crear un diseño de tres columnas en pantallas medianas -->
                    <div class="card" style="margin-bottom: 25px;">
                        <img src="<?= $post['image_url'] ?>" alt="post" class="card-img-top">
                        <div class="card-body">
                            <!-- Agrega cualquier contenido adicional que desees mostrar en la tarjeta -->
                            <!-- Por ejemplo: -->
                            <h5 class="card-title"><?= $post['title'] ?></h5>
                            <p class="card-text"><?= $post['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <?php include 'components/scripts.php'; ?>
</body>
</html>


