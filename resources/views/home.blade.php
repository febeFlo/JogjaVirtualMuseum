<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home Page</title>
</head>
<body>
    <img src="{{ asset('assets/peta.jpg') }}" alt="Peta Yogyakarta" class="w-screen"/>

    @foreach ($data as $value)
        @if ($value['id']=='1')
            <a href="getLink/{{$value['id']}}"><img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute top-0 w-[45px] mt-[120px] ml-[300px]"/></a>
        @elseif ($value['id']=='2')
            <a href="getLink/{{$value['id']}}"><img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute top-0 w-[45px] mt-[320px] ml-[900px]"/></a>
        @endif
    @endforeach
</body>
</html>
