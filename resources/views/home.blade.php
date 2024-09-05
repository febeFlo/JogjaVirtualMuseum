<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
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
    <div class="text-center pt-5 w-[100px]">
        <a href="vote" class="centered-button bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Vote</a>
    </div>
    <div class="relative">
        <img src="{{ asset('assets/peta.png') }}" alt="Peta Yogyakarta" class="m-24" width="17177" height="21054"/>

        @foreach ($data as $value)
            @php
                $coordinates = [
                    '1' => ['x' => '29%', 'y' => '61%'],
                    '2' => ['x' => '20.5%', 'y' => '42.5%'],
                    '3' => ['x' => '29%', 'y' => '41%'],
                    '4' => ['x' => '45%', 'y' => '40%'],
                    '5' => ['x' => '21%', 'y' => '42.5%'],
                    '6' => ['x' => '26.8%', 'y' => '57.5%'],
                    '7' => ['x' => '21.5%', 'y' => '50%'],
                    '8' => ['x' => '21.8%', 'y' => '49%'],
                    '9' => ['x' => '31%', 'y' => '67%'],
                    '10' => ['x' => '21%', 'y' => '55.5%'],
                    '11' => ['x' => '28.8%', 'y' => '46.3%'],
                    '12' => ['x' => '47.5%', 'y' => '38%'],
                    '13' => ['x' => '52.3%', 'y' => '37.8%'],
                    '14' => ['x' => '11.5%', 'y' => '58%'],
                    '15' => ['x' => '', 'y' => ''],
                    '16' => ['x' => '46.5%', 'y' => '89%'],
                    '17' => ['x' => '80.8%', 'y' => '97%'],
                    '18' => ['x' => '', 'y' => ''],
                    '19' => ['x' => '', 'y' => ''],
                    '20' => ['x' => '', 'y' => ''],
                    '21' => ['x' => '', 'y' => ''],
                    '22' => ['x' => '49%', 'y' => '36.5%'],
                    '23' => ['x' => '62.8%', 'y' => '36%'],
                    '24' => ['x' => '59.3%', 'y' => '37.3%'],
                    '25' => ['x' => '', 'y' => ''],
                    '26' => ['x' => '44%', 'y' => '20.4%'],
                    '27' => ['x' => '', 'y' => ''],
                    '28' => ['x' => '38%', 'y' => '70.5%'],
                    '29' => ['x' => '54.5%', 'y' => '26%'],
                    '30' => ['x' => '61%', 'y' => '47.2%'],
                    '31' => ['x' => '68.5%', 'y' => '44.5%'],
                    '32' => ['x' => '48.5%', 'y' => '94%'],
                    '33' => ['x' => '59%', 'y' => '36.8%'],
                    '34' => ['x' => '70.3%', 'y' => '45.3%'],
                    '35' => ['x' => '42%', 'y' => '40.3%'],
                    '36' => ['x' => '41.7%', 'y' => '42%'],
                    '37' => ['x' => '57%', 'y' => '33%'],
                    '38' => ['x' => '19%', 'y' => '41%'],
                    '39' => ['x' => '45.2%', 'y' => '34%'],
                    '40' => ['x' => '65%', 'y' => '74.5%'],
                    '41' => ['x' => '49%', 'y' => '93.7%'],
                    '42' => ['x' => '69.5%', 'y' => '50.5%'],
                ];
            @endphp

            <a href="getLink/{{$value['id']}}" class="group">
                <div class="absolute flex flex-col" style="top: {{ $coordinates[$value['id']]['x'] }}; left: {{ $coordinates[$value['id']]['y'] }};">
                    <x-location-pointer
                        name="{{ $value['name'] }}"
                        titikUkur="{{ $value['titikUkur'] }}"
                        imageUrl="{{ asset('path/to/image.png') }}"
                    />
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
