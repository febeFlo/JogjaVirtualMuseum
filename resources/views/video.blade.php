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
        <iframe class="size-9/12 h-screen" src="{{$data['link']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <!-- width="560" height="315" -->
        <!-- w-full h-screen size-9/12 -->

        <div class="absolute top-0 right-0 size-3/12 p-2">
            <div class="scroll-smooth">
                <ul>
                    @foreach ($comments as $value)
                        <div class="bg-slate-100 rounded-lg mb-2">
                            <li class="px-2 pt-2 font-semibold">{{ $value->user->name }}</li>
                            <li class="px-2 pb-2 text-sm">{{ $value['comment'] }}</li>
                        </div>
                    @endforeach
                </ul>
            </div>

            <form class="justify-center" action="{{ route('addComment')}}" method="POST">
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
            </form>
        </div>
    </div>
</body>
</html>
