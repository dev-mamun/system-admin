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
                <div class="order-last order-md-first mt-4 mt-md-0">
                    <div class="card border-white card-home card-nav px-3">
                        <div class="card-header px-0 py-3">
                            <h5 class="fw-bold mb-0"><img class="me-2" src="{{ url('icon%20-%20spin%20wheel.png') }}">Spins</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            <p class="card-text mb-0" style="font-size: 14px;">Total Spins</p>
                            <h3 class="fw-bold text-success card-text">60,605</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="d-flex flex-column align-items-start align-items-md-end">
                        <!-- Start: Navbar Logo --><a class="navbar-brand me-0" href="/dashboard"><span class="d-inline-flex navbar-brand-icon"></span></a><!-- End: Navbar Logo -->
                        <!-- Start: Button Extract --><button class="btn btn-sm fs-5 fw-bold btn-extract mt-4" type="button">Extract.xls</button><!-- End: Button Extract -->
                    </div>
                </div>
            </nav>
            <div class="card-table px-4 py-3">
                <!-- Start: Tabs -->
                <div class="d-lg-flex justify-content-lg-end custom-tabs-search">
                    <form class="mt-3 mt-lg-0 mb-2"><input class="border-white shadow form-control table-search py-2 rounded-pill" type="search" placeholder="Search"></form>
                </div><!-- End: Tabs -->
                <div class="pt-4">
                    <div class="table-responsive">
                        <table class="table table-borderless custom-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Username</th>
                                    <th>Spin Count</th>
                                    <th>Fund Amount</th>
                                    <th>Spin Result</th>
                                    <th>Amount</th>
                                    <th>Bonus Item</th>
                                    <th>Refferred by</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01/15/23</td>
                                    <td>Username</td>
                                    <td>6</td>
                                    <td>Username</td>
                                    <td>1%</td>
                                    <td>5.00</td>
                                    <td>--</td>
                                    <td>Username</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="text-uppercase mt-4">
                        <ul class="justify-content-center pagination custom-pagination mb-0">
                            <li class="d-inline-flex page-item disabled"><a class="page-link" href="#" aria-label="Previous"><svg xmlns="http://www.w3.org/2000/svg" width="5.622" height="9.2" viewbox="0 0 5.622 9.2"><path id="Path_94" data-name="Path 94" d="M4.6,3.52,1.055,0,0,1.051,4.6,5.622,9.2,1.051,8.145,0Z" transform="translate(5.622) rotate(90)" fill="#707070"></path></svg></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="d-inline-flex page-item disabled"><a class="page-link" href="#" aria-label="Next"><svg xmlns="http://www.w3.org/2000/svg" width="5.622" height="9.2" viewbox="0 0 5.622 9.2"><path id="Path_93" data-name="Path 93" d="M4.6,3.52,1.055,0,0,1.051,4.6,5.622,9.2,1.051,8.145,0Z" transform="translate(0 9.2) rotate(-90)" fill="#707070"></path></svg></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>