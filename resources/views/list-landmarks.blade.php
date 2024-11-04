<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Vote</title>
    <style>
        
    .bgW {
        position: relative;
        overflow: hidden;
    }

    .bgW::before {
        content: "";
        position: absolute;
        top: -5%;
        left: -5%;
        right: -5%;
        bottom: -5%;
        background-image: url('{{ asset('assets/wp4189983.jpg') }}');
        background-size: 110% 110%;
        background-position: center;
        filter: blur(8px);
        z-index: -1;
    }

    /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: rgb(254 215 170);
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: rgb(249 115 22);
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: rgb(251 146 60);
}

    </style>
</head>

<body>
    <div class="flex bgW items-center justify-center h-screen">
        <div class="max-w-md p-6 bg-white rounded-lg shadow-md">
            <h2 class="pt-8 text-xl font-bold text-center">
                List Lokasi Ikonik
            </h2>
            <div class="px-5 mt-3 grid grid-cols-1 sm:grid-cols-2 gap-4" style="height: 60vh; overflow: auto;">
                @foreach ($data as $location)
                    <div class="flex items-center mb-2">
                        <a href="getLink/{{ $location['id'] }}" class="group">
                        <label  class="flex items-center justify-center flex-col p-4 border rounded-lg shadow-sm cursor-pointer h-[180px] transition-all duration-150 hover:bg-orange-500 hover:text-white">
                                <img src="assets/jogjaView.jpg" class="w-full object-cover rounded-lg"/>
                                <span class="text-md font-medium text-center mt-2">{{ $location['name'] }}</span>
                            </label>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center mt-5">
                <a href="home" class="inline-flex justify-center w-full items-center py-2.5 px-4 mt-3 font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 hover:bg-orange-400">
                    Back to Map
                </a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/checkbox_validation.js') }}"></script>
</body>

</html>
