<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Home Page</title>

    <style>
        .centered-button {
            justify-content: center;
            align-items: center;
            display: inline-block;
        }
    </style>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <div>
        <nav class="p-[10px] bg-white border-gray-200">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
                <a href="home" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center font-sans text-xl font-bold whitespace-nowrap">Jogja Virtual Museum</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-yellow-100">
                        <li>
                            <a href="vote"
                                class="px-4 py-2 font-bold text-white bg-orange-500 rounded centered-button hover:bg-orange-400">Vote</a>
                            <a href="logout"
                                class="px-4 py-2 font-bold text-white bg-orange-500 rounded centered-button hover:bg-orange-400">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="relative">
        <img src="{{ asset('assets/peta.png') }}" alt="Peta Yogyakarta" width="17177" height="21054" />

        @foreach ($data as $value)
            @php
                $coordinates = [
                    '1' => ['x' => '30%', 'y' => '51.5%'],
                    '2' => ['x' => '21.5%', 'y' => '33%'],
                    '3' => ['x' => '30%', 'y' => '31.5%'],
                    '4' => ['x' => '46%', 'y' => '30.5%'],
                    '5' => ['x' => '22%', 'y' => '33%'],
                    '6' => ['x' => '27.8%', 'y' => '48%'],
                    '7' => ['x' => '22.5%', 'y' => '40.5%'],
                    '8' => ['x' => '22.8%', 'y' => '39.5%'],
                    '9' => ['x' => '32%', 'y' => '57.5%'],
                    '10' => ['x' => '22%', 'y' => '46%'],
                    '11' => ['x' => '29.8%', 'y' => '36.8%'],
                    '12' => ['x' => '48.5%', 'y' => '28.5%'],
                    '13' => ['x' => '53.3%', 'y' => '28.3%'],
                    '14' => ['x' => '12.5%', 'y' => '48.5%'],
                    '15' => ['x' => '', 'y' => ''],
                    '16' => ['x' => '47.5%', 'y' => '79.5%'],
                    '17' => ['x' => '81.8%', 'y' => '87.5%'],
                    '18' => ['x' => '', 'y' => ''],
                    '19' => ['x' => '', 'y' => ''],
                    '20' => ['x' => '', 'y' => ''],
                    '21' => ['x' => '', 'y' => ''],
                    '22' => ['x' => '50%', 'y' => '27%'],
                    '23' => ['x' => '63.8%', 'y' => '26.5%'],
                    '24' => ['x' => '60.3%', 'y' => '27.8%'],
                    '25' => ['x' => '', 'y' => ''],
                    '26' => ['x' => '45%', 'y' => '10.9%'],
                    '27' => ['x' => '', 'y' => ''],
                    '28' => ['x' => '39%', 'y' => '61%'],
                    '29' => ['x' => '55.5%', 'y' => '16.5%'],
                    '30' => ['x' => '62%', 'y' => '37.7%'],
                    '31' => ['x' => '69.5%', 'y' => '35%'],
                    '32' => ['x' => '49.5%', 'y' => '84.5%'],
                    '33' => ['x' => '60%', 'y' => '27.3%'],
                    '34' => ['x' => '71.3%', 'y' => '35.8%'],
                    '35' => ['x' => '43%', 'y' => '30.8%'],
                    '36' => ['x' => '42.7%', 'y' => '32.5%'],
                    '37' => ['x' => '58%', 'y' => '23.5%'],
                    '38' => ['x' => '20%', 'y' => '31.5%'],
                    '39' => ['x' => '46.2%', 'y' => '24.5%'],
                    '40' => ['x' => '66%', 'y' => '65%'],
                    '41' => ['x' => '50%', 'y' => '84.2%'],
                    '42' => ['x' => '70.5%', 'y' => '41%'],
                ];
            @endphp

            <a href="getLink/{{ $value['id'] }}" class="group">
                <div class="absolute flex flex-col"
                    style="top: {{ $coordinates[$value['id']]['x'] }}; left: {{ $coordinates[$value['id']]['y'] }};">
                    <x-location-pointer name="{{ $value['name'] }}" titikUkur="{{ $value['titikUkur'] }}"
                        imageUrl="{{ asset('path/to/image.png') }}" />
                </div>
            </a>
            {{-- <a href="getLink/{{$value['id']}}" class="group">
                <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute w-[45px]" style="top: {{ $coordinates[$value['id']]['x'] }}; left: {{ $coordinates[$value['id']]['y'] }};"/>
            </a> --}}
        @endforeach
    </div>
