<!DOCTYPE html>
<html lang="ja" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-full">
<div class="min-h-full">
    <header class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-lg font-bold text-white">TODO APP</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="flex gap-4">
                    <div class="w-64">
                        <div class="border border-gray-100 rounded shadow">
                            <div class="p-2 text-gray-500 bg-gray-200 rounded-t">
                                フォルダ
                            </div>
                            <div class="border-b border-inherit p-2 bg-white">
                                <button class="px-2 py-1 border bg-gray-50 border-inherit text-gray-500 rounded hover:bg-gray-100 w-full">フォルダを追加</button>
                            </div>
                            <div class="flex flex-col bg-white rounded-b divide-y divide-inherit">
                                @foreach($folders as $folder)
                                    <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="p-2 {{ $current_folder_id === $folder->id ? 'bg-blue-400 text-white' : '' }}">
                                        {{ $folder->title }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="flex-1"></div>
                </div>
        </div>
    </main>
</div>
</body>
</html>
