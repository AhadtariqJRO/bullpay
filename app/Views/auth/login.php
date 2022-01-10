<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <style>
            .vh-100 {
                background: url(../bbb.jpg) repeat-y center fixed;
                background-size: cover;
                height: 100vh;
                width: 100%;
                display: inline-table;
                background-position: 100% 100%;
                padding-bottom: 10px;
                font-size: 14px;
                padding: 0px 35px 0;
            }

        </style>
</head>
<!--style="background-image: url('img_abc.jpg');"-->
<!--style="background-color: #508bfc;"-->
<body style="background-color: #508bfc; font-family: Poppins-Medium;" >
<section class="vh-100" style="padding-bottom:4%">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <form action="<?= base_url('auth/check') ?>" method="post" autocomplete="off">
                            <h2 class="mb-5 text-center">BULLPAY GLOBAL <br> Welcome</h2>
                            <hr class="my-4">

                            <h3 class="mb-2">Sign in</h3>
                            <?= csrf_field(); ?>

                            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                            <?php endif ?>
                            <div class="form-group">
<!--                                <label for="">Phone Number</label>-->
                                <input type="number" class="form-control" name="phone_number"
                                       placeholder="Enter your Phone Number" value="<?= set_value('phone_number') ?>" style="border-radius: 2rem; height: 50px">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone_number') : '' ?></span>
                            </div>
                            <div class="form-group">
<!--                                <label for="">Password</label>-->
                                <input type="password" class="form-control" name="password"
                                       placeholder="Enter password" style="border-radius: 2rem; height: 50px">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit" style="border-radius: 2rem; height: 50px; background: #f8bdb9">Sign In</button>
                            </div>
                            <div class="form-group">
                                <a href="<?= site_url('Auth/register'); ?>">
                                    <button class="btn btn-primary btn-block" type="submit" style="border-radius: 2rem; height: 50px; background: #b4ddd7">Sign Up</button>
                                </a>
                            </div>
                            <br>
                            <a href="<?= site_url('Auth/register'); ?>">Have no Account, create new account</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</body>
</html>