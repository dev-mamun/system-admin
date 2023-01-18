<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shira2 UI - admin 1.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('utilities.css') }}">
    <link rel="stylesheet" href="{{ url('styles.css') }}">
</head>

<body class="h-100" data-body-bg="dark">
    <div class="d-flex flex-column justify-content-center justify-content-xl-end h-100 py-xl-5 py-xl-10">
        <div>
            <div class="container">
                <div class="card mx-auto card-login" style="max-width: 582px;">
                    <div class="card-header border-0">
                        <h6 class="text-uppercase fw-bold text-center text-white mb-0" style="font-size: 14px;line-height: 16px;">ADMIN LOGIN</h6>
                    </div>
                    <div class="card-body pt-3">
                        <form class="text-center mx-auto" method="get" action="/dashboard" style="max-width: 375px;">
                            <!-- Start: Input Username -->
                            <div class="text-center input-icon position-relative mb-2"><img class="position-absolute" src="{{ url('icon%20-%20profile%20blue.png') }}" style="width: 26px;"><input class="form-control" type="text" placeholder="USERNAME"></div><!-- End: Input Username -->
                            <!-- Start: Input Password -->
                            <div class="text-center input-icon position-relative mb-4"><img class="position-absolute" src=" {{ url('icon%20-%20lock.png') }} " style="width: 26px;"><input class="form-control" type="password" name="password" placeholder="PASSWORD"></div><!-- End: Input Password -->
                            <div><button class="btn text-uppercase fw-bold link-light" type="submit">Login</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>