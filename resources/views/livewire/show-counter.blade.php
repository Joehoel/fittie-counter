<div class="h-screen w-screen flex overflow-hidden relative">
    <!-- Blue side (User One) -->
    <div class="w-1/2 bg-blue-600 flex items-center justify-center">
        <div class="text-center">
            <h2 class="text-white text-3xl font-semibold mb-4">{{ $counter->userOne->name }}</h2>
            <div class="bg-white text-blue-600 text-6xl font-bold p-6 rounded-md">{{ $counter->user_one_score }}</div>
        </div>
    </div>

    <!-- Red side (User Two) -->
    <div class="w-1/2 bg-red-600 flex items-center justify-center">
        <div class="text-center">
            <h2 class="text-white text-3xl font-semibold mb-4">{{ $counter->userTwo->name }}</h2>
            <div class="bg-white text-red-600 text-6xl font-bold p-6 rounded-md">{{ $counter->user_two_score }}</div>
        </div>
    </div>

    <!-- VS text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div class="bg-white text-gray-800 text-4xl font-bold p-4 rounded-full shadow-lg">VS</div>
    </div>

    <!-- Counter ID -->
    <div class="absolute top-4 left-4 bg-white text-gray-800 text-xl font-semibold p-2 rounded-md shadow-lg">
        {{$counter->name}}
    </div>
</div>
