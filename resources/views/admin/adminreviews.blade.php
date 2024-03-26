<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged as Admin!") }}
                </div>
            </div>
        </div>

        @foreach ($reviews as $review)
            <div class="alert alert-warning col">
                <h2>{{ $review->name }}</h2>
                <p>{{ $review->email }}</p>
                <p>{{ $review->massage }}</p>

                <a href="{{ route('reviews_one_admin', $review->id) }}" class="btn btn-success">Подробнее</a>
            </div>
        @endforeach
    </div>

</x-app-layout>
