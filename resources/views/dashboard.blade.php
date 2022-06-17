<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <center>
    <div>
    <a href="{{Route('form')}}"><button type="button" class="btn btn-success">Add your Article</button></a><br><br>
    <a href="{{Route('table')}}"><button type="button" class="btn btn-success">Read your Article</button></a>
    </div>
</x-app-layout>