</body>

</html>

{{-- @foreach ($data as $value)
            <script>
                const coordinates = [
                    { latitude: getCoordinates({{ $value['id']['titikUkur'] }}, {{ asset('assets/peta.png') }}), longitude: getCoordinates({{ $value['id']['titikUkur'] }}, {{ asset('assets/peta.png') }}) },
                ];

                const mapImage = {{ asset('assets/peta.png') }};

                coordinates.forEach(coord => {
                    const { x, y } = getPixelCoordinates(coord.latitude, coord.longitude, mapImage);
                    <a href="getLink/{{$value['id']}}" style="top: {{$x}}; left: {{$y}};">
                        <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute w-[45px]"/>
                    </a>
                });
            </script>
        @endforeach --}}

{{-- @foreach ($data as $value)
                @if ($value['id'] == '1')
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

{{-- // function convertCoordinates(coordinateString) {
                    //     const [latPart, lonPart] = coordinateString.split(' ');

                    //     // Parse latitude
                    //     const latDegrees = parseInt(latPart);
                    //     const latMinutes = parseInt(latPart.split('°')[1]);
                    //     const latSeconds = parseInt(latPart.split("'")[1]);
                    //     const decimalLatitude = (latDegrees + latMinutes / 60 + latSeconds / 3600) * -1;

                    //     // Parse longitude
                    //     const lonDegrees = parseInt(lonPart);
                    //     const lonMinutes = parseInt(lonPart.split('°')[1]);
                    //     const lonSeconds = parseInt(lonPart.split("'")[1]);
                    //     const decimalLongitude = lonDegrees + lonMinutes / 60 + lonSeconds / 3600;

                    //     return { latitude: decimalLatitude, longitude: decimalLongitude };
                    // } --}}

{{-- @php
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
            @endphp --}}


{{-- <script>
            function getLatitude(coordinateString) {
                const [latPart, lonPart] = coordinateString.split(' ');

                // Parse latitude
                const latDegrees = parseInt(latPart);
                const latMinutes = parseInt(latPart.split('°')[1]);
                const latSeconds = parseInt(latPart.split("'")[1]);
                const decimalLatitude = (latDegrees + latMinutes / 60 + latSeconds / 3600) * -1;

                // Define your map's bounding box (min and max latitude/longitude)
                const mapLatitudeMin = 0;
                const mapLatitudeMax = 17177;

                // Calculate adjusted latitude and longitude
                const adjLat = decimalLatitude - mapLatitudeMin;

                // Calculate pixel ratios
                const mapLatHeight = mapLatitudeMax - mapLatitudeMin;
                const mapHeight = 21054;
                const latPixelRatio = mapHeight / mapLatHeight;

                // Calculate pixel coordinates
                const y = Math.round(adjLat * latPixelRatio);

                return { y };
            }

            function getLongitude(coordinateString) {
                const [latPart, lonPart] = coordinateString.split(' ');

                // Parse longitude
                const lonDegrees = parseInt(lonPart);
                const lonMinutes = parseInt(lonPart.split('°')[1]);
                const lonSeconds = parseInt(lonPart.split("'")[1]);
                const decimalLongitude = lonDegrees + lonMinutes / 60 + lonSeconds / 3600;

                // Define your map's bounding box (min and max latitude/longitude)
                const mapLongitudeMin = 0;
                const mapLongitudeMax = 21054;

                // Calculate adjusted latitude and longitude
                const adjLon = decimalLongitude - mapLongitudeMin;

                // Calculate pixel ratios
                const mapLongWidth = mapLongitudeMax - mapLongitudeMin;
                const mapWidth = 17177;
                const longPixelRatio = mapWidth / mapLongWidth;

                // Calculate pixel coordinates
                const x = Math.round(adjLon * longPixelRatio);

                return { x };
            }

            const coordinates = { latitude: getLatitude({{ $value['titikUkur'] }}), longitude: getLongitude({{ $value['titikUkur'] }}) };

            const mapImage = document.getElementById('mapImage');

            coordinates(coord => {
                const { x, y } = coord; // Use the correct coordinates directly
                const marker = document.createElement('div');
                marker.className = 'marker';
                marker.style.top = y + 'px';
                marker.style.left = x + 'px';
                mapImage.parentNode.appendChild(marker);
            });
        </script> --}}
