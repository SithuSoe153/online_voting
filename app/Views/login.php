<?= $this->extend('assets/templates/main.php') ?>

<?= $this->section('content') ?>



<!-- Section: Design Block -->
<!-- <div class="background-radial-gradient overflow-hidden" style="height:100vh;"> -->
<section class="background-radial-gradient overflow-hidden">

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    The best offer <br />
                    <span style="color: hsl(218, 81%, 75%)">for your business</span>
                </h1>
                <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Temporibus, expedita iusto veniam atque, magni tempora mollitia
                    dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                    ab ipsum nisi dolorem modi. Quos?
                </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative px-5">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass px-3">
                    <div class="card-body px-4 py-4 px-md-5">
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <h1 class="my-4 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                    <span style="color: hsl(218, 81%, 75%)">Login</span>
                                </h1>
                            </div>


                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" placeholder="Email" />

                            </div>


                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" placeholder="Password" />
                            </div>

                            <div class="d-grid gap-2">
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </button>

                                <a href="register" class="link-primary text-center">Don't have an account ?</a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- </div> -->
<!-- Section: Design Block -->


<?= $this->endSection() ?>