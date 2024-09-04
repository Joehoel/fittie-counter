
@push('meta')
    <x-open-graph-image::metatags :title="$counter->name" :description="$counter->userOne->name . ' vs ' . $counter->userTwo->name" :name="$counter->name" :userOneName="$counter->userOne->name" :userOneScore="$counter->user_one_score" :userTwoName="$counter->userTwo->name" :userTwoScore="$counter->user_two_score" />
@endpush
<div class="h-screen w-screen flex flex-col sm:flex-row overflow-hidden relative">
    <!-- Blue side (User One) -->
    <div class="h-1/2 sm:h-full w-full sm:w-1/2 bg-blue-600 flex items-center justify-center p-4">
        <div class="text-center">
            <h2 class="text-white text-2xl sm:text-3xl font-semibold mb-2 sm:mb-4">{{ $counter->userOne->name }}</h2>
            <div class="bg-white text-blue-600 text-4xl sm:text-6xl font-bold p-4 sm:p-6 rounded-md">{{ $counter->user_one_score }}</div>
        </div>
    </div>

    <!-- Red side (User Two) -->
    <div class="h-1/2 sm:h-full w-full sm:w-1/2 bg-red-600 flex items-center justify-center p-4">
        <div class="text-center">
            <h2 class="text-white text-2xl sm:text-3xl font-semibold mb-2 sm:mb-4">{{ $counter->userTwo->name }}</h2>
            <div class="bg-white text-red-600 text-4xl sm:text-6xl font-bold p-4 sm:p-6 rounded-md">{{ $counter->user_two_score }}</div>
        </div>
    </div>

    <!-- VS text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div class="bg-white text-gray-800 text-3xl sm:text-4xl font-bold p-3 sm:p-4 rounded-full shadow-lg">VS</div>
    </div>

    <!-- Counter ID -->
    <div class="absolute top-2 left-2 sm:top-4 sm:left-4 bg-white text-gray-800 text-lg sm:text-xl font-semibold p-2 rounded-md shadow-lg">
        {{$counter->name}}
    </div>
</div>
