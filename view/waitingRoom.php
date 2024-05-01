<?php require_once '../config/config.php' ?>
<!doctype html>
<html lang="fr">
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

<?php require_once HEADER ?>
<div class="container-background" style="min-height: 800px;">

    <div class="container r " style="width: 100%; max-width: none;">

        <div class="row d-flex">

            <div class="container-info-game col-9">

                <div class="row rules-option d-flex h-75">

                    <!--                    Dashboard Rules-->
                    <div class="rules col-6 y">
                        <h2>Les règles :</h2>

                    </div>

                    <!--                    Dashboard Options-->
                    <div class="options col-6 d">
                        <h2>Options :</h2>

                    </div>

                </div>

                <!--                Dashboard Players-->
                <div class="players-wait g" style="min-height: 400px">
                    <h2>Les joueurs :</h2>

                </div>

            </div>

            <!--            Chat-->
            <div class="chat col-3 b" style="min-height: 400px">
                <h2>Chat :</h2>

            </div>

        </div>

    </div>
</div>

</body>
</html>

<style>
    <?php require_once  CSS_PATH . 'waitingRoom.css' ?>
</style>