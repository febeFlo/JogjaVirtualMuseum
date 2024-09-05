<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home Page</title>
</head>
<body>
    <div>
        <div class="absolute top-0 left-0 size-3/12 p-2">
            {{-- <div class="scroll-smooth">
                <ul>
                    @foreach ($comments as $value)
                        <div class="bg-slate-100 rounded-lg mb-2">
                            <li class="px-2 pt-2 font-semibold">{{ $value->user->name }}</li>
                            <li class="px-2 pb-2 text-sm">{{ $value['comment'] }}</li>
                        </div>
                    @endforeach
                </ul>
            </div> --}}

            <p class="font-bold justify-center text-xl">{{ $data['name'] }}</p>
            <p class="justify-center">{{ $data['titikUkur'] }}</p>

            <form action="{{ route('submit2') }}" method="POST">
                @csrf
                <div class="mt-3" style="height: 75vh; overflow: auto;">
                    <h2 class="font-bold">Rating soundscape</h2>
                    <p>Soundscape di lokasi menyenangkan:</p>
                    <input type="checkbox" name="answer[]" value="sangat tidak setuju"> sangat tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="tidak setuju"> tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="netral"> netral<br>
                    <input type="checkbox" name="answer[]" value="setuju"> setuju<br>
                    <input type="checkbox" name="answer[]" value="sangat setuju"> sangat setuju<br>

                    <p>Soundscape di lokasi ribut/semrawut:</p>
                    <input type="checkbox" name="answer[]" value="sangat tidak setuju"> sangat tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="tidak setuju"> tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="netral"> netral<br>
                    <input type="checkbox" name="answer[]" value="setuju"> setuju<br>
                    <input type="checkbox" name="answer[]" value="sangat setuju"> sangat setuju<br>

                    <p>Soundscape di lokasi bersemangat:</p>
                    <input type="checkbox" name="answer[]" value="sangat tidak setuju"> sangat tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="tidak setuju"> tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="netral"> netral<br>
                    <input type="checkbox" name="answer[]" value="setuju"> setuju<br>
                    <input type="checkbox" name="answer[]" value="sangat setuju"> sangat setuju<br>

                    <p>Soundscape di lokasi sepi:</p>
                    <input type="checkbox" name="answer[]" value="sangat tidak setuju"> sangat tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="tidak setuju"> tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="netral"> netral<br>
                    <input type="checkbox" name="answer[]" value="setuju"> setuju<br>
                    <input type="checkbox" name="answer[]" value="sangat setuju"> sangat setuju<br>

                    <p>Soundscape di lokasi tenang:</p>
                    <input type="checkbox" name="answer[]" value="sangat tidak setuju"> sangat tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="tidak setuju"> tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="netral"> netral<br>
                    <input type="checkbox" name="answer[]" value="setuju"> setuju<br>
                    <input type="checkbox" name="answer[]" value="sangat setuju"> sangat setuju<br>

                    <p>Soundscape di lokasi mengganggu:</p>
                    <input type="checkbox" name="answer[]" value="sangat tidak setuju"> sangat tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="tidak setuju"> tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="netral"> netral<br>
                    <input type="checkbox" name="answer[]" value="setuju"> setuju<br>
                    <input type="checkbox" name="answer[]" value="sangat setuju"> sangat setuju<br>

                    <p>Soundscape di lokasi ramai:</p>
                    <input type="checkbox" name="answer[]" value="sangat tidak setuju"> sangat tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="tidak setuju"> tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="netral"> netral<br>
                    <input type="checkbox" name="answer[]" value="setuju"> setuju<br>
                    <input type="checkbox" name="answer[]" value="sangat setuju"> sangat setuju<br>

                    <p>Soundscape di lokasi membosankan:</p>
                    <input type="checkbox" name="answer[]" value="sangat tidak setuju"> sangat tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="tidak setuju"> tidak setuju<br>
                    <input type="checkbox" name="answer[]" value="netral"> netral<br>
                    <input type="checkbox" name="answer[]" value="setuju"> setuju<br>
                    <input type="checkbox" name="answer[]" value="sangat setuju"> sangat setuju<br>

                    <p class="font-bold pt-5">Narasi singkat soundscape ideal</p>
                    <textarea id="text" name="text" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Tuliskan narasi singkat..." required ></textarea>

                    <input type="hidden" id="map_id" name="map_id" value="{{ $data['id'] }}">
                </div>
                <button type="submit" class="inline-flex justify-center items-center py-2.5 px-4 mt-3 font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200">
                    Kirim
                </button>
            </form>

            {{-- <form class="justify-center" action="{{ route('submit')}}" method="POST">
                @csrf
                <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required ></textarea>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                        <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Post comment
                        </button>
                    </div>
                </div>
            </form> --}}
        </div>

        <iframe class="absolute top-0 right-0 size-9/12 h-screen" src="{{$data['link']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <!-- width="560" height="315" -->
        <!-- w-full h-screen size-9/12 -->
    </div>
</body>
</html>
