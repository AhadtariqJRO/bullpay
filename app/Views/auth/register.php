<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .vh-100 {
            background: url(<?=base_url('bbb.jpg') ?>) repeat-y center fixed;
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
<body style=" font-family: Poppins-Medium;">
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="" style="text-align: center">
<!--                        <img src="--><?//= base_url('bull.jpg') ?><!--" width="150px" height="150px" style="border-radius: 50%">-->
<!--                        <img src="--><?//= base_url('bull1.png') ?><!--" width="150px" height="150px" style="border-radius: 50%">-->
                        <img src="<?= base_url('bull2.jpg') ?>" width="150px" height="150px" style="border-radius: 50%">

                    </div>
                    <form action="<?= base_url('auth/save') ?>" method="post" autocomplete="off">
                        <div class="card-body p-4">
                            <?= csrf_field() ?>
                            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                            <?php endif ?>
                            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                            <?php endif ?>

                            <h2 class="mb-5 text-center">
<!--                                BULLPAY GLOBAL-->
                                <br> Welcome</h2>
                            <hr class="my-4">
                            <h4>Sign Up</h4>
                            <hr>
                            <div class="form-group">
                                <!--                                <label for="">Name</label>-->
                                <input type="text" class="form-control" name="name" placeholder="Enter full name"
                                       value="<?= set_value('name'); ?>" style="border-radius: 2rem; height: 50px">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                            </div>
                            <div class="form-group  row" >
                                <!--                                <label for="">Phone Number</label>-->
                                <div class="col-1" style="">
                                    <select name="" id="" style="border-radius: 2rem; height: 50px">
                                        <option value="+234">+234</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-11" style="">
                                    <input type="number" class="form-control" name="phone_number"
                                           placeholder="Enter your Phone Number" value="<?= set_value('Phone_Number') ?>"
                                           style="border-radius: 2rem; height: 50px">
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone_number') : '' ?></span>
                                </div>

                            </div>
                            <div class="form-group mb-4">
                                <!--                                <label class="form-label" for="">status</label><br>-->
                                <select id="rank" name="status"
                                        style="height: 50px ; width: 100% ; border-radius: 2rem">
                                    <option value="" disabled selected hidden>Choose Your Status</option>
                                    <option value="B">Beginner</option>
                                    <option value="v1">VIP 1</option>
                                    <option value="v2">VIP 2</option>
                                    <option value="v3">VIP 3</option>
                                    <option value="v4">VIP 4</option>
                                    <option value="v5">VIP 5</option>
                                    <option value="v6">VIP 6</option>
                                    <option value="v7">VIP 7</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <!--                                <label for="">Password</label>-->
                                <input type="password" class="form-control" name="password" placeholder="Enter password"
                                       value="<?= set_value('password'); ?>" style="border-radius: 2rem; height: 50px">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>

                            </div>
                            <div class="form-group">
                                <!--                                <label for="">Confirm Password</label>-->
                                <input type="password" class="form-control" name="cpassword"
                                       placeholder="Enter confirm password" value="<?= set_value('cpassword'); ?>"
                                       style="border-radius: 2rem; height: 50px">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit"
                                        style="border-radius: 2rem; height: 50px; background: #b4ddd7 ">Sign Up
                                </button>
                            </div>
                            <br>
                            <a href="<?= site_url('Auth'); ?>">I already have account, login now</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>