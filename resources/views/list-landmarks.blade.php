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
            <h2 class="pt-8 text-xl font-bold text-center">
                List Landmarks
            </h2>
            <div class="px-5 mt-3" style="height: 60vh; overflow: auto;">
                @foreach ($data as $location)
                    <div class="flex items-center mb-2">
                        <a href="getLink/{{ $location['id'] }}" class="group">
                            <label
                                class="flex items-center cursor-pointer group-hover:text-blue-500 group-hover:font-semibold">
                                {{ $location['name'] }}
                            </label>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="{{ asset('js/checkbox_validation.js') }}"></script>
</body>

</html>
