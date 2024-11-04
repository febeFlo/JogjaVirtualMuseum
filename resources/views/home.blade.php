<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <title>Home Page</title>

    <style>
        .centered-button {
            justify-content: center;
            align-items: center;
            display: inline-block;
        }

        #map {
            height: 900px;
            width: 100%;
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
                        class="flex flex-col p-4 mt-4 font-medium border md:p-0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                            <a href="list-landmarks"
                                class="px-4 py-2 mr-4 font-bold text-white bg-gray-500 rounded-xl hover:bg-gray-600 centered-button">List
                                Lokasi Ikonik</a>
                            <a href="vote"
                                class="px-4 py-2 font-bold text-white bg-orange-500 rounded-xl centered-button hover:bg-orange-400">Vote</a>
                            @if ($qmethod)
                                <a href="{{ $qmethod }}" target="_blank"
                                    class="px-4 py-2 font-bold text-white bg-orange-500 rounded-xl centered-button hover:bg-orange-400">
                                    Q Method Survey
                                </a>
                            @endif
                            <a href="https://forms.gle/nfeJJs9aKC2Hm2oG6" target="_blank"
                                class="px-4 py-2 font-bold text-white bg-orange-500 rounded-xl centered-button hover:bg-orange-400">Website
                                Survey</a>
                            <a href="logout"
                                class="px-4 py-2 ml-4 font-bold text-white bg-red-500 rounded-xl hover:bg-red-600 centered-button">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div id="map"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map', {
            crs: L.CRS.Simple,
            minZoom: -3.3,
            maxZoom: -1.5
        });

        var bounds = [
            [0, 0],
            [21054, 17177]
        ];
        var imagePath = "{{ asset('assets/peta.png') }}";
        var image = L.imageOverlay(imagePath, bounds).addTo(map);
        map.fitBounds(bounds).setMaxBounds(bounds);

        var customIcon = L.icon({
            iconUrl: "{{ asset('assets/locationPointer.png') }}",
            iconSize: [50, 50],
            iconAnchor: [22, 94],
            popupAnchor: [-3, -76],
        });

        @php
            $coordinates = [
                '1' => ['x' => 9447, 'y' => 14001],
                '2' => ['x' => 6355, 'y' => 15938],
                '3' => ['x' => 6098, 'y' => 14106],
                '4' => ['x' => 5840, 'y' => 10632],
                '5' => ['x' => 6441, 'y' => 15896],
                '6' => ['x' => 8846, 'y' => 14527],
                '7' => ['x' => 7472, 'y' => 15580],
                '8' => ['x' => 7386, 'y' => 15643],
                '9' => ['x' => 10564, 'y' => 13685],
                '10' => ['x' => 8588, 'y' => 15685],
                '11' => ['x' => 7043, 'y' => 14211],
                '12' => ['x' => 5411, 'y' => 10211],
                '13' => ['x' => 5497, 'y' => 9053],
                '14' => ['x' => 9104, 'y' => 17685],
                '16' => ['x' => 14429, 'y' => 10527],
                '17' => ['x' => 15631, 'y' => 2316],
                '18' => ['x' => 14515, 'y' => 2842],
                '19' => ['x' => 14858, 'y' => 2737],
                '21' => ['x' => 14772, 'y' => 2737],
                '22' => ['x' => 5239, 'y' => 9895],
                '23' => ['x' => 5153, 'y' => 6948],
                '24' => ['x' => 5411, 'y' => 7790],
                '25' => ['x' => 1718, 'y' => 3158],
                '26' => ['x' => 2577, 'y' => 10948],
                '28' => ['x' => 11165, 'y' => 12211],
                '29' => ['x' => 3435, 'y' => 8632],
                '30' => ['x' => 7008, 'y' => 7264],
                '32' => ['x' => 6699, 'y' => 5790],
                '33' => ['x' => 15116, 'y' => 10001],
                '34' => ['x' => 5325, 'y' => 7790],
                '35' => ['x' => 6785, 'y' => 5369],
                '36' => ['x' => 5926, 'y' => 11432],
                '37' => ['x' => 6184, 'y' => 11432],
                '38' => ['x' => 4724, 'y' => 8106],
                '39' => ['x' => 6012, 'y' => 16212],
                '40' => ['x' => 4810, 'y' => 10632],
                '41' => ['x' => 11852, 'y' => 6527],
                '42' => ['x' => 15116, 'y' => 9790],
                '43' => ['x' => 7644, 'y' => 5474],
                '44' => ['x' => 4380, 'y' => 8716],
                '45' => ['x' => 4380, 'y' => 8632],
                '46' => ['x' => 6098, 'y' => 9895],
                '47' => ['x' => 13656, 'y' => 15012],
                '48' => ['x' => 5583, 'y' => 9053],
                '49' => ['x' => 5548, 'y' => 8990],
                '50' => ['x' => 5067, 'y' => 10316],
            ];

            $imageWidth = 17177; // image width in pixels
            $imageHeight = 21054; // image height in pixels

            $points = [];

            foreach ($data as $value) {
                // Directly get pixel coordinates
                $x = $coordinates[$value['id']]['x']; // x coordinate (in pixels)
                $y = $coordinates[$value['id']]['y']; // y coordinate (in pixels)

                $points[] = [
                    'name' => $value['name'],
                    'coordinates' => [$y, $x], // Leaflet expects [lat, lng], hence $y (for lat) comes first
                    'url' => 'getLink/' . $value['id'],
                    'imageUrl' => asset('assets/jogjaView.jpg/' . $value['image']),
                    'titikUkur' => $value['titikUkur'],
                ];
            }
        @endphp

        var points = @json($points); // points array from PHP to JavaScript

        points.forEach(function(point) {
            var popupContent = `
            <div>
                <h3>${point.name}</h3>
                <img src="${point.imageUrl}" alt="${point.name}" style="width:100px;height:100px;">
                <p>${point.titikUkur}</p>
                <a href="${point.url}">Link</a>
            </div>
        `;

            var marker = L.marker(point.coordinates, {
                    icon: customIcon
                })
                .addTo(map)
                .bindPopup(popupContent);

            marker.on('click', function() {
                window.location.href = point.url;
            });

            marker.on('mouseover', function(e) {
                marker.openPopup();
            });

            marker.on('mouseout', function(e) {
                marker.closePopup();
            });
        });
    </script>

    {{-- <div class="relative"> --}}
    {{-- <div id="map">
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script>
            var map = L.map('map', {
                crs: L.CRS.Simple,
                minZoom: -3.5,
                maxZoom: 2
            });

            var bounds = [[0,0], [21054,17177]];
            var imagePath = "{{ asset('assets/peta.png') }}"
            var image = L.imageOverlay(imagePath, bounds).addTo(map);

            map.fitBounds(bounds).setMaxBounds(bounds);

            var customIcon = L.icon({
                iconUrl: "{{ asset('assets/locationPointer.png') }}",
                iconSize: [50, 50],
                iconAnchor: [22, 94],
                popupAnchor: [-3, -76],
            });

            // var points = [];

            @php
                $coordinates = [
                    // Left = X dan Bottom = Y
                    // '1' => ['x' => '30%', 'y' => '54.5%'],
                    '1' => ['x' => '55%', 'y' => '66.5%'],
                    '2' => ['x' => '37%', 'y' => '75.7%'],
                    '3' => ['x' => '35.5%', 'y' => '67%'],
                    '4' => ['x' => '34%', 'y' => '50.5%'],
                    '5' => ['x' => '37.5%', 'y' => '75.5%'],
                    '6' => ['x' => '51.5%', 'y' => '69%'],
                    '7' => ['x' => '43.5%', 'y' => '74%'],
                    '8' => ['x' => '43%', 'y' => '74.3%'],
                    '9' => ['x' => '61.5%', 'y' => '65%'],
                    '10' => ['x' => '50%', 'y' => '74.5%'],
                    '11' => ['x' => '41%', 'y' => '67.5%'],
                    '12' => ['x' => '31.5%', 'y' => '48.5%'],
                    '13' => ['x' => '32%', 'y' => '43%'],
                    '14' => ['x' => '53%', 'y' => '84%'],
                    // '15' => ['x' => '1.2%', 'y' => '53%'],
                    '16' => ['x' => '84%', 'y' => '50%'],
                    '17' => ['x' => '91%', 'y' => '11%'],
                    '18' => ['x' => '84.5%', 'y' => '13.5%'],
                    '19' => ['x' => '86.5%', 'y' => '13%'],
                    // '20' => ['x' => '86.5%', 'y' => '13%'],
                    '21' => ['x' => '86%', 'y' => '13%'],
                    '22' => ['x' => '30.5%', 'y' => '47%'],
                    '23' => ['x' => '30%', 'y' => '33%'],
                    '24' => ['x' => '31.5%', 'y' => '37%'],
                    '25' => ['x' => '10%', 'y' => '15%'],
                    '26' => ['x' => '15%', 'y' => '52%'],
                    // '27' => ['x' => '0.1%', 'y' => '51%'],
                    '28' => ['x' => '65%', 'y' => '58%'],
                    '29' => ['x' => '20%', 'y' => '41%'],
                    '30' => ['x' => '40.8%', 'y' => '34.5%'],
                    // '31' => ['x' => '39%', 'y' => '25%'],
                    '32' => ['x' => '39%', 'y' => '27.5%'],
                    '33' => ['x' => '88%', 'y' => '47.5%'],
                    '34' => ['x' => '31%', 'y' => '37%'],
                    '35' => ['x' => '39.5%', 'y' => '25.5%'],
                    '36' => ['x' => '34.5%', 'y' => '54.3%'],
                    '37' => ['x' => '36%', 'y' => '54.3%'],
                    '38' => ['x' => '27.5%', 'y' => '38.5%'],
                    '39' => ['x' => '35%', 'y' => '77%'],
                    '40' => ['x' => '28%', 'y' => '50.5%'],
                    '41' => ['x' => '69%', 'y' => '31%'],
                    '42' => ['x' => '88%', 'y' => '46.5%'],
                    '43' => ['x' => '44.5%', 'y' => '26%'],
                    '44' => ['x' => '25.5%', 'y' => '41.4%'],
                    '45' => ['x' => '25.5%', 'y' => '41%'],
                    '46' => ['x' => '35.5%', 'y' => '47%'],
                    '47' => ['x' => '79.5%', 'y' => '71.3%'],
                    '48' => ['x' => '32.5%', 'y' => '43%'],
                    '49' => ['x' => '32.3%', 'y' => '42.7%'],
                    '50' => ['x' => '29.5%', 'y' => '49%'],
                ];

                $imageWidth = 17177;
                $imageHeight = 21054;

                $points = [];

                forEach ($data as $value) {
                    $x = floatval(rtrim($coordinates[$value['id']]['x'], '%')) * $imageWidth / 100;
                    $y = floatval(rtrim($coordinates[$value['id']]['y'], '%')) * $imageHeight / 100;

                    $points[] = [
                        'name' => $value['name'],
                        'coordinates' => [$y, $x],
                        'url' => 'getLink/' . $value['id'],
                        'imageUrl' => asset('assets/jogjaView.jpg/' . $value['image']),
                        'titikUkur' => $value['titikUkur']
                    ];
                }
                // points.push({name: "{{ $value['name'] }}", coordinates: "{{ $coordinates[$value['id']]['x'] }}", url: "getLink/{{ $value['id'] }}" });
            @endphp

            var points = @json($points);

            points.forEach(function(point) {
                var popupContent = `
                    <div>
                        <h3>${point.name}</h3>
                        <img src="${point.imageUrl}" alt="${point.name}" style="width:100px;height:100px;">
                        <p>${point.titikUkur}</p>
                        <a href="${point.url}"></a>
                    </div>
                `;

                var marker = L.marker(point.coordinates, {icon: customIcon})
                    .addTo(map)
                    .bindPopup(popupContent);

                marker.on('click', function() {
                    window.location.href = point.url;
                });

                marker.on('mouseover', function(e) {
                    marker.openPopup();
                });

                marker.on('mouseout', function(e) {
                    marker.closePopup();
                });
            });
        </script>
    </div> --}}
</body>

</html>
