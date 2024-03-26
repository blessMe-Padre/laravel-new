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
    </div>

    <div class="alert alert-warning col">
        <h3>{{ $data->name }}</h3>
        <p>{{ $data->email }}</p>
        <p>{{ $data->massage }}</p>

        <a href="/reviews" class="btn btn-success">Назад</a>
        <a href="{{ route('reviews-edit', $data->id) }}" class="btn btn-success">Редактировать</a>
        <a href="{{ route('reviews-delete', $data->id) }}" class="btn btn-danger">Удалить</a>
    </div>

</x-app-layout>
