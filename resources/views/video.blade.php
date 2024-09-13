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
        <div class="absolute top-0 left-0 p-2 ml-6 mt-7 size-3/12">
            {{-- <div class="scroll-smooth">
                <ul>
                    @foreach ($comments as $value)
                        <div class="mb-2 rounded-lg bg-slate-100">
                            <li class="px-2 pt-2 font-semibold">{{ $value->user->name }}</li>
                            <li class="px-2 pb-2 text-sm">{{ $value['comment'] }}</li>
                        </div>
                    @endforeach
                </ul>
            </div> --}}


            <p class="justify-center text-xl font-bold">{{ $data['name'] }}</p>
            <p class="justify-center">{{ $data['titikUkur'] }}</p>

            <form action="{{ route('submit2') }}" method="POST">
                @csrf
                <div class="mt-3 overflow-auto ps-3" style="height: 75vh;">
                    <h2 class="font-bold">Rating soundscape</h2>
                    <p>Soundscape di lokasi menyenangkan:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-0" name="answer[0]" value="sangat tidak setuju">
                        <label for="sangat-tidak-setuju-0" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-0" name="answer[0]" value="tidak setuju">
                        <label for="tidak-setuju-0" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-0" name="answer[0]" value="netral">
                        <label for="netral-0" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-0" name="answer[0]" value="setuju">
                        <label for="setuju-0" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-0" name="answer[0]" value="sangat setuju">
                        <label for="sangat-setuju-0" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p>Soundscape di lokasi ribut/semrawut:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-1" name="answer[1]" value="sangat tidak setuju">
                        <label for="sangat-tidak-setuju-1" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-1" name="answer[1]" value="tidak setuju">
                        <label for="tidak-setuju-1" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-1" name="answer[1]" value="netral">
                        <label for="netral-1" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-1" name="answer[1]" value="setuju">
                        <label for="setuju-1" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-1" name="answer[1]" value="sangat setuju">
                        <label for="sangat-setuju-1" class="cursor-pointer">sangat setuju</label><br>
                    </div>

                    <p>Soundscape di lokasi bersemangat:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-2" name="answer[2]" value="sangat tidak setuju">
                        <label for="sangat-tidak-setuju-2" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-2" name="answer[2]" value="tidak setuju">
                        <label for="tidak-setuju-2" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-2" name="answer[2]" value="netral">
                        <label for="netral-2" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-2" name="answer[2]" value="setuju">
                        <label for="setuju-2" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-2" name="answer[2]" value="sangat setuju">
                        <label for="sangat-setuju-2" class="cursor-pointer">sangat setuju</label><br>
                    </div>


                    <p>Soundscape di lokasi sepi:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-3" name="answer[3]" value="sangat tidak setuju">
                        <label for="sangat-tidak-setuju-3" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-3" name="answer[3]" value="tidak setuju">
                        <label for="tidak-setuju-3" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-3" name="answer[3]" value="netral">
                        <label for="netral-3" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-3" name="answer[3]" value="setuju">
                        <label for="setuju-3" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-3" name="answer[3]" value="sangat setuju">
                        <label for="sangat-setuju-3" class="cursor-pointer">sangat setuju</label><br>
                    </div>


                    <p>Soundscape di lokasi tenang:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-4" name="answer[4]" value="sangat tidak setuju">
                        <label for="sangat-tidak-setuju-4" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-4" name="answer[4]" value="tidak setuju">
                        <label for="tidak-setuju-4" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-4" name="answer[4]" value="netral">
                        <label for="netral-4" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-4" name="answer[4]" value="setuju">
                        <label for="setuju-4" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-4" name="answer[4]" value="sangat setuju">
                        <label for="sangat-setuju-4" class="cursor-pointer">sangat setuju</label><br>
                    </div>


                    <p>Soundscape di lokasi mengganggu:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-5" name="answer[5]" value="sangat tidak setuju">
                        <label for="sangat-tidak-setuju-5" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-5" name="answer[5]" value="tidak setuju">
                        <label for="tidak-setuju-5" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-5" name="answer[5]" value="netral">
                        <label for="netral-5" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-5" name="answer[5]" value="setuju">
                        <label for="setuju-5" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-5" name="answer[5]" value="sangat setuju">
                        <label for="sangat-setuju-5" class="cursor-pointer">sangat setuju</label><br>
                    </div>


                    <p>Soundscape di lokasi ramai:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-6" name="answer[6]" value="sangat tidak setuju">
                        <label for="sangat-tidak-setuju-6" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-6" name="answer[6]" value="tidak setuju">
                        <label for="tidak-setuju-6" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-6" name="answer[6]" value="netral">
                        <label for="netral-6" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-6" name="answer[6]" value="setuju">
                        <label for="setuju-6" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-6" name="answer[6]" value="sangat setuju">
                        <label for="sangat-setuju-6" class="cursor-pointer">sangat setuju</label><br>
                    </div>


                    <p>Soundscape di lokasi membosankan:</p>
                    <div>
                        <input type="radio" id="sangat-tidak-setuju-7" name="answer[7]" value="sangat tidak setuju">
                        <label for="sangat-tidak-setuju-7" class="cursor-pointer">sangat tidak setuju</label><br>

                        <input type="radio" id="tidak-setuju-7" name="answer[7]" value="tidak setuju">
                        <label for="tidak-setuju-7" class="cursor-pointer">tidak setuju</label><br>

                        <input type="radio" id="netral-7" name="answer[7]" value="netral">
                        <label for="netral-7" class="cursor-pointer">netral</label><br>

                        <input type="radio" id="setuju-7" name="answer[7]" value="setuju">
                        <label for="setuju-7" class="cursor-pointer">setuju</label><br>

                        <input type="radio" id="sangat-setuju-7" name="answer[7]" value="sangat setuju">
                        <label for="sangat-setuju-7" class="cursor-pointer">sangat setuju</label><br>
                    </div>


                    <p class="pt-5 font-bold">Narasi singkat soundscape ideal</p>
                    <textarea id="text" name="text" rows="4"
                        class="w-5/6 px-1 text-sm text-gray-900 bg-white border-1 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                        placeholder="Tuliskan narasi singkat..." required></textarea>

                    <input type="hidden" id="map_id" name="map_id" value="{{ $data['id'] }}">
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                </div>
                <button type="submit"
                    class="inline-flex justify-center items-center py-2.5 px-4 mt-3 font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 hover:bg-orange-400">
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

        <iframe class="absolute top-0 right-0 h-screen size-9/12" src="{{ $data['link'] }}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <!-- width="560" height="315" -->
        <!-- w-full h-screen size-9/12 -->
    </div>
</body>

</html>
