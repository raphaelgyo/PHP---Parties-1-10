<!-- page qui apparait une fois le form complété et validé OK -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Bonjour <?= $_COOKIE['firstname'] ?></li>
        <li class="breadcrumb-item"><a href="#">NOS CELIBATAIRES</a></li>
        <li class="breadcrumb-item"><a href="#">MES INFORMATIONS</a></li>
    </ol>
</nav>


<div class="container-fluid">
    <div class="row my-3">
        <div class="col-12 col-sm-6 my-3 my-sm-0">
            <div class="card">
                <div class="position-relative">
                    <img src="https://pickaface.net/gallery/avatar/gs315535348ce076c6.png" class="card-img-top" alt="">
                    <div class="card-img-overlay d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-light rounded-circle" data-toggle="button" aria-pressed="false" autocomplete="off"><i class="far fa-heart"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-dark"><small>Titre card</small></h5>
                    <p class="card-text"><strong class="text-danger">Contacter</strong></p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 my-3 my-sm-0">
            <div class="card">
                <div class="position-relative">
                    <img src="https://pickaface.net/gallery/avatar/judycsmosh521a551b604bf.png" class="card-img-top" alt="">
                    <div class="card-img-overlay d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-light rounded-circle" data-toggle="button" aria-pressed="false" autocomplete="off"><i class="far fa-heart"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-dark"><small>Titre card</small></h5>
                    <p class="card-text"><strong class="text-danger">Contacter</strong></p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 my-3 my-sm-0">

        </div>
    </div>
</div>