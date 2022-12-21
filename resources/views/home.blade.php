<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Hello Laravel</title>
</head>

<body>

    <div class="container">

        <h1>Home page</h1>
        <h2>{{ $saluto }} {{ $user }}</h2>

        @if ($print_paragraph)
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum reprehenderit odio cupiditate nemo voluptatibus, et id mollitia asperiores. Aliquam ex rem nulla, reiciendis similique incidunt laboriosam aliquid sapiente ipsam aut!
        </p>
        @else
        <p>Nothing to see here</p>
        @endif

        <ul>
            @foreach ($colors as $color)

            @if ($loop->first)
            <li class="first">{{$color}}</li>
            @elseif ($loop->last)
            <li class="last">{{$color}}</li>
            @else
            <li>{{$color}}</li>
            @endif

            @endforeach
        </ul>

        <ul>
            @for ($i = 1; $i <= 10; $i++)
            <li>{{$i}}</li>
            @endfor
        </ul>

        <a class="btn" href="/about">About</a>

    </div>
</body>

</html>
