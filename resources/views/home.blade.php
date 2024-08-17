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
        <a href="getLink/{{$value['id']}}"><img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="w-[45px] mt-[-820px] ml-[300px]"/></a>
    @endforeach
</body>
</html>
