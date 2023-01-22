<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel base crud</title>
        <link rel="stylesheet" href="{{ asset('css.app/css') }}">
        <script src="{{ asset('js/app.js') }}"></script>

        <style>

a {
    text-decoration: none;
}

.bg_container {
    background-color: rgb(29, 29, 29);
  }

  .cards_box {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 2em 0;
    position: relative;
  }
  .card {
    flex: 0 0 calc(100% / 6);
  }

  .card {
    text-align: center;
    padding: .1rem;
    .contents {
      padding: 1em;
      height: 100%;
      h2 {
        color: white;
        font-size: 1.2rem;
      }
      &:hover {
        transform: scale(1.1);
      }
    }
  }

        </style>
    </head>
    <body>
        <main>
            @yield('content')
        </main>
    </body>
</html>
