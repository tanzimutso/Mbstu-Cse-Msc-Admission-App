<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('assets/css/sweetalert2.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="{{ url('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/js/tables.js') }}"></script>

</head>
<body>

<div style="background: #E1F5FE; padding: 10px; margin-top: -8px">
    <p align="center"><img src="{{ url('assets/images/MBSTU.jpg') }}" height="100px" width="100px"/></p>
    <p align="center" style="margin-top: -5px; font-family: serif; font-weight: bold; color: #009688; font-size: 35px;">Department of Computer Science and Engineering</p>
    <p align="center" style="margin-top: -15px;  font-family: serif; font-weight: bold; color: #AD1457; font-size: 25px;">Mawlana Bhashani Science and Technology University, Santosh, Tangail-1902 </p>
    <p align="center" style="margin-top: -15px;  font-family: serif; font-weight: bold; color: #ad3712; font-size: 45px;">Admin Panel</p>
</div>

<nav class="navbar navbar-expand-lg navbar-dark" style="font-weight: bold; padding: 10px; background: #009688">


    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Route::current()->getName() == 'applicant-list' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('applicant-list') }}">Applicant List<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Route::current()->getName() == 'search' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('search') }}" style="margin-left: 8px;" >Search</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

</body>

@yield('script')
</html>