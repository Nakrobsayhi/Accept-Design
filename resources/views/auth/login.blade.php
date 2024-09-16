<!doctype html>
<html lang="en">

<head>
    <title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .btn-primary.rounded.submit {
            border-radius: 15px;
            /* หรือค่าที่คุณต้องการ */
        }
    </style>
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">

                    <div class="icon d-flex align-items-center justify-content-center">
                        <!-- Logo inserted here -->
                        <img src="{{ asset('assets/images/logopro.png') }}" alt="Logo" style="max-width: 250px;">
                    </div>
                    <h3 class="text-center mb-4">Login</h3>
                    <form method="POST" action="{{ route('login') }}" class="form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" placeholder="Username" required name="username">
                        </div>
                        <div class="form-group d-flex">
                        <input type="password" class="form-control rounded-left" placeholder="Password" required name="password">
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">

                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark rounded submit p-10 px-15" style="border-radius: 40px;" value="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
