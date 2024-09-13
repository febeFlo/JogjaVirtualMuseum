<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>Vote</title>
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="max-w-sm p-6 bg-white rounded-lg shadow-md">
            <h2 class="pt-8 text-xl font-bold text-center">Pilih 5 spot yang paling mewakili soundscape Kota Yogyakarta
            </h2>
            <form action="{{ route('submit1') }}" method="POST">
                @csrf
                {{-- <div class="px-5 mt-3" style="height: 60vh; overflow: auto;">
                    @foreach ($data as $location)
                        <input type="checkbox" name="location[]" value="{{ $location['name'] }}">
                        {{ $location['name'] }}<br>
                    @endforeach
                </div> --}}

                <div class="px-5 mt-3" style="height: 60vh; overflow: auto;">
                    @foreach ($data as $location)
                        <div class="flex items-center mb-2">
                            <input type="checkbox" id="checkbox-{{ $loop->index }}" name="location[]"
                                value="{{ $location['id'] }}" class="mr-2 peer"
                                @if (
                                    $getSelected &&
                                        ($location['id'] == $getSelected->lokasi1 ||
                                            $location['id'] == $getSelected->lokasi2 ||
                                            $location['id'] == $getSelected->lokasi3 ||
                                            $location['id'] == $getSelected->lokasi4 ||
                                            $location['id'] == $getSelected->lokasi5)) checked @endif />
                            <label for="checkbox-{{ $loop->index }}" class="flex items-center cursor-pointer">
                                {{ $location['name'] }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="flex items-center justify-center">
                    <textarea id="text" name="text" rows="2"
                        class="w-full px-1 my-2 text-sm text-gray-900 bg-white border-1 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                        placeholder="Tuliskan lokasi iconic yang menurut anda perlu ditambah. Gunakan (,) jika lebih dari 1" required></textarea>
                </div>

                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                <div class="flex items-center justify-center">
                    <button type="submit"
                        class="inline-flex justify-center items-center py-2.5 px-4 mt-3 font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 hover:bg-orange-400">
                        Vote
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/checkbox_validation.js') }}"></script>
</body>

</html>
