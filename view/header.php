<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>

<div class="header d-flex row align-items-center justify-content-between w-100 mx-0"
     style="height: 140px; background-color: <?= VIOLET_DARK ?>">

    <div class="left col-9">

        <div class="logo">
            <img src="resources/image/logo.png" class="img-fluid" style="width: 10%;" alt="logo">
        </div>

        <div class="menu ms-5">

        </div>

    </div>


    <div class="right col-auto text-light me-5 d-flex align-items-center fst-italic ">
        <div class="log">
            <i class="fa-solid fa-right-from-bracket ms-2"></i>
            <a href="/liar/" class="fst-italic text-light text-decoration-none">Quitter la partie</a>
        </div>
    </div>


</div>

<style>
    .log:hover {
        cursor: pointer;
    }
    <?php require_once HEADER_CSS ?>
</style>