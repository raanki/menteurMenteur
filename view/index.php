<?php require_once '../config/config.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menteur Menteur</title>


    <link rel="icon" href="resources/image/logo.png" type="image/png">


    <?php require_once BOOTSTRAP_PATH ?>
    <?php require_once JQUERY_PATH ?>
</head>
<body>

<div class="container">

<div class="row mx-auto justify-content-center d-flex row-fluid text-center mt-5">
    <h3 class="text-light">
        Bienvenue sur Menteur Menteur !
        <small class="text-light-emphasis">By ranki</small>
    </h3>
</div>

    <img src="resources/image/logo.png" class="img-fluid ms-auto me-auto justify-content-center d-flex " alt="logo">

    <div class="row menu d-grid gap-2 mx-auto col-6 align-items-center mt-5">

        <div class="row">
            <button class="title btn btn-primary">Créer une partie</button>
        </div>

        <div class="row mt-3">

            <div class="input-group d-flex justify-content-center">

                <div class="code-field d-flex me-2 col-auto mb-2">
                    <span class="input-group-text style-input text-bg-dark border border-0 rounded-end-0 w-100"
                          id="basic-addon3">CODE</span>

                    <input type="text" class="form-control style-input text-bg-dark border border-0 rounded-start-0"
                           id="code-field" aria-describedby="basic-addon3 basic-addon4" placeholder="Ex : AB95 ...">

                </div>

                <div class="join-btn col-auto">
                    <button class="title btn btn-primary">Rejoindre une partie</button>
                </div>

            </div>

        </div>
    </div>
</div>


</body>
</html>

<style>
    <?php require_once  CSS_PATH . 'index.css' ?>
</style>