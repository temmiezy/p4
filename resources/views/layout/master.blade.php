<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/planner/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/planner/justified-nav.css" rel="stylesheet">
    <link href="/css/planner/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>

<div class="container">

    <div class="masthead">
        <h3 class="text-muted">Planner App</h3>

        <nav class="navbar navbar-light bg-faded rounded mb-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-toggleable-md" id="navbarCollapse">
                <ul class="nav navbar-nav text-md-center justify-content-md-between">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create">Add Plan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="myPlans"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My PLans</a>
                        <div class="dropdown-menu" aria-labelledby="myPlans">
                            <a class="dropdown-item" href="/plans">Today's PLans</a>
                            <a class="dropdown-item" href="/plans/week">7 days plans</a>
                            <a class="dropdown-item" href="#">Plans History</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Downloads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    @if(session('alert'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('alert') }}</strong>
                </div>
            </div>
        </div>
    @endif


    @yield('content')

    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; Planner App</p>
    </footer>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="/js/planner/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/planner/ie10-viewport-bug-workaround.js"></script>
@yield('foot')
</body>
</html>
