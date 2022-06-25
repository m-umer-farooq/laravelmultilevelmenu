<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multi Level Menu Example In Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://bootstrapthemes.co/demo/resource/bootstrap-4-multi-dropdown-hover-navbar/css/bootstrap-4-hover-navbar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-md navbar-light bg-light btco-hover-menu">
    <a class="navbar-brand" href="#">Laravel Multi Level Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav">

            @foreach($menus as $menu)

            <li class="nav-item">



                @if(count($menu->childs))

                <a class="nav-link {{ count($menu->childs) ? 'dropdown-toggle' :'' }}" href="{{ $menu->url }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $menu->name }}
                 </a>

                    <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                    @if(count($menu->childs))
                        @include('menusub',['childs' => $menu->childs])
                    @endif
                    </ul>

                @else
                <a class="nav-link" href="{{ $menu->url }}" id="navbarDropdownMenuLink">
                    {{ $menu->name }}
                 </a>
                @endif

            </li>
            @endforeach
        </ul>

    </div>
</nav>
</body>
</html>
