<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/checkbox_validation.js') }}"></script>
    <title>Vote</title>
</head>
<body>
    <h2 class="pt-8">Pilih 5 spot yang paling mewakili soundscape Kota Yogyakarta</h2>
        <form action="{{ route('submit1') }}" method="POST">
            @csrf
            <div class="mt-3" style="height: 60vh; overflow: auto;">
                @foreach ($data as $location)
                    <input type="checkbox" name="location[]" value="{{ $location['name'] }}"> {{ $location['name'] }}<br>
                @endforeach
            </div>
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
            <button type="submit" class="inline-flex justify-center items-center py-2.5 px-4 mt-3 font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200">
                Vote
            </button>
        </form>
</body>
</html>
