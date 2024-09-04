<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <style>
        @font-face {
            font-family: ui-sans-serif;
            font-weight: 100;
            src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-ultralight-webfont.woff");
        }
        @font-face {
            font-family: ui-sans-serif;
            font-weight: 200;
            src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-thin-webfont.woff");
        }
        @font-face {
            font-family: ui-sans-serif;
            font-weight: 400;
            src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-regular-webfont.woff");
        }
        @font-face {
            font-family: ui-sans-serif;
            font-weight: 500;
            src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-medium-webfont.woff");
        }
        @font-face {
            font-family: ui-sans-serif;
            font-weight: 600;
            src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.woff");
        }
        @font-face {
            font-family: ui-sans-serif;
            font-weight: 700;
            src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-bold-webfont.woff");
        }
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="flex items-center justify-center min-h-screen">
        <div class="h-screen w-screen flex flex-col sm:flex-row overflow-hidden relative">
            <!-- Blue side (User One) -->
            <div class="h-1/2 sm:h-full w-full sm:w-1/2 bg-blue-600 flex items-center justify-center p-4">
                <div class="text-center">
                    <h2 class="text-white text-2xl sm:text-3xl font-semibold mb-2 sm:mb-4">{{ $userOneName }}</h2>
                    <div class="bg-white text-blue-600 text-4xl sm:text-6xl font-bold p-4 sm:p-6 rounded-md">{{ $userOneScore }}</div>
                </div>
            </div>

            <!-- Red side (User Two) -->
            <div class="h-1/2 sm:h-full w-full sm:w-1/2 bg-red-600 flex items-center justify-center p-4">
                <div class="text-center">
                    <h2 class="text-white text-2xl sm:text-3xl font-semibold mb-2 sm:mb-4">{{ $userTwoName }}</h2>
                    <div class="bg-white text-red-600 text-4xl sm:text-6xl font-bold p-4 sm:p-6 rounded-md">{{ $userTwoScore }}</div>
                </div>
            </div>

            <!-- VS text -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <div class="bg-white text-gray-800 text-3xl sm:text-4xl font-bold p-3 sm:p-4 rounded-full shadow-lg">VS</div>
            </div>

            <!-- Counter ID -->
            <div class="absolute top-2 left-2 sm:top-4 sm:left-4 bg-white text-gray-800 text-lg sm:text-xl font-semibold p-2 rounded-md shadow-lg">
                {{$name}}
            </div>
        </div>

    </body>
</html>
