<x-instructor-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} Lista Dash de Cursos
        </h2>
    </x-slot>

    <x-container class="mt-12">

  
        <div class="flex flex-col min-h-screen">
        <!-- otros contenidos -->
            <div class="md:flex md:justify-end mb-6">
                <a href="{{route('instructor.courses.create')}}" class="px-4 py-2 text-white bg-red-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                Crear cursos
                </a>
            </div>
            
        </div>

        <ul>
            @forelse ($courses as $course)
                <li class="bg-white rounded-lg shadow-lg overflow-hidden">
                <a href="{{route('instructor.courses.edit',$course)}}" class="flex">
                    <figure class="flex-shrink-0">
                        <img src="{{$course->image}}"
                        class="w-full md:w-16 h-16 object-cover object-center">
                    </figure>

                    <div class="flex-1">
                        <div class="py-4 px-8">    
                            <div class="grid grid-cols-9 gap-4">
                                <!-- Columna que ocupa 3 de las 9 -->
                                <div class="col-span-3">
                                    <h1>
                                        {{$course->title}}
                                    </h1>
                                    
                                    @switch($course->status->name)
                                        @case('BORRADOR')
                                            <span class="bg-danger-soft border border-danger-subtle text-fg-danger-strong text-xs font-medium px-1.5 py-0.5 rounded">
                                                {{$course->status->name}}
                                            </span>

                                            @break
                                        @case('PENDIENTE')
                                            <span class="bg-success-soft border border-success-subtle text-fg-success-strong text-xs font-medium px-1.5 py-0.5 rounded">
                                                {{$course->status->name}}
                                            </span>


                                            @break
                                        @case('PUBLICADO')
                                            <span class="bg-warning-soft border border-warning-subtle text-fg-warning text-xs font-medium px-1.5 py-0.5 rounded">
                                                {{$course->status->name}}
                                            </span>

                                            @break

                                            
                                            
                                    @endswitch
                                    

                                </div>

                                <!-- Columna que ocupa 2 de las 9 -->
                                <div class="col-span-2">
                                    <p class="text-sm font-bold">
                                        S./ 100
                                    </p>
                                    <p class="mb-1">
                                        Ganado este mes
                                    </p>
                                    <p class="text-sm font-bold">
                                        S./ 1000
                                    </p>
                                    <p class="text-sm font-bold">
                                        Ganado en total
                                    </p>
                                </div>

                                <!-- Columna restante (por defecto ocupa 1 de las 9) -->
                                <div class="col-span-2">
                                    <p>50</p>

                                    <p>
                                        Inscripciones este mes
                                    </p>
                                </div>

                                <!-- Columna restante (por defecto ocupa 1 de las 9) -->
                                <div class="col-span-2">
                                    <!-- Número de rating --> 
                                    <p class="text-sm font-medium">5</p>
                                    <!-- Lista de estrellas --> 
                                    <ul class="text-xs space-x-1 flex"> 
                                        <i class="fa-solid fa-star text-yellow-500 asdaldas"></i>
                                        <i class="fa-solid fa-star text-yellow-500 asdaldas"></i>
                                        <i class="fa-solid fa-star text-yellow-500 asdaldas"></i>
                                        <i class="fa-solid fa-star text-yellow-500 asdaldas"></i>
                                        <i class="fa-solid fa-star text-yellow-500 asdaldas"></i>                                
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </a>
                </li>
            
            @empty 
                <li class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex justify-between items-center">
                        <p>
                            Salta a crear curso
                        </p> 
                       
                        
                        <a href="#" class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
  Crear
</a>

                    </div>
                </li>
            @endforelse
        </ul>

    </x-container>



</x-instructor-layout>