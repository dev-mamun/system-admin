<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shira2 UI - admin 1.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('utilities.css') }}">
    <link rel="stylesheet" href="{{ url('styles.css') }}">
</head>

<body>
    <main class="pt-5 pt-xl-7">
        <div class="container">
            <nav class="d-flex flex-column flex-md-row justify-content-md-between mb-4">
                <div class="order-last order-md-first">
                    <div class="card border-white card-home card-nav px-3">
                        <div class="card-header px-0 py-3">
                            <h5 class="fw-bold mb-0">Settings</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Start: Navbar Logo --><a class="navbar-brand me-0" href="/dashboard"><span class="d-inline-flex navbar-brand-icon"></span></a><!-- End: Navbar Logo -->
                </div>
            </nav>
            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
            <div class="card-table px-1 py-2">
                <h2>Spin Results</h2>
                <!-- Start: Tabs -->
                <div class="tab-content pt-4">
                    <div id="tab-1" class="tab-pane active" role="tabpanel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9" style="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-1">
                                                </div>
                                                <div class="col-md-1">
                                                    <span>Current Count</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <img src="{{ url('1%.png')}}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                <img src="{{ url('2%.png')}}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                <img src="{{ url('3%.png')}}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                <img src="{{ url('4%.png')}}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                <img src="{{ url('5%.png')}}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                <img src="{{ url('10%.png')}}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                <img src="{{ url('bonus item.png')}}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                <img src="{{ url('jackpot.png')}}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                <span>Total</span>
                                                </div>
                                                <div class="col-md-1">
                                                <span>Balance</span>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:10px;">
                                                <div class="col-md-1">
                                                    <img src="{{ url('500.png') }}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1" style="margin-top:10px;">
                                                    <img src="{{ url('1k.png') }}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ url('3k.png') }}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ url('5k.png') }}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ url('10k up.png') }}" width="50" height="50"/>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:20px;">
                                                <div class="col-md-6">
                                                                <nav class="justify-content-md-between mb-4">
                                                            <div class="order-last order-md-first">
                                                                <form method="POST" action="/update_bonuses">
                                                                    {{ @csrf_field() }}
                                                                <div class="card border-white px-3">
                                                                    <div class="card-header px-0 py-3">
                                                                        <h5 class="fw-bold mb-0">Bonuses</h5>
                                                                        <div class="row">
                                                                            <div class="col-sm-2">
                                                                                <span>DRB</span>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="" name="drb" value=""/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-2">
                                                                                <span>Spin Bonus</span>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="" name="spin_bonus" value=""/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body px-0 py-2">
                                                                        <input type="button" value="Edit" class="btn btn-danger"/>
                                                                        <input type="submit" value="Save" class="btn btn-success"/>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>    
                                                        </nav>
                                                        <nav class="justify-content-md-between mb-4">
                                                            <div class="order-last order-md-first">
                                                                <div class="card border-white px-3">
                                                                    <form method="POST" action="/update_payout_request">
                                                                        {{ @csrf_field() }}
                                                                    <div class="card-header px-0 py-3">
                                                                        <h5 class="fw-bold mb-0">Payout Request Minimum</h5>
                                                                        <div class="row">
                                                                            <div class="col-sm-2">
                                                                                <span>Daily Spin</span>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="" name="daily_spin" value="5%"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-2">
                                                                                <span>Bonuses</span>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="" name="bonuses" value="10%"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body px-0 py-2">
                                                                        <input type="button" value="Edit" class="btn btn-danger"/>
                                                                        <input type="submit" value="Save" class="btn btn-success"/>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>    
                                                        </nav>
                                                        <nav class="justify-content-md-between mb-4">
                                                            <div class="order-last order-md-first">
                                                                <div class="card border-white px-3">
                                                                    <div class="card-header px-0 py-3">
                                                                        <h5 class="fw-bold mb-0">Payout Schedule</h5>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <input type="text" value="Monday" name="day-from"/> - <input name="day-to" type="text" value="Sunday"/>
                                                                            </div>
                                                                            <div class="col-sm-12" style="margin-top:10px;">
                                                                                <input type="text" value="08:00"/> - <input type="text" value="21:00"/>
                                                                            </div>
                                                                        </div>  
                                                                    </div>
                                                                    <div class="card-body px-0 py-2">
                                                                        <input type="button" value="Edit" class="btn btn-danger"/>
                                                                        <input type="button" value="Save" class="btn btn-success"/>
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        </nav>
                                                        <nav class="justify-content-md-between mb-4">
                                                            <div class="order-last order-md-first">
                                                                <div class="card border-white px-3">
                                                                    <div class="card-header px-0 py-3">
                                                                        <h5 class="fw-bold mb-0">Mode of Payment</h5>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <input type="text" value="GCASH"/>
                                                                            </div>
                                                                        </div>  
                                                                    </div>
                                                                    <div class="card-body px-0 py-2">
                                                                        <input type="button" value="Edit" class="btn btn-danger"/>
                                                                        <input type="button" value="Save" class="btn btn-success"/>
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        </nav>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-3" style="">
                                        <nav class="justify-content-md-between mb-4">
                                            <div class="order-last order-md-first">
                                                <form method="POST" action="/update_jackpot_prize">
                                                    {{@csrf_field() }}
                                                    <div class="card border-white px-3">
                                                        <div class="card-header px-0 py-3">
                                                            <h5 class="fw-bold mb-0">Jackpot prize</h5>
                                                            <input type="text" name="value" value=""/>
                                                        </div>
                                                        <div class="card-body px-0 py-2">
                                                            <input type="button" value="Edit" class="btn btn-danger"/>
                                                            <input type="submit" value="Save" class="btn btn-success"/>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>    
                                        </nav><br/>
                                        <nav class="justify-content-md-between mb-4">
                                            <div class="order-last order-md-first">
                                                <div class="card border-white px-3">
                                                    <div class="card-header px-0 py-3">
                                                        <h5 class="fw-bold mb-0">Bonus Item</h5>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input type="text" value="Iphone 14" class=""/>
                                                                <input type="files" value="Upload Image" class="btn btn-primary"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 py-2">
                                                        <input type="button" value="Edit" class="btn btn-danger"/>
                                                        <input type="button" value="Save" class="btn btn-success"/>
                                                    </div>
                                                </div>
                                            </div>    
                                        </nav><br/>
                                        <nav class="justify-content-md-between mb-4">
                                            <div class="order-last order-md-first">
                                                <div class="card border-white px-3">
                                                    <form method="POST" action="/update_bonus_item_claim_date">
                                                        {{ @csrf_field() }}
                                                        <div class="card-header px-0 py-3">
                                                            <h5 class="fw-bold mb-0">Bonus Item Claim Date</h5>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <input type="date" name="value" value="" class=""/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body px-0 py-2">
                                                            <input type="button" value="Edit" class="btn btn-danger"/>
                                                            <input type="submit" value="Save" class="btn btn-success"/>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>    
                                        </nav><br/>

                                        <nav class="justify-content-md-between mb-4">
                                            <div class="order-last order-md-first">
                                                <div class="card border-white px-3">
                                                    <form method="POST" action="/update_raffle_winner">
                                                        {{ @csrf_field() }}
                                                            <div class="card-header px-0 py-3">
                                                                <h5 class="fw-bold mb-0">Raffle Winner</h5>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="value" value="" class=""/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body px-0 py-2">
                                                                <input type="button" value="Edit" class="btn btn-danger"/>
                                                                <input type="submit" value="Save" class="btn btn-success"/>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>    
                                        </nav><br/>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>