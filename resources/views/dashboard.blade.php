<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <title>Shira2 UI - admin 1.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('utilities.css') }}">
    <link rel="stylesheet" href="{{ url('styles.css') }}">
</head>

<body>
    <main class="pt-5 pt-xl-7">
        <div class="container">
        <ul class="nav nav-tabs justify-content-center nav-add-funds ms-md-4 mt-3 mt-md-0">
            <ul class="dashboard-icon-container">
                <li><a href="/pay-ins"><img src="/icon - pullout.png"><span>PAY-INS</span></a></li>
                <li><a href="/pay-outs"><img src="/icon - withdraw.png"><span>PAY-OUTS</span></a></li>
                <li><a href="/members"><img src="/icon - member.png"><span>MEMBERS</span></a></li>
                <li><a href="/spins"><img src="/icon - spin wheel.png"><span>SPINS</span></a></li>
                <li><a href="/bonus-items"><img src="/icon - bonusblue.png"><span>BONUS ITEMS</span></a></li>
                <li><a href="/raffle"><img src="/icon - raffle ticket.png"><span>RAFFLE TICKETS</span></a></li>
                <li><a href="/settings"><img src="/"><span>SETTINGS</span></a></li>
            </ul>
            <div class="row gy-4 gx-xl-5 row-cols-1 row-cols-md-2 row-cols-xl-4"style="margin-top:200px;">
                <div class="col"><a class="border-white card card-home px-3 mb-4 mb-xl-5">
                        <div class="card-header px-0 py-3">
                            <h5 class="fw-bold mb-0"><img class="me-2" src="{{ url('Icon%20awesome-money-bill-alt.png') }}">Fund Check</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            <p class="card-text mb-0" style="font-size:14px;">Cash-on-Hand</p>
                            <h3 class="fw-bold card-text">P 1,730,000.00</h3>
                            <p class="text-end invisible card-text mb-0" style="font-size:12px;">Total Signups</p>
                            <h5 class="fw-bold text-end invisible card-text">3,500</h5>
                        </div>
                    </a></div>
                <div class="col"><a class="border-white card card-home px-3 mb-4 mb-xl-5">
                        <div class="card-header px-0 py-3">
                            <h5 class="fw-bold mb-0"><img class="me-2" src="{{ url('icon%20-%20member.png') }}">Members</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            <p class="card-text mb-0" style="font-size:14px;">Total Approved</p>
                            <h3 class="fw-bold card-text">2,500</h3>
                            <p class="text-end card-text mb-0" style="font-size:12px;">Total Signups</p>
                            <h5 class="fw-bold text-end card-text">3,500</h5>
                        </div>
                    </a></div>
                <div class="col"><a class="border-white card card-home px-3 mb-4 mb-xl-5">
                        <div class="card-header px-0 py-3">
                            <h5 class="fw-bold mb-0"><img class="me-2" src="{{ url('icon%20-%20pullout.png') }}">Pay-In</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            <p class="card-text mb-0" style="font-size:14px;">Payment Confirmed</p>
                            <h3 class="fw-bold card-text">P 2,500,000.00</h3>
                            <p class="text-end card-text mb-0" style="font-size:12px;">Total Signups</p>
                            <h5 class="fw-bold text-end card-text">P 3,500,000.00</h5>
                        </div>
                    </a><a class="border-white card card-home px-3 mb-4 mb-xl-5">
                        <div class="card-header px-0 py-3">
                            <h5 class="fw-bold mb-0"><img class="me-2" src="{{ url('icon%20-%20coin.png') }}">Income from Admin Fees</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            <p class="card-text mb-0" style="font-size:14px;">Total</p>
                            <h3 class="fw-bold card-text">P 1,730,000.00</h3>
                            <p class="text-end card-text mb-0" style="font-size:12px;">From Bonuses</p>
                            <h5 class="fw-bold text-end card-text">P 5,000.00</h5>
                        </div>
                    </a></div>
                <div class="col"><a class="border-white card card-home px-3 mb-4 mb-xl-5">
                        <div class="card-header px-0 py-3">
                            <h5 class="fw-bold mb-0"><img class="me-2" src="{{ url('icon%20-%20spin%20wheel.png') }}">Daily Spins</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            <p class="card-text mb-0" style="font-size:14px;">Total Payables</p>
                            <h3 class="fw-bold card-text">P 5,000,000.00</h3>
                            <p class="text-end card-text mb-0" style="font-size:12px;">Actual Paid</p>
                            <h5 class="fw-bold text-end card-text">P 475,000.00</h5>
                        </div>
                    </a><a class="border-white card card-home px-3 mb-4 mb-xl-5">
                        <div class="card-header px-0 py-3">
                            <h5 class="fw-bold mb-0"><img class="me-2" src="{{ url('icon%20-%20bonuses.png') }}">Bonuses</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            <p class="card-text mb-0" style="font-size:14px;">Total Payables</p>
                            <h3 class="fw-bold card-text">P 1,730,000.00</h3>
                            <p class="text-end card-text mb-0" style="font-size:12px;">Actual Paid</p>
                            <h5 class="fw-bold text-end card-text">3,500</h5>
                        </div>
                    </a><a class="border-white card card-home px-3 mb-4 mb-xl-5">
                        <div class="card-header px-0 py-3">
                            <h5 class="fw-bold mb-0"><img class="me-2" src="{{ url('awesome-money-bill-alt-red.png') }}">Operating Expenses</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            <p class="card-text mb-0" style="font-size:14px;">Total</p>
                            <h3 class="fw-bold card-text">P 1,730,000.00</h3>
                            <p class="text-end invisible card-text mb-0" style="font-size:12px;">Total Signups</p>
                            <h5 class="fw-bold text-end invisible card-text">3,500</h5>
                        </div>
                    </a></div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>