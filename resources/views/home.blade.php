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
            height: screen;
            width: 100%;
        }

        #pattern{
            position: absolute;
            z-index: 0;
        }

        @media(max-width:768px){
            #map{
            height: 86.7vh;
            }
        }
    </style>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <div class="flex flex-col md:flex-row">
        <div class="relative overflow-hidden">
            <nav class="p-[10px] bg-orange-500 backdrop-blur-sm border-gray-200 md:h-screen relative">
                <img src="{{ asset('assets/PatternJogja.svg') }}" class="absolute z-1 bottom-[-30%] rotate-[135deg] right-[-125%] hidden md:inline" style="min-width:800px;"/>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="flex justify-center p-10">
                        <a href="home" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="self-center font-sans text-2xl font-bold text-center text-white ">Jogja Virtual
                                Soundscape
                            </span>
                        </a>
                        <button data-collapse-toggle="navbar-default" type="button"
                            class="inline-flex items-center justify-center w-10 h-10 p-2 ml-5 text-sm text-gray-500 rounded-lg md:hidden hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-gray-200"
                            aria-controls="navbar-default" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div class="relative flex justify-between w-full h-full md:block z-4" id="navbar-default">
                        <ul
                            class="flex flex-col items-center w-full h-full p-4 mt-4 font-medium border md:p-0 md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 ">
                            <li class="flex flex-col justify-between w-full h-full">
                                <div class="flex flex-col md:basis-[25%] md:mt-5 justify-between">
                                    <a href="list-landmarks"
                                        class="flex justify-start w-full px-4 py-2 my-2 font-bold text-orange-500 transition duration-200 bg-white md:mx-2 rounded-xl centered-button hover:bg-amber-400 hover:text-white md:w-auto">
                                        Iconic Locations
                                    </a>
                                    <a href="vote"
                                        class="flex justify-start w-full px-4 py-2 my-2 font-bold text-orange-500 transition duration-200 bg-white md:mx-2 rounded-xl centered-button hover:bg-amber-400 hover:text-white md:w-auto">
                                        Vote
                                    </a>
                                    @if ($qmethod)
                                        <a href="{{ $qmethod }}" target="_blank"
                                            class="w-full px-4 py-2 my-2 font-bold text-orange-500 transition duration-200 bg-white md:mx-2 rounded-xl centered-button hover:bg-amber-400 hover:text-white md:w-auto">
                                            Q Method Survey
                                        </a>
                                    @endif
                                    <a href="https://forms.gle/nfeJJs9aKC2Hm2oG6" target="_blank"
                                        class="flex justify-start w-full px-4 py-2 my-2 font-bold text-orange-500 transition duration-200 bg-white md:mx-2 rounded-xl centered-button hover:bg-amber-400 hover:text-white md:w-auto">Website
                                        Survey
                                    </a>
                                </div>
                                <a href="logout"
                                    class="flex justify-start w-full px-4 py-2 my-2 font-bold text-white transition duration-200 bg-red-500 group rounded-xl hover:text-red-500 hover:bg-white centered-button md:w-auto">
                                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" class="mr-2 transition-colors group-hover:stroke-red-500">
                                        <path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </svg>
                                    Logout
                                </a>

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
                    minZoom: -4.6,
                    maxZoom: -1.5,
                    zoom: -4.6
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
                        '15' => ['x' => '1.2%', 'y' => '53%'],
                        '16' => ['x' => '84%', 'y' => '50%'],
                        '17' => ['x' => '91%', 'y' => '11%'],
                        '18' => ['x' => '84.5%', 'y' => '13.5%'],
                        '19' => ['x' => '86.5%', 'y' => '13%'],
                        '20' => ['x' => '86.5%', 'y' => '13%'],
                        '21' => ['x' => '86%', 'y' => '13%'],
                        '22' => ['x' => '30.5%', 'y' => '47%'],
                        '23' => ['x' => '30%', 'y' => '33%'],
                        '24' => ['x' => '31.5%', 'y' => '37%'],
                        '25' => ['x' => '10%', 'y' => '15%'],
                        '26' => ['x' => '15%', 'y' => '52%'],
                        '27' => ['x' => '0.1%', 'y' => '51%'],
                        '28' => ['x' => '65%', 'y' => '58%'],
                        '29' => ['x' => '20%', 'y' => '41%'],
                        '30' => ['x' => '40.8%', 'y' => '34.5%'],
                        '31' => ['x' => '39%', 'y' => '25%'],
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
                        <div style="display:flex; justify-content:center; item-content:center; align-items:center; flex-direction: column;width:250px;">
                            <h3 style="font-weight:bold; font-size:0.8rem; text-align:center;margin-bottom:5%;">${point.name}</h3>
                            <img src="${point.imageUrl}" alt="${point.name}" style="width:180px;height:120px;">
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
        </div>
        </div>
</body>

</html>
