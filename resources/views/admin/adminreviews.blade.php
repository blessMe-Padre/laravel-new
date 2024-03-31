<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged as Admin!") }}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($reviews as $review)
                    <div class="alert alert-warning col">
                        <h2 class="mb-2">{{ $review->name }}</h2>
                        <p class="mb-2">{{ $review->email }}</p>
                        <p class="mb-2">{{ $review->massage }}</p>

                        <a href="{{ route('reviews_one_admin', $review->id) }}" class="btn btn-success">Подробнее</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
