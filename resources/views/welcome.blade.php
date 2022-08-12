<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    <div class="m-10">
        <div class="flex items-center justify-center mb-10">
            <div>
                <h1 class="text-xl font-bold">Byte Solution Blogpost</h1>
            </div>
        </div>

        <a href="#" class="bg-blue-500 hover:bg-blue-400 m-2 px-3 py-1 rounded-lg"> + Blog Post erstellen</a>
        <a href="#" class="bg-blue-500 hover:bg-blue-400 m-2 px-3 py-1 rounded-lg"> + Kategorie erstellen</a>

        <div class="flex mt-5">
        <!-- First Blog Post example -->
        <div class="w-1/4 m-2 p-2 border">
            <div class="w-full h-32 justify-center px-2 py-2 bg-blue-100">
                <div class="flex justify-center">Blog Post Image!!</div>
            </div>
            <div>
                <a href="#"><span class="font-bold">First Blog Post</span></a>
                <p>
                    Dies ist ein Beispiel, wie ein Blog Post angezeigt werden kann. Dieses Template kann gerne beliebig
                    erweitert werden.
                </p>
                <p class="mt-3">
                    <small>Kategorien: Sport, Fussball</small>
                </p>
                <p class="mt-3">
                    <small>3 Kommentare</small>
                </p>
            </div>
            <div class="flex items-center mt-5">
                <a href="#" class="text-sm text-blue-300 hover:text-blue-400">Blog Post lesen</a>
                <span class="m-2">|</span>
                <a href="#" class="text-sm text-blue-300 hover:text-blue-400">bearbeiten</a>
                <span class="m-2">|</span>
                <a href="#" class="text-sm text-red-300 hover:text-red-400">löschen</a>
            </div>
        </div>

        <!-- Second Blog Post example -->
        <div class="w-1/4 m-2 p-2 border">
            <div class="w-full h-32 justify-center px-2 py-2 bg-blue-100">
                <div class="flex justify-center">Blog Post Image</div>
            </div>
            <div>
                <a href="#"><span class="font-bold">Second Blog Post</span></a>
                <p>
                    Dies ist ein Beispiel, wie ein Blog Post angezeigt werden kann. Dieses Template kann gerne beliebig erweitert werden.
                </p>
                <p class="mt-3">
                    <small>Kategorien: Filme</small>
                </p>
                <p class="mt-3">
                    <small>2 Kommentare</small>
                </p>
            </div>
            <div class="flex items-center mt-5">
                <a href="#" class="text-sm text-blue-300 hover:text-blue-400">Blog Post lesen</a>
                <span class="m-2">|</span>
                <a href="#" class="text-sm text-blue-300 hover:text-blue-400">bearbeiten</a>
                <span class="m-2">|</span>
                <a href="#" class="text-sm text-red-300 hover:text-red-400">löschen</a>
            </div>
        </div>
        </div>
    </div>
    </body>
</html>
