<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

    <!--FOGLI DI STILE-->
    <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.min.css" />
    <!--bootstrap.min.css non ha spazi e indentazioni, il file pesa meno di bootstrap.css ma sono la stessa cosa-->
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css" />

    <!--JAVASCRIPT-->
    <script src="{{ url('/') }}/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">&nbsp;</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    @yield('left_navbar')
                </ul>
            </div>
        </div>
    </nav>

    <!--HEADER-->
    <div class="container">
        <header id="header-sezione">
            <h1>
                @yield('title')
            </h1>
        </header>
    </div>

    <div class="container">
        @yield('body')
    </div>

</body>

</html>