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

    </style>
</head>
<body>
    <a href="home" class="absolute px-4 py-2 z-20 font-bold text-white bg-gray-500 rounded top-4 left-4 hover:bg-gray-600">Back</a>
    <div class="flex bgW  items-center justify-center h-screen">
        <div class="max-w-lg p-6 bg-white my-[4%] mx-[5%]  rounded-lg shadow-md">
            <h2 class="pt-5 text-xl font-bold text-center">Pilih 5 spot yang paling mewakili soundscape Kota Yogyakarta</h2>
            <form action="{{ route('submit1') }}" method="POST">
                @csrf
                <div class="px-5 mt-3 grid grid-cols-1 sm:grid-cols-2 gap-4" style="height: 50vh; overflow-y: auto;">
                    @foreach ($data as $location)
                        <div class="relative">
                            
                            <input type="checkbox" id="checkbox-{{ $loop->index }}" name="location[]" value="{{ $location['id'] }}" class="hidden peer"
                                @if (
                                    $getSelected &&
                                        ($location['id'] == $getSelected->lokasi1 ||
                                            $location['id'] == $getSelected->lokasi2 ||
                                            $location['id'] == $getSelected->lokasi3 ||
                                            $location['id'] == $getSelected->lokasi4 ||
                                            $location['id'] == $getSelected->lokasi5)) checked @endif />
                            <label for="checkbox-{{ $loop->index }}" class="flex items-center justify-center flex-col p-4 border rounded-lg shadow-sm cursor-pointer h-[180px] transition-all duration-150 hover:bg-gray-100 peer-checked:bg-orange-500 peer-checked:border-orange-500 peer-checked:text-white">
                                <span class="text-md font-medium text-center mt-2">{{ $location['name'] }}</span>
                            </label>

                        </div>
                    @endforeach
                </div>

                <div class="flex items-center justify-center mt-3">
                    <textarea id="text" name="text" rows="2" class="w-full px-1 my-2 text-sm text-gray-900 bg-white border-1 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Tuliskan lokasi iconic yang menurut anda perlu ditambah. Gunakan (,) jika lebih dari 1"></textarea>
                </div>

                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                <div class="flex items-center justify-center">
                    <button type="submit" class="inline-flex justify-center w-full items-center py-2.5 px-4 mt-3 font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 hover:bg-orange-400">
                        Vote
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/checkbox_validation.js') }}"></script>
</body>
</html>
