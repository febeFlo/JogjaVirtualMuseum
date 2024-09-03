<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home Page</title>

    <style>
        .clickableArea {
            cursor: pointer;
            fill: red;
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <div class="">
        <img src="{{ asset('assets/peta.png') }}" alt="Peta Yogyakarta" usemap="#mappoint" class="m-24" width="17177" height="21054"/>

        <map name="mappoint">
            {{-- <area shape="circle" coords="8319,11170,45" href="getLink/{{$value['id']}}" alt="Location Pointer" class="clickableArea"> --}}

            @foreach ($data as $value)
                @php
                    $coordinates = [
                        '1' => ['x' => '', 'y' => ''],
                        '2' => ['x' => '5319.27', 'y' => '-116.76'],
                        '3' => ['x' => '5318.99', 'y' => '-117.07'],
                        '4' => ['x' => '5318.71', 'y' => '-117.38'],
                        '5' => ['x' => '5319.40', 'y' => '-116.80'],
                        '6' => ['x' => '5320.17', 'y' => '-116.25'],
                        '7' => ['x' => '5256.20', 'y' => '9200.50'],
                        '8' => ['x' => '5256.13', 'y' => '9200.44'],
                        '9' => ['x' => '5320.88', 'y' => '-115.94'],
                        '10' => ['x' => '5319.83', 'y' => '-116.52'],
                        '11' => ['x' => '5319.6', 'y' => '-116.90'],
                        '12' => ['x' => '5318.89', 'y' => '-117.38'],
                        '13' => ['x' => '5318.71', 'y' => '-117.52'],
                        '14' => ['x' => '5320.67', 'y' => '-116.00'],
                        '15' => ['x' => '5321.33', 'y' => '-115.56'],
                        '16' => ['x' => '5323.78', 'y' => '-114.00'],
                        '17' => ['x' => '5324.88', 'y' => '-113.33'],
                        '18' => ['x' => '5324.50', 'y' => '-113.67'],
                        '19' => ['x' => '5324.67', 'y' => '-113.60'],
                        '20' => ['x' => '5324.72', 'y' => '-113.61'],
                        '21' => ['x' => '5324.72', 'y' => '-113.61'],
                        '22' => ['x' => '5318.89', 'y' => '-117.38'],
                        '23' => ['x' => '5318.71', 'y' => '-117.52'],
                        '24' => ['x' => '5318.78', 'y' => '-117.46'],
                        '25' => ['x' => '5317.97', 'y' => '-118.16'],
                        '26' => ['x' => '5319.40', 'y' => '-116.80'],
                        '27' => ['x' => '5321.33', 'y' => '-115.56'],
                        '28' => ['x' => '5320.17', 'y' => '-116.25'],
                        '29' => ['x' => '5319.83', 'y' => '-116.52'],
                        '30' => ['x' => '5319.98', 'y' => '-116.52'],
                        '31' => ['x' => '5319.40', 'y' => '-116.80'],
                        '32' => ['x' => '5320.40', 'y' => '-116.80'],
                        '33' => ['x' => '5319.83', 'y' => '-116.52'],
                        '34' => ['x' => '5319.98', 'y' => '-116.52'],
                        '35' => ['x' => '5320.17', 'y' => '-116.25'],
                        '36' => ['x' => '5320.17', 'y' => '-116.25'],
                        '37' => ['x' => '5319.98', 'y' => '-116.52'],
                        '38' => ['x' => '5320.40', 'y' => '-116.80'],
                        '39' => ['x' => '5319.40', 'y' => '-116.80'],
                        '40' => ['x' => '5320.17', 'y' => '-116.25'],
                        '41' => ['x' => '5318.89', 'y' => '-117.38'],
                        '42' => ['x' => '5320.47', 'y' => '-115.99'],
                    ];
                @endphp

                <area shape="circle" coords="{{ $coordinates[$value['id']]['x'] }},{{ $coordinates[$value['id']]['y'] }},45" href="getLink/{{$value['id']}}" alt="Location Pointer" class="clickableArea">
            @endforeach
        </map>
    </div>
</body>
</html>

{{-- @foreach ($data as $value)
                @if ($value['id']=='1')
                    <a href="getLink/{{$value['id']}}">
                        <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute w-[45px]" style="top: 20%; left: 30%;"/>
                    </a>
                @elseif ($value['id']=='2')
                    <a href="getLink/{{$value['id']}}">
                        <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute w-[45px]" style="top: 80%; left: 65%;"/>
                    </a>
                @endif
            @endforeach --}}

            {{-- <a href="getLink/{{$value['id']}}" style="top: {{ $coordinates[$value['id']]['top'] }}; left: {{ $coordinates[$value['id']]['left'] }};">
                    <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute w-[45px]"/>
                </a> --}}
