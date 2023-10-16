<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AppName - @yield('title')</title>
    <style>.container .sidebar ul.nav h4{
            color: #c1c1c1;
            text-align: center;
            font-size: 18px;
            font-weight: 300;
        }

        h2.accordion-header{
            width: 100%;
        }

        .accordion-header button.accordion-button span{
            display: inline-block;
            margin-right: 22px;
        }

        .accordion-header button.accordion-button span i{
            display: inline-block;
            margin-right: 3px;
            color: #198754;
        }

        .accordion-button::before {
            display: none;
        }
        .accordion-button::before {
            content: "\f054";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-right: 1rem;
        }
        .accordion-button.collapsed::before {
            content: "\f053";
        }</style>
    <script src="https://kit.fontawesome.com/6e56039614.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="sidebar col-md-3">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="min-height: 900px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4">Mini CRM</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                            <a href="/" class="nav-link text-white  @php is_active('/') @endphp">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="/"></use></svg>
                                Home
                            </a>

                    </li>
                    <li>
                            <a href="/users" class="nav-link text-white @php is_active('/users') @endphp">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="/users"></use></svg>
                                Users
                            </a>
                    </li>
                    <li>
                            <a href="/roles" class="nav-link text-white @php is_active('/roles') @endphp" >
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="/roles"></use></svg>
                                Roles
                            </a>
                    </li>
                    <li>
                        <a href="/pages" class="nav-link text-white @php is_active('/pages') @endphp" >
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="/pages"></use></svg>
                            Pages
                        </a>
                    </li>
                    <hr>
                    <h5>To Do List</h5>
                    <li>
                        <a href="/todo/category" class="nav-link text-white @php is_active('/todo/category') @endphp" >
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="/todo/category"></use></svg>
                            Category
                        </a>
                    </li>
                    <li>
                        <a href="/todo/tasks" class="nav-link text-white @php is_active('/todo/tasks') @endphp" >
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="/todo/tasks"></use></svg>
                            Tasks
                        </a>
                    </li>

                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/login">Sign in</a></li>
                        <li><a class="dropdown-item" href="/logout">Sign out</a></li>
                    </ul>
                </div>
        </div>
    </div>
    <div class="article col-md-9">
        <div class="container mt-4">
            @yield('content')
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>