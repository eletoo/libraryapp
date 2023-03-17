<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Virtual Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

    <!--FOGLI DI STILE-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--bootstrap.min.css non ha spazi e indentazioni, il file pesa meno di bootstrap.css ma sono la stessa cosa-->
    <link rel="stylesheet" href="css/style.css" />

    <!--JAVASCRIPT-->
    <script src="js/bootstrap.bundle.min.js"></script>
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
                    <li class="nav-item">
                        <a class="nav-link active current" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            My Library
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="books.html">Books List</a></li>
                            <li><a class="dropdown-item" href="authors.html">Authors List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--HEADER-->
    <div class="container">
        <header id="header-sezione">
            <h1>My Virtual Library</h1>
        </header>
    </div>

    <div class="container">
        <div class="row">
            <!--TEXT-->
            <div class="col-sm-9 col-md-6">
                <p>
                    Manage your virtual library with us!

                <blockquote>
                    <p>The world is a book and those who do not travel read only one page</p>
                    [St. Augustine]
                </blockquote>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget vehicula leo, condimentum facilisis
                eros. Maecenas dapibus elementum congue. Vestibulum vel ultrices leo, quis convallis turpis. Duis vitae
                viverra libero, nec ullamcorper justo. Suspendisse accumsan augue ac erat accumsan, at pharetra ex
                molestie. Aenean convallis interdum tempus. Duis tellus ipsum, vestibulum vel elit in, pellentesque
                dictum nulla. In quis placerat mauris. Mauris ut magna non dolor vestibulum iaculis. Cras cursus ipsum
                ac magna mattis imperdiet sit amet sit amet ligula.
                </p>
            </div>

            <!--IMAGE-->
            <div class="col-sm-3 col-md-6">
                <img src="img/pretty-4-th.jpg" class="img-thumbnail img-responsive">
            </div>
        </div>
    </div>

</body>

</html>