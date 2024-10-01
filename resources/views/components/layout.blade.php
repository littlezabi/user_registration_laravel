<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <script src="http://cdn.tailwindcss.com"></script>
</head>

<body class="h-full bg-black text-white">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/">Home</a>
                                <a href="/user/create">regsiter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 bg-slate-900 text-white">
            {{ $slot }}
        </div>
        </main>
    </div>
</body>
