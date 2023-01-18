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
                            <h5 class="fw-bold mb-0"><img class="me-2" src="{{ url('Icon%20awesome-money-bill-alt.png') }}">Pay-out</h5>
                        </div>
                        <div class="card-body px-0 py-2">
                            <p class="card-text mb-0" style="font-size: 14px;">Approved</p>
                            <h3 class="fw-bold text-success card-text">P 25,200,500.00</h3>
                            <p class="text-end card-text mb-0" style="font-size: 12px;">Pending</p>
                            <h5 class="fw-bold text-end text-danger card-text">P 2,000.00</h5>
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
                <div class="d-flex flex-column flex-lg-row justify-content-lg-between custom-tabs-search pb-2">
                    <ul class="nav nav-tabs text-capitalize fs-5 fw-bolder custom-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active active-pending py-1" role="tab" data-bs-toggle="tab" href="#tab-1">Pending</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active-approved py-1" role="tab" data-bs-toggle="tab" href="#tab-2">Paid</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active-all py-1" role="tab" data-bs-toggle="tab" href="#tab-3">All</a></li>
                    </ul>
                    <form class="mt-3 mt-lg-0"><input class="border-white shadow form-control table-search py-2 rounded-pill" type="search" placeholder="Search"></form>
                </div><!-- End: Tabs -->
                <div class="tab-content pt-4">
                    <div id="tab-1" class="tab-pane active" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-borderless custom-table">
                                <thead>
                                    <tr>
                                        <th>Count</th>
                                        <th>Request Date</th>
                                        <th>Username</th>
                                        <th>Type</th>
                                        <th>Net Amount</th>
                                        <th>MOP</th>
                                        <th>Refferred by</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Date Actioned</th>
                                        <th>Admin Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20</td>
                                        <td>01/16/23</td>
                                        <td>Username</td>
                                        <td>1,000.00</td>
                                        <td>1,000.00</td>
                                        <td>GCash 09171234567 Juan Perdido</td>
                                        <td>Username</td>
                                        <td class="text-danger">Pending</td>
                                        <td class="text-nowrap"><a class="btn btn-success btn-sm text-nowrap me-2" role="button">Approve</a><a class="btn btn-danger btn-sm text-nowrap" role="button">Delete</a></td>
                                        <td>—</td>
                                        <td>—</td>
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
                    <div id="tab-2" class="tab-pane" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-borderless custom-table">
                                <thead>
                                    <tr>
                                        <th>Count</th>
                                        <th>Request Date</th>
                                        <th>Username</th>
                                        <th>Type</th>
                                        <th>Net Amount</th>
                                        <th>MOP</th>
                                        <th>Refferred by</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Date Actioned</th>
                                        <th>Admin Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>18</td>
                                        <td>01/16/23</td>
                                        <td>Username</td>
                                        <td>Daily Spin</td>
                                        <td>Daily Spin</td>
                                        <td>GCash 09171234567 Juan Perdido</td>
                                        <td>Username</td>
                                        <td class="text-success">Paid</td>
                                        <td class="text-nowrap"><a class="btn btn-dark btn-sm text-nowrap me-2" role="button">Approve</a><a class="btn btn-dark btn-sm text-nowrap me-2" role="button">Delete</a></td>
                                        <td>01/01/23</td>
                                        <td class="fw-normal">Adminusername</td>
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
                    <div id="tab-3" class="tab-pane" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-borderless custom-table">
                                <thead>
                                    <tr>
                                        <th>Count</th>
                                        <th>Request Date</th>
                                        <th>Username</th>
                                        <th>Type</th>
                                        <th>Net Amount</th>
                                        <th>MOP</th>
                                        <th>Refferred by</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Date Actioned</th>
                                        <th>Admin Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>18</td>
                                        <td>01/16/23</td>
                                        <td>Username</td>
                                        <td>Daily Spin</td>
                                        <td>950.00</td>
                                        <td>GCash 09171234567 Juan Perdido</td>
                                        <td>Username</td>
                                        <td class="text-danger">Pending</td>
                                        <td class="text-nowrap"><a class="btn btn-success btn-sm text-nowrap me-2" role="button">Approve</a><a class="btn btn-danger btn-sm text-nowrap me-2" role="button">Delete</a></td>
                                        <td>—</td>
                                        <td>—</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>01/16/23</td>
                                        <td>Username</td>
                                        <td>1,000.00</td>
                                        <td>GCash 09171234567 Juan Perdido</td>
                                        <td>GCash 09171234567 Juan Perdido</td>
                                        <td>Username</td>
                                        <td class="text-success">Approved</td>
                                        <td class="text-nowrap"><a class="btn btn-dark btn-sm text-nowrap me-2" role="button">Approve</a><a class="btn btn-dark btn-sm text-nowrap me-2" role="button">Delete</a></td>
                                        <td>01/01/23</td>
                                        <td class="fw-normal">Adminusername</td>
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
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>