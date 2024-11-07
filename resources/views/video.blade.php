<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    <title>Home Page</title>
</head>

<body>
    <div>
        <div class="flex items-center">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/back.png') }}" class="w-[20px] mt-3 ml-4"></a>
        </div>
        <div class="absolute top-0 left-0 p-2 ml-6 mt-7 size-3/12 ">

            <p class="justify-center text-xl text-center font-bold mr-10">{{ $data->name }}</p>
            <p class="justify-center text-center mr-10">{{ $data->titikUkur }}</p>

            <form action="{{ route('submit2') }}" method="POST">
                @csrf
                <div class="mt-3 overflow-auto ps-3" style="height: 70vh;">
                    <h2 class="font-bold">Rating soundscape</h2>

                    <p>Soundscape di lokasi menyenangkan:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-0" name="answer[0]" value="sangat tidak setuju" {{ $answers['lokasi_menyenangkan'] == 'sangat tidak setuju' ? 'checked' : '' }}>
                        <label for="sangat-tidak-setuju-0" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-0" name="answer[0]" value="tidak setuju" {{ $answers['lokasi_menyenangkan'] == 'tidak setuju' ? 'checked' : '' }}>
                        <label for="tidak-setuju-0" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-0" name="answer[0]" value="netral" {{ $answers['lokasi_menyenangkan'] == 'netral' ? 'checked' : '' }}>
                        <label for="netral-0" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-0" name="answer[0]" value="setuju" {{ $answers['lokasi_menyenangkan'] == 'setuju' ? 'checked' : '' }}>
                        <label for="setuju-0" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-0" name="answer[0]" value="sangat setuju" {{ $answers['lokasi_menyenangkan'] == 'sangat setuju' ? 'checked' : '' }}>
                        <label for="sangat-setuju-0" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p>Soundscape di lokasi ribut/semrawut:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-1" name="answer[1]" value="sangat tidak setuju" {{ $answers['lokasi_ribut'] == 'sangat tidak setuju' ? 'checked' : '' }}>
                        <label for="sangat-tidak-setuju-1" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-1" name="answer[1]" value="tidak setuju" {{ $answers['lokasi_ribut'] == 'tidak setuju' ? 'checked' : '' }}>
                        <label for="tidak-setuju-1" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-1" name="answer[1]" value="netral" {{ $answers['lokasi_ribut'] == 'netral' ? 'checked' : '' }}>
                        <label for="netral-1" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-1" name="answer[1]" value="setuju" {{ $answers['lokasi_ribut'] == 'setuju' ? 'checked' : '' }}>
                        <label for="setuju-1" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-1" name="answer[1]" value="sangat setuju" {{ $answers['lokasi_ribut'] == 'sangat setuju' ? 'checked' : '' }}>
                        <label for="sangat-setuju-1" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p>Soundscape di lokasi bersemangat:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-1" name="answer[2]" value="sangat tidak setuju" {{ $answers['lokasi_ribut'] == 'sangat tidak setuju' ? 'checked' : '' }}>
                        <label for="sangat-tidak-setuju-1" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-1" name="answer[2]" value="tidak setuju" {{ $answers['lokasi_ribut'] == 'tidak setuju' ? 'checked' : '' }}>
                        <label for="tidak-setuju-1" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-1" name="answer[2]" value="netral" {{ $answers['lokasi_ribut'] == 'netral' ? 'checked' : '' }}>
                        <label for="netral-1" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-1" name="answer[2]" value="setuju" {{ $answers['lokasi_ribut'] == 'setuju' ? 'checked' : '' }}>
                        <label for="setuju-1" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-1" name="answer[2]" value="sangat setuju" {{ $answers['lokasi_ribut'] == 'sangat setuju' ? 'checked' : '' }}>
                        <label for="sangat-setuju-1" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p>Soundscape di lokasi sepi:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-1" name="answer[3]" value="sangat tidak setuju" {{ $answers['lokasi_ribut'] == 'sangat tidak setuju' ? 'checked' : '' }}>
                        <label for="sangat-tidak-setuju-1" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-1" name="answer[3]" value="tidak setuju" {{ $answers['lokasi_ribut'] == 'tidak setuju' ? 'checked' : '' }}>
                        <label for="tidak-setuju-1" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-1" name="answer[3]" value="netral" {{ $answers['lokasi_ribut'] == 'netral' ? 'checked' : '' }}>
                        <label for="netral-1" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-1" name="answer[3]" value="setuju" {{ $answers['lokasi_ribut'] == 'setuju' ? 'checked' : '' }}>
                        <label for="setuju-1" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-1" name="answer[3]" value="sangat setuju" {{ $answers['lokasi_ribut'] == 'sangat setuju' ? 'checked' : '' }}>
                        <label for="sangat-setuju-1" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p>Soundscape di lokasi tenang:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-1" name="answer[4]" value="sangat tidak setuju" {{ $answers['lokasi_ribut'] == 'sangat tidak setuju' ? 'checked' : '' }}>
                        <label for="sangat-tidak-setuju-1" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-1" name="answer[4]" value="tidak setuju" {{ $answers['lokasi_ribut'] == 'tidak setuju' ? 'checked' : '' }}>
                        <label for="tidak-setuju-1" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-1" name="answer[4]" value="netral" {{ $answers['lokasi_ribut'] == 'netral' ? 'checked' : '' }}>
                        <label for="netral-1" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-1" name="answer[4]" value="setuju" {{ $answers['lokasi_ribut'] == 'setuju' ? 'checked' : '' }}>
                        <label for="setuju-1" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-1" name="answer[4]" value="sangat setuju" {{ $answers['lokasi_ribut'] == 'sangat setuju' ? 'checked' : '' }}>
                        <label for="sangat-setuju-1" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p>Soundscape di lokasi mengganggu:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-1" name="answer[5]" value="sangat tidak setuju" {{ $answers['lokasi_ribut'] == 'sangat tidak setuju' ? 'checked' : '' }}>
                        <label for="sangat-tidak-setuju-1" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-1" name="answer[5]" value="tidak setuju" {{ $answers['lokasi_ribut'] == 'tidak setuju' ? 'checked' : '' }}>
                        <label for="tidak-setuju-1" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-1" name="answer[5]" value="netral" {{ $answers['lokasi_ribut'] == 'netral' ? 'checked' : '' }}>
                        <label for="netral-1" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-1" name="answer[5]" value="setuju" {{ $answers['lokasi_ribut'] == 'setuju' ? 'checked' : '' }}>
                        <label for="setuju-1" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-1" name="answer[5]" value="sangat setuju" {{ $answers['lokasi_ribut'] == 'sangat setuju' ? 'checked' : '' }}>
                        <label for="sangat-setuju-1" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p>Soundscape di lokasi ramai:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-1" name="answer[6]" value="sangat tidak setuju" {{ $answers['lokasi_ribut'] == 'sangat tidak setuju' ? 'checked' : '' }}>
                        <label for="sangat-tidak-setuju-1" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-1" name="answer[6]" value="tidak setuju" {{ $answers['lokasi_ribut'] == 'tidak setuju' ? 'checked' : '' }}>
                        <label for="tidak-setuju-1" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-1" name="answer[6]" value="netral" {{ $answers['lokasi_ribut'] == 'netral' ? 'checked' : '' }}>
                        <label for="netral-1" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-1" name="answer[6]" value="setuju" {{ $answers['lokasi_ribut'] == 'setuju' ? 'checked' : '' }}>
                        <label for="setuju-1" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-1" name="answer[6]" value="sangat setuju" {{ $answers['lokasi_ribut'] == 'sangat setuju' ? 'checked' : '' }}>
                        <label for="sangat-setuju-1" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p>Soundscape di lokasi membosankan:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-1" name="answer[7]" value="sangat tidak setuju" {{ $answers['lokasi_ribut'] == 'sangat tidak setuju' ? 'checked' : '' }}>
                        <label for="sangat-tidak-setuju-1" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-1" name="answer[7]" value="tidak setuju" {{ $answers['lokasi_ribut'] == 'tidak setuju' ? 'checked' : '' }}>
                        <label for="tidak-setuju-1" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-1" name="answer[7]" value="netral" {{ $answers['lokasi_ribut'] == 'netral' ? 'checked' : '' }}>
                        <label for="netral-1" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-1" name="answer[7]" value="setuju" {{ $answers['lokasi_ribut'] == 'setuju' ? 'checked' : '' }}>
                        <label for="setuju-1" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-1" name="answer[7]" value="sangat setuju" {{ $answers['lokasi_ribut'] == 'sangat setuju' ? 'checked' : '' }}>
                        <label for="sangat-setuju-1" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p class="pt-5 font-bold">Narasi singkat soundscape ideal</p>
                    <textarea id="text" name="text" rows="4"
                        class="w-5/6 px-1 text-sm text-gray-900 bg-white border-1 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                        placeholder="Tuliskan narasi singkat..." required>{{ $previousNarrative }}</textarea>

                    <input type="hidden" id="map_id" name="map_id" value="{{ $data->id }}">
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                </div>
                <button type="submit"
                    class="inline-flex justify-center w-[85%]  items-center py-2.5 px-4 mt-3 font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 hover:bg-orange-400">
                    Kirim
                </button>
            </form>
        </div>

        <iframe class="absolute top-0 right-0 h-screen size-9/12" src="{{ $data->link }}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</body>

</html>
