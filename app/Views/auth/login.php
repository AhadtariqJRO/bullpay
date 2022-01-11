<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--        <style>-->
<!--            vh-100 {-->
<!--                background: url(../bbb.jpg) repeat-y center fixed;-->
<!--                background-size: cover;-->
<!--                height: 100vh;-->
<!--                width: 100%;-->
<!--                display: inline-table;-->
<!--                background-position: 100% 100%;-->
<!--                padding-bottom: 10px;-->
<!--                font-size: 14px;-->
<!--                padding: 0px 35px 0;-->
<!--            }-->
<!--        </style>-->
</head>
<!--style="background-image: url('img_abc.jpg');"-->
<!--style="background-color: #508bfc;"-->
<body id="vh-100" style=" background-color:#03103c ;font-family: Poppins-Medium;" >
<section class="" style=" background-color: #03103c">
<!--    <body id="vh-100" style=" padding-top:4% ; background: url(../bbb.jpg) repeat-y center fixed; background-size: cover; font-family: Poppins-Medium;" >-->
<!--<section class="" style=" background: url(bbb.jpg) repeat-y center fixed; background-size: cover;  ">-->
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow-2-strong" style="border-radius: 1rem; background: #03103c">
                    <div class="card-body p-5">
                        <form action="<?= base_url('auth/check') ?>" method="post" autocomplete="off">
<!--                            <div class="image-bull" style="background:url(../bull.jpeg) repeat-y center fixed; height: 400px; width: 400px">-->
<!--                            </div>-->
                            <div style="text-align: center">
                                <img src="../bull.jpeg"  style=";width: 250px; height:250px;">
                            </div>

                            <h2 class="mb-5 text-center" style="color: white">
<!--                                BULLPAY GLOBAL -->
                                <br> Welcome</h2>
                            <hr class="my-4">

                            <h3 class="mb-2" style="color: white">Sign in</h3>
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
                                <div style="text-align: right">
                                    <a href="#" style="text-align: right">Forget Password</a>
                                </div>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit" style="border-radius: 2rem; height: 50px; background-color: #0066ff">Sign In</button>
                            </div>


<!--                            <div class="form-group">-->
<!--                                <a href="--><?//= site_url('auth/register'); ?><!--">-->
<!--                                    <button class="btn btn-primary btn-block" type="submit" style="border-radius: 2rem; height: 50px; background-color: #0066ff">Sign Up</button>-->
<!--                                </a>-->
<!--                            </div>-->
                            <br>
                            <a href="<?= site_url('auth/register'); ?>">Have no Account, create new account</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</body>
</html>