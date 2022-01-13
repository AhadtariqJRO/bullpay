<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a href="<?= base_url('dashboard/index') ?>" class="navbar-brand">Home</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Mining Pool</a>
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
<div class="col-12">
    <div class="" style="padding-top: 2rem">
        <div class="card-deck">
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="padding-top: 2rem">
        <div class="card-deck">
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="padding-top: 2rem">
        <div class="card-deck">
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:navy; border-radius: 1rem">
                <div class="col-12">
                    <div class="col-12" style="text-align: center ; color: white; margin-top: 1rem">
                        <h6>ANTMINER Z9 MINI 1</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3" style="margin-right: 1rem">
                            <img src="<?= base_url('mining.jpeg') ?>" class="card-img-top" alt="..."
                                 style="width: 100%; height: 100%; border-radius: 1rem">
                        </div>
                        <div class="col-9 row">
                            <div style="color: white" class="col-8 ; ">
                                <div><h6 style="font-size:small">Storage Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Hash Rate</h6></div>
                                <div><h6 style="font-size:small">Productive Cancelation Ratio</h6></div>
                                <div><h6 style="font-size:small">Facility Fee</h6></div>
                            </div>
                            <div style="color: white" class="col-4">
                                <div>75</div>
                                <div>0.0645</div>
                                <div>100%</div>
                                <div>0%</div>
                            </div>
                            <!--                            <table class= "table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Storage Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">75</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Hash Rate</td>-->
                            <!--                                    <td style="text-align: right">0.06</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Productive Cancelation Ratio</td>-->
                            <!--                                    <td style="text-align: right">100%</td>-->
                            <!--                                </tr>-->
                            <!--                                <tr>-->
                            <!--                                    <td>Facility Fee</td>-->
                            <!--                                    <td style="text-align: right">0%</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                    </div>
                    <hr>
                    <div class="col-12" style="color: white">
                        <div class="col-12 row">
                            <div class="col-4">Contract Period (Day)</div>
                            <div class="col-4">Amount (USDT)</div>
                            <div class="col-4"> Estmate</div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">3</div>
                            <div class="col-4">5</div>
                            <div class="col-4">T + 1</div>
                        </div>
                        <!--                        <table class="table-striped" style="color: white">-->
                        <!--                            <thead>-->
                        <!--                            <tr>-->
                        <!--                                <td>Contract Period <br> (Day)</td>-->
                        <!--                                <td>Amount <br> (USDT)</td>-->
                        <!--                                <td>Estimate Delivery Time</td>-->
                        <!--                            </tr>-->
                        <!--                            </thead>-->
                        <!--                            <tbody>-->
                        <!--                            <tr>-->
                        <!--                                <td>3</td>-->
                        <!--                                <td>5</td>-->
                        <!--                                <td>T + 1</td>-->
                        <!--                            </tr>-->
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                    </div>
                    <div class="col-12 row" style="margin-top: 1rem">
                        <div class="col-8" style="color: white">
                            <h6>The Remaining : 43278</h6>
                            <!--                            <table class="table-striped" style="color: white">-->
                            <!--                                <tbody>-->
                            <!--                                <tr>-->
                            <!--                                    <td>The Remaining</td>-->
                            <!--                                    <td>39843</td>-->
                            <!--                                </tr>-->
                            <!--                                </tbody>-->
                            <!--                            </table>-->
                        </div>
                        <div class="col-4" style="text-align: right">
                            <button class="btn btn-primary" style="margin-bottom: 1rem">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--        <div class="container">-->
        <!--            <div class="card text-white bg-primary mb-3" style="max-width: 100%; margin-top: 3%">-->
        <!--                <div class="card-header" style="text-align: center">VIP 1</div>-->
        <!--                <div class="card-body">-->
        <!--                    <h5 class="card-title">NGN100</h5>-->
        <!--                    <p class="card-text" style="text-align: right">Date:</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="card text-white bg-secondary mb-3" style="max-width: 100%;">-->
        <!--                <div class="card-header" style="text-align: center">VIP 2</div>-->
        <!--                <div class="card-body">-->
        <!--                    <h5 class="card-title">NGN5000</h5>-->
        <!--                    <p class="card-text" style="text-align: right">Date:</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="card text-white bg-success mb-3" style="max-width: 100%;">-->
        <!--                <div class="card-header" style="text-align: center">VIP 3</div>-->
        <!--                <div class="card-body">-->
        <!--                    <h5 class="card-title">NGN10000</h5>-->
        <!--                    <p class="card-text" style="text-align: right">Date:</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="card text-white bg-danger mb-3" style=" max-width: 100%;">-->
        <!--                <div class="card-header" style="text-align: center">VIP 4</div>-->
        <!--                <div class="card-body">-->
        <!--                    <h5 class="card-title">NGN50000</h5>-->
        <!--                    <p class="card-text" style="text-align: right">Date:</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="card text-white bg-warning mb-3" style="max-width: 100%;">-->
        <!--                <div class="card-header" style="text-align: center">VIP 5</div>-->
        <!--                <div class="card-body">-->
        <!--                    <h5 class="card-title">NGN10000</h5>-->
        <!--                    <p class="card-text" style="text-align: right">Date:</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="card text-white bg-info mb-3" style=" max-width: 100%;">-->
        <!--                <div class="card-header" style="text-align: center">VIP 6</div>-->
        <!--                <div class="card-body">-->
        <!--                    <h5 class="card-title">NGN500000 per order</h5>-->
        <!--                    <p class="card-text" style="text-align: right">Date:</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="card text-white bg-dark mb-3" style="max-width: 100%; ">-->
        <!--                <div class="card-header" style="text-align: center">VIP 7</div>-->
        <!--                <div class="card-body">-->
        <!--                    <h5 class="card-title">NGN100000 per order</h5>-->
        <!--                    <p class="card-text" style="text-align: right">Date:</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!---->
        <!--        </div>-->
</body>