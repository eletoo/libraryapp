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
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle current" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Library
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item current" href="#">Books List</a></li>
              <li><a class="dropdown-item" href="authors.html">Authors List</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <header id="header-sezione">
      <h1>My Books</h1>
    </header>
  </div>

  <div class="container">
    <div class="row">  
        <div class="col-md-offset-10 col-xs-6">
            <a href="#" class="btn btn-primary">Add Book</a>
        </div>      
    </div>
    <div class="row ">
        <div class="col-md-12">
            <table class="table table-striped table-hover table-responsive">
                <col width="50%"/>
                <col width="30%"/>
                <col width="10%"/>
                <col width="10%"/>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>The Lord of the Rings</td>
                        <td>J.R.R.Tolkien</td>
                        <td><a class="btn btn-primary" href="#">Edit</a></td>
                        <td><a class="btn btn-danger" href="#">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</body>

</html>