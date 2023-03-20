<?= $this->extend('assets/templates/main.php') ?>

<?= $this->section('content') ?>



<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden py-5">

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0 d-none d-sm-none d-lg-block" style="z-index: 10">
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

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-4 px-md-5">

                        <form action="register" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <h1 class="my-4 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                    <span style="color: hsl(218, 81%, 75%)">Register</span>
                                </h1>
                            </div>

                            <!-- from start -->

                            <div class="row">
                                <div class="form-outline mb-4 col-12 col-sm-6">
                                    <input type="text" class="form-control" name="firstname" placeholder="First name" value="<?= set_value('firstname') ?>">
                                </div>

                                <div class="form-outline mb-4 col-12 col-sm-6">
                                    <input type="text" class="form-control" name="lastname" placeholder="Last name" value="<?= set_value('lastname') ?>">
                                </div>

                                <div class="form-outline mb-4 col-12">
                                    <input type="email" class="form-control" name="email" placeholder="Example123@gmail.com" value="<?= set_value('email') ?>">
                                </div>

                                <div class="form-outline mb-4 col-12 col-sm-6">
                                    <input type="text" class="form-control" name="password" placeholder="Password" value="<?= set_value('password') ?>">
                                </div>

                                <div class="form-outline mb-4 col-12 col-sm-6">
                                    <input type="text" class="form-control" name="password_conform" placeholder="Conform password">
                                </div>

                            </div>

                            <!-- from end -->

                            <!-- error -->

                            <?php if (isset($validation)) : ?>

                                <div class="col-12">

                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>

                                </div>

                            <?php endif ?>

                            <!-- error -->

                            <!-- Submit button -->

                            <div class="d-grid gap-2">
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </button>

                                <a href="login" class="link-primary text-center">Already have an account? Login</a>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->


<?= $this->endSection() ?>