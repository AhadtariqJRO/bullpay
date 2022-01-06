<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body style="background-color: #508bfc;">
<section class="vh-100">
    <div class="container py-5 h-100" >
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">

                    <form action="<?= base_url('auth/save') ?>" method="post" autocomplete="off">
                        <div class="card-body p-4">
                            <?= csrf_field() ?>
                            <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                            <?php endif  ?>
                            <?php if(!empty(session()->getFlashdata('success'))) : ?>
                                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                            <?php endif  ?>

                            <h2 class="mb-5 text-center">BULLPAY GLOBAL <br> Welcome</h2>
                            <hr class="my-4">
                            <h4>Sign Up</h4><hr>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter full name" value="<?= set_value('name'); ?>">
                                <span class="text-danger"><?= isset($validation)? display_error($validation, 'name') : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="number" class="form-control" name="phone_number" placeholder="Enter your Phone Number" value="<?= set_value('Phone_Number') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone_number') : '' ?></span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-label" for="">status</label><br>
                                <select id="rank" name="status"  style="height: 50px ; width: 100% ; border-radius: 2px">
                                    <option value="" disabled selected hidden>Choose Your Status</option>
                                    <option value="D1">Beginner</option>
                                    <option value="D2">VIP 1</option>
                                    <option value="D3">VIP 2</option>
                                    <option value="D4">VIP 3</option>
                                    <option value="D5">VIP 4</option>
                                    <option value="D6">VIP 5</option>
                                    <option value="D7">VIP 6</option>
                                    <option value="D8">VIP 7</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password"  value="<?= set_value('password'); ?>">
                                <span class="text-danger"><?= isset($validation)? display_error($validation, 'password') : '' ?></span>

                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="<?= set_value('cpassword'); ?>">
                                <span class="text-danger"><?= isset($validation)? display_error($validation, 'cpassword') : '' ?></span>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                            </div>
                            <br>
                            <a href="<?= site_url('auth'); ?>">I already have account, login now</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>