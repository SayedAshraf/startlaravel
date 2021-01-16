<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <h1>{{ __('messages.Welcome') }}</h1>

        {{-- view Directives --}}

        {{-- @if ($name == 'Sayed')
            <h1>I am Sayed</h1>
            @elseif ($name == "Ahmed")
            <h1>I am Ahmed</h1>
            @else
            <h1>i am not</h1>
        @endif --}}

        {{-- @foreach ($data as $_data)
            <p>{{ $_data }}</p>
        @endforeach --}}

        {{-- @forelse ($data as $_data)
        <p>{{ $_data }}</p>
        @empty
        <h1>empty arry</h1>
        @endforelse --}}

    </div>
</body>

</html>
