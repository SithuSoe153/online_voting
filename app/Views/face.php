<?= $this->extend('assets/templates/main.php') ?>

<?= $this->section('content') ?>


<div class="container m-5">

    <div class="row justify-content-center">

        <div class="col-4">
            <div class="container d-flex justify-content-center">

                <div class="card" style="width: 18rem;">
                    <img src="https://imgs.search.brave.com/ZGDDFvrq58hS5YtOUn5Ga4GnXGTdncJuUijJJxR6S18/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9vcGVu/Y2xpcGFydC5vcmcv/aW1hZ2UvMjQwMHB4/L3N2Z190b19wbmcv/MTkyNzU3L3FyLWNv/ZGUtd3d3LmNvbnRh/Y3RyLmNvLnBuZw" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">With QR</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">With QR</a>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-4">
            <div class="container d-flex justify-content-center">

                <div class="card" style="width: 18rem;">
                    <img src="https://imgs.search.brave.com/ZGDDFvrq58hS5YtOUn5Ga4GnXGTdncJuUijJJxR6S18/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9vcGVu/Y2xpcGFydC5vcmcv/aW1hZ2UvMjQwMHB4/L3N2Z190b19wbmcv/MTkyNzU3L3FyLWNv/ZGUtd3d3LmNvbnRh/Y3RyLmNvLnBuZw" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Without QR</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="login" class="btn btn-primary">Without QR</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>




<?= $this->endSection() ?>