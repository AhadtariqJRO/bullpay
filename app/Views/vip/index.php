<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a href="#" class="navbar-brand">Home</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?= site_url('VipController');?>" class="nav-link">VIP</a>
            </li>
            <li>
                <a href="" class="nav-link">Profit</a>
            </li>
            <li>
                <a href="" class="nav-link">My Wallet</a>
            </li>
            <li>
                <a href="<?= site_url('auth/logout'); ?>" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="card text-white bg-primary mb-3" style="max-width: 100%; margin-top: 3%">
        <div class="card-header" style="text-align: center">VIP 1</div>
        <div class="card-body">
            <h5 class="card-title">NGN100</h5>
            <p class="card-text" style="text-align: right">Date:</p>
        </div>
    </div>
    <div class="card text-white bg-secondary mb-3" style="max-width: 100%;">
        <div class="card-header" style="text-align: center">VIP 2</div>
        <div class="card-body">
            <h5 class="card-title">NGN5000</h5>
            <p class="card-text" style="text-align: right">Date:</p>
        </div>
    </div>
    <div class="card text-white bg-success mb-3" style="max-width: 100%;">
        <div class="card-header" style="text-align: center">VIP 3</div>
        <div class="card-body">
            <h5 class="card-title">NGN10000</h5>
            <p class="card-text" style="text-align: right">Date:</p>
        </div>
    </div>
    <div class="card text-white bg-danger mb-3" style=" max-width: 100%;">
        <div class="card-header" style="text-align: center">VIP 4</div>
        <div class="card-body">
            <h5 class="card-title">NGN50000</h5>
            <p class="card-text" style="text-align: right">Date:</p>
        </div>
    </div>
    <div class="card text-white bg-warning mb-3" style="max-width: 100%;">
        <div class="card-header" style="text-align: center">VIP 5</div>
        <div class="card-body">
            <h5 class="card-title">NGN10000</h5>
            <p class="card-text" style="text-align: right">Date:</p>
        </div>
    </div>
    <div class="card text-white bg-info mb-3" style=" max-width: 100%;">
        <div class="card-header" style="text-align: center">VIP 6</div>
        <div class="card-body">
            <h5 class="card-title">NGN500000 per order</h5>
            <p class="card-text" style="text-align: right">Date:</p>
        </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 100%; ">
        <div class="card-header" style="text-align: center">VIP 7</div>
        <div class="card-body">
            <h5 class="card-title">NGN100000 per order</h5>
            <p class="card-text" style="text-align: right">Date:</p>
        </div>
    </div>
</div>
</body>
