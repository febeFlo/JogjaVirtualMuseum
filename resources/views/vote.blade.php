<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/checkbox_validation.js') }}"></script>
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
                                value="{{ $location['name'] }}" class="mr-2 peer" />
                            <label for="checkbox-{{ $loop->index }}" class="flex items-center cursor-pointer">
                                {{-- <span
                                    class="relative inline-block w-5 h-5 mr-2 border border-gray-400 rounded-sm peer-checked:bg-primary peer-checked:border-transparent">
                                    <svg class="absolute hidden w-4 h-4 text-white peer-checked:block"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 13l4 4L19 7" />
                                    </svg>
                                </span> --}}
                                {{ $location['name'] }}
                            </label>
                        </div>
                    @endforeach
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
</body>

</html>
