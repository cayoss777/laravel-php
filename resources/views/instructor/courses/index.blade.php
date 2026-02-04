<x-instructor-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} Lista Dash de Cursos
        </h2>
        </x-slot>

    <x-container class="mt-12">

  
    <div class="flex flex-col min-h-screen">
    <!-- otros contenidos -->
        <div class="mt-auto flex justify-end">
            <a href="{{route('instructor.courses.create')}}" class="btn btn-green block w-full md:w-auto text-center">
            Crear cursos
            </a>
        </div>
    </div>



    </x-container>



</x-instructor-layout>