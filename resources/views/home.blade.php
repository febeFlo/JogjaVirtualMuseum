<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home Page</title>
</head>
<body>
    <div class="relative">
        <img src="{{ asset('assets/peta.png') }}" alt="Peta Yogyakarta" class="m-24"/>

        @foreach ($data as $value)
            @if ($value['id']=='1')
                <a href="getLink/{{$value['id']}}">
                    <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute w-[45px]" style="top: 20%; left: 30%;"/>
                </a>
            @elseif ($value['id']=='2')
                <a href="getLink/{{$value['id']}}">
                    <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute w-[45px]" style="top: 80%; left: 65%;"/>
                </a>
            @endif
        @endforeach
    </div>
</body>
</html>
