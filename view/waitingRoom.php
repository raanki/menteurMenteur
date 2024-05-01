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

    <div class="container  " style="width: 100%; max-width: none;">

        <div class="row d-flex">

            <div class="container-info-game col-8">

                <div class="row rules-option d-flex" style="height: 40%">

                    <!--                    Dashboard Rules-->
                    <div class="rules col-6">

                        <div class="container border-0 rounded mt-5 mx-5 text-light px-5 py-3"
                             style="background-color: <?= BLUE_DARK ?>;">
                            <h3 class="fst-italic ">Les règles :</h3>
                            <ul class="list-unstyled">
                                <li class="text-decoration-none">Chaque joueur reçoit des cartes.</li>
                                <li class="">Le plus du jeux est de ne plus avoir de carte.</li>
                                <li class="">Chaque tour, chaque joueur doit poser au minimum une carte.</li>
                                <li class="">Un joueur peut accuser a tout moment un autre joueur de : MENTEUR !</li>
                            </ul>
                        </div>


                    </div>

                    <!--                    Dashboard Options-->
                    <div class="options col-6">
                        <div class="container border-0 rounded mt-5 mx-5 text-light px-5 py-3 w-70"
                             style="background-color: <?= BLUE_CHILL ?>; width: 80%;">
                            <h3 class="fst-italic ">Les options :</h3>
                            <label for="limit" class="form-label">Limite de joueur : <span id="nbLimitPlayer"></span>
                            </label>
                            <input type="range" class="form-range" min="3" max="7" id="limit-range">
                        </div>

                    </div>

                </div>

                <!--                Dashboard Players-->
                <div class="players-wait ms-5" style="min-height: 400px; width: 70%">
                    <div class="container mt-5 px-5 py-3 rounded" style="background-color: <?= VIOLET_CHILL ?>; ">
                        <h3 class="fst-italic fw-bold text-light">
                            Les joueurs :
                        </h3>
                        <div class="row d-flex mt-5" >

                            <div class="player-join d-grid" style="width: 14%;">
                                <img src="resources/image/gamer.png" class="img-fluid text-center" alt="logo">
                                <span class="name-player-wait text-center text-light fw-bold fst-italic">ranki</span>
                            </div>

                            <div class="player-join d-grid" style="width: 14%;">
                                <img src="resources/image/gamer.png" class="img-fluid text-center" alt="logo">
                                <span class="name-player-wait text-center text-light fw-bold fst-italic">ranki</span>
                            </div>

                            <div class="player-join d-grid" style="width: 14%;">
                                <img src="resources/image/gamer.png" class="img-fluid text-center" alt="logo">
                                <span class="name-player-wait text-center text-light fw-bold fst-italic">ranki</span>
                            </div>

                            <div class="player-join d-grid" style="width: 14%;">
                                <img src="resources/image/gamer.png" class="img-fluid text-center" alt="logo">
                                <span class="name-player-wait text-center text-light fw-bold fst-italic">ranki</span>
                            </div>

                            <div class="player-join d-grid" style="width: 14%;">
                                <img src="resources/image/gamer.png" class="img-fluid text-center" alt="logo">
                                <span class="name-player-wait text-center text-light fw-bold fst-italic">ranki</span>
                            </div>


                        </div>
                    </div>

                    <button type="button" class=" mt-3 btn btn-primary justify-content-end btn-lg" style="">Lancer la partie !</button>

                </div>


            </div>

            <!--            Chat-->
            <div class="chat col-4 px-4" style="min-height: 800px">

                <div class="row">

                    <div class="container border-0 rounded-top mt-5 mx-1 text-light py-3 mb-0"
                         style="background-color: <?= BLUE_DARK ?>;min-height: 550px;">
                        <h3 class="fst-italic ">Chat :</h3>
                        <ul class="list-unstyled">
                            <li class="text-decoration-none"><span class="fw-bold name-chat-user">ranki :</span>
                                 <span class="message">boouh ce jeux est nul</span></li>
                            <li class="text-decoration-none"><span class="fw-bold name-chat-user">luffy :</span>
                                <span class="message">moi j'aime bien pas toi ?</span></li>
                        </ul>
                    </div>

                    <textarea class="rounded-bottom mx-1 py-3 style-input text-light border border-0" aria-label="With textarea"
                              placeholder="Envoyer un message ..."
                              style="background-color: <?= VIOLET_DARK ?>;"></textarea>


                </div>


            </div>

        </div>

    </div>
</div>

<?php require_once FOOTER ?>
</body>
</html>

<style>
    <?php require_once  CSS_PATH . 'waitingRoom.css' ?>
</style>

<script>
    <?php require_once JS_PATH . 'waitingRoom.js' ?>
</script>
