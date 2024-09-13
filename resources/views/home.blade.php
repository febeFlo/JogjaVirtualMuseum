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
                    <span class="self-center font-sans text-xl font-bold whitespace-nowrap">Jogja Virtual
                        Soundscape</span>
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
                            @if ($qmethod)
                                <a href="{{ $qmethod }}"
                                    class="px-4 py-2 font-bold text-white bg-orange-500 rounded centered-button hover:bg-orange-400">
                                    Q Method Survey
                                </a>
                            @endif
                            <a href="https://forms.gle/nfeJJs9aKC2Hm2oG6"
                                class="px-4 py-2 font-bold text-white bg-orange-500 rounded centered-button hover:bg-orange-400">Website
                                Survey</a>
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
                    '4' => ['x' => '45.5%', 'y' => '32.5%'],
                    '5' => ['x' => '22%', 'y' => '33%'],
                    '6' => ['x' => '27.8%', 'y' => '48%'],
                    '7' => ['x' => '22.5%', 'y' => '40.5%'],
                    '8' => ['x' => '22%', 'y' => '42.5%'],
                    '9' => ['x' => '32%', 'y' => '57.5%'],
                    '10' => ['x' => '22%', 'y' => '46%'],
                    '11' => ['x' => '29.2%', 'y' => '39.5%'],
                    '12' => ['x' => '47.5%', 'y' => '31.2%'],
                    '13' => ['x' => '53.3%', 'y' => '28.3%'],
                    '14' => ['x' => '12.5%', 'y' => '48.5%'],
                    '15' => ['x' => '1.2%', 'y' => '53%'],
                    '16' => ['x' => '47.5%', 'y' => '79.5%'],
                    '17' => ['x' => '81.8%', 'y' => '87.5%'],
                    '18' => ['x' => '83.5%', 'y' => '83.3%'],
                    '19' => ['x' => '83.5%', 'y' => '85.6%'],
                    '20' => ['x' => '83%', 'y' => '84.5%'],
                    '21' => ['x' => '83.4%', 'y' => '84.5%'],
                    '22' => ['x' => '49%', 'y' => '29.2%'],
                    '23' => ['x' => '61.8%', 'y' => '29.5%'],
                    '24' => ['x' => '58.5%', 'y' => '29.6%'],
                    '25' => ['x' => '83.5%', 'y' => '10%'],
                    '26' => ['x' => '43%', 'y' => '13.9%'],
                    '27' => ['x' => '0.1%', 'y' => '51%'],
                    '28' => ['x' => '39%', 'y' => '62%'],
                    '29' => ['x' => '57.5%', 'y' => '16.5%'],
                    '30' => ['x' => '61%', 'y' => '42.7%'],
                    '31' => ['x' => '59.5%', 'y' => '41.7%'],
                    '32' => ['x' => '69.5%', 'y' => '37.7%'],
                    '33' => ['x' => '49%', 'y' => '86.2%'],
                    '34' => ['x' => '59.5%', 'y' => '29.6%'],
                    '35' => ['x' => '70.5%', 'y' => '37.9%'],
                    '36' => ['x' => '42.4%', 'y' => '32.5%'],
                    '37' => ['x' => '42.4%', 'y' => '34.5%'],
                    '38' => ['x' => '57%', 'y' => '23.5%'],
                    '39' => ['x' => '19%', 'y' => '35%'],
                    '40' => ['x' => '45%', 'y' => '28%'],
                    '41' => ['x' => '50%', 'y' => '84.2%'],
                    '42' => ['x' => '50.5%', 'y' => '86.2%'],
                    '43' => ['x' => '70.8%', 'y' => '39%'],
                    '44' => ['x' => '54.5%', 'y' => '24.8%'],
                    '45' => ['x' => '55.5%', 'y' => '25%'],
                    '46' => ['x' => '53.3%', 'y' => '28.3%'],
                    '47' => ['x' => '24.8%', 'y' => '77%'],
                    '48' => ['x' => '53%', 'y' => '31%'],
                    '49' => ['x' => '55%', 'y' => '31%'],
                    '50' => ['x' => '48%', 'y' => '26.7%'],
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
