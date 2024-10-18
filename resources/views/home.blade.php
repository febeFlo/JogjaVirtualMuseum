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
            height: 500px;
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
    {{-- <div class="relative"> --}}
    <div id="map">
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
                iconSize: [38, 60],
                iconAnchor: [22, 94],
                popupAnchor: [-3, -76],
            });

            // var points = [];

            @php
                $coordinates = [
                    // Left = X dan Bottom = Y
                    // '1' => ['x' => '30%', 'y' => '54.5%'],
                    '1' => ['x' => '55%', 'y' => '65.5%'],
                    '2' => ['x' => '21%', 'y' => '35.7%'],
                    '3' => ['x' => '30%', 'y' => '31.5%'],
                    '4' => ['x' => '45.5%', 'y' => '32.5%'],
                    '5' => ['x' => '21.5%', 'y' => '36.5%'],
                    '6' => ['x' => '27.8%', 'y' => '48%'],
                    '7' => ['x' => '23%', 'y' => '41.5%'],
                    '8' => ['x' => '22.5%', 'y' => '42.5%'],
                    '9' => ['x' => '32%', 'y' => '57.5%'],
                    '10' => ['x' => '21.5%', 'y' => '48.5%'],
                    '11' => ['x' => '29.2%', 'y' => '39.5%'],
                    '12' => ['x' => '47.5%', 'y' => '31.2%'],
                    '13' => ['x' => '53.3%', 'y' => '28.3%'],
                    '14' => ['x' => '12%', 'y' => '51%'],
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
                    '39' => ['x' => '20%', 'y' => '33%'],
                    '40' => ['x' => '45%', 'y' => '28%'],
                    '41' => ['x' => '50%', 'y' => '84.2%'],
                    '42' => ['x' => '50.5%', 'y' => '86.2%'],
                    '43' => ['x' => '70.8%', 'y' => '39%'],
                    '44' => ['x' => '54.5%', 'y' => '24.8%'],
                    '45' => ['x' => '55.5%', 'y' => '25%'],
                    '46' => ['x' => '51.3%', 'y' => '33%'],
                    '47' => ['x' => '24.8%', 'y' => '77%'],
                    '48' => ['x' => '53%', 'y' => '31%'],
                    '49' => ['x' => '55%', 'y' => '31%'],
                    '50' => ['x' => '48%', 'y' => '26.7%'],
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

        {{-- <img src="{{ asset('assets/peta.png') }}" alt="Peta Yogyakarta" width="17177" height="21054" /> --}}

        {{-- @foreach ($data as $value) --}}
            {{-- @php --}}
                {{-- // Top = X dan Left = Y
                $coordinates = [
                    '1' => ['x' => '30%', 'y' => '54.5%'],
                    '2' => ['x' => '21%', 'y' => '35.7%'],
                    '3' => ['x' => '30%', 'y' => '31.5%'],
                    '4' => ['x' => '45.5%', 'y' => '32.5%'],
                    '5' => ['x' => '21.5%', 'y' => '36.5%'],
                    '6' => ['x' => '27.8%', 'y' => '48%'],
                    '7' => ['x' => '23%', 'y' => '41.5%'],
                    '8' => ['x' => '22.5%', 'y' => '42.5%'],
                    '9' => ['x' => '32%', 'y' => '57.5%'],
                    '10' => ['x' => '21.5%', 'y' => '48.5%'],
                    '11' => ['x' => '29.2%', 'y' => '39.5%'],
                    '12' => ['x' => '47.5%', 'y' => '31.2%'],
                    '13' => ['x' => '53.3%', 'y' => '28.3%'],
                    '14' => ['x' => '12%', 'y' => '51%'],
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
                    '39' => ['x' => '20%', 'y' => '33%'],
                    '40' => ['x' => '45%', 'y' => '28%'],
                    '41' => ['x' => '50%', 'y' => '84.2%'],
                    '42' => ['x' => '50.5%', 'y' => '86.2%'],
                    '43' => ['x' => '70.8%', 'y' => '39%'],
                    '44' => ['x' => '54.5%', 'y' => '24.8%'],
                    '45' => ['x' => '55.5%', 'y' => '25%'],
                    '46' => ['x' => '51.3%', 'y' => '33%'],
                    '47' => ['x' => '24.8%', 'y' => '77%'],
                    '48' => ['x' => '53%', 'y' => '31%'],
                    '49' => ['x' => '55%', 'y' => '31%'],
                    '50' => ['x' => '48%', 'y' => '26.7%'],
                ]; --}}
            {{-- @endphp --}}

            {{-- <a href="getLink/{{ $value['id'] }}" class="group">
                <div class="absolute flex flex-col"
                    style="top: {{ $coordinates[$value['id']]['x'] }}; left: {{ $coordinates[$value['id']]['y'] }};">
                    <x-location-pointer name="{{ $value['name'] }}" titikUkur="{{ $value['titikUkur'] }}"
                        imageUrl="{{ asset('path/to/image.png') }}" />
                </div>
            </a> --}}
            {{-- <a href="getLink/{{$value['id']}}" class="group">
                <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="absolute w-[45px]" style="top: {{ $coordinates[$value['id']]['x'] }}; left: {{ $coordinates[$value['id']]['y'] }};"/>
            </a> --}}
        {{-- @endforeach --}}
    </div>
</body>

</html>
