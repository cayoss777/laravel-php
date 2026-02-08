<x-instructor-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Curso {{$course->title}}
            </h2>
        </x-slot>




<div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
  <!-- Columna lateral (1 de 5) -->
  <aside class="col-span-1 bg-gray-100 p-4 rounded">
    Lateral

    <nav>
        <ul>
            <li class="border-l-4 border-indigo-400">
                <a href="{{route('instructor.courses.edit',$course)}}">
                informacion del curso
                </a>

                
            </li>
        </ul>
    </nav>
  </aside>

  <!-- Columna principal (4 de 5) -->
  
  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <div class="bg-gray-200  p-4">
        <form action="{{ route('instructor.courses.update',$course) }}" 
          method="POST" 
          enctype="multipart/form-data">
          @csrf 
          @method('PUT') 
          <p class="text-2xl font-semibold"> 
            Información del curso 
          </p> 
          <hr class="mt-2 mb-6"> 
          <x-validation-errors/>
            <div class="mb-4">
              <x-label value="Título del curso"/>
              <x-input class="w-full" value="{{ old('title', $course->title) }}" name="title"/>
            </div>
            <!-- Aquí puedes añadir tus inputs -->
            @empty($course->published_at)
            
              <div class="mb-4">
                  <x-label value="Slug del curso"/>
                  <x-input class="w-full" value="{{ old('slug', $course->slug) }}" name="slug"/>
              </div>
            @endempty

            <div class="mb-4">
              <x-label value="Resumen del curso"/>
              <x-textarea class="w-full" name="summary">{{ old('summary', $course->summary) }}</x-textarea>
            </div>
             <div class="mb-4">
              <x-label value="Descripción del curso"/>
              <x-textarea class="w-full" name="description">{{ old('description', $course->description) }}</x-textarea>
            </div>


                 <div class="grid grid-cols-3 gap-4 mb-4">
                    
                    <div>
                        <x-label class="mb-1">
                        Categorias
                        </x-label>

                    <x-select class="w-full" name="category_id">
                        <option value="" selected>Selecciona una categoría</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @selected(old('category_id',$course->category_id) == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </x-select>


                    </div>

                      <div> 
                        <x-label class="mb-1">
                        Niveles
                        </x-label>

                        <x-select class="w-full"
                        name="level_id">
                        <option value="" selected>Selecciona una categoría</option>
                        @foreach ($levels as $level)
                            <option value="{{$level->id}}" 
                                    @selected(old('level_id',$course->level_id)==$level->id)>
                                    {{$level->name}}
                            </option>
                        @endforeach
                        </x-select>
                    </div>

                     <div> 
                        <x-label class="mb-1">
                        Precios
                        </x-label>

                        <x-select class="w-full"
                        name="price_id">
                        <option value="" selected>Selecciona una categoría</option>
                        @foreach ($prices as $price)
                            <option value="{{$price->id}}" 
                                    @selected(old('price_id',$course->price_id)==$price->id)>

                                    @if($price->value==0)
                                    Gratis
                                    @else
                                    {{$price->value}} S./ (nivel {{$loop->index}})
                                    @endif 
                                    
                            </option>
                        @endforeach
                        </x-select>
                        
                    </div>
                </div>

                <div class="text-2xl font-semibold mb-2">
                  <p>
                    Imagen de curso
                  </p>

                  <div class="grid grid-cols2 gap-4">
                    <figure>
                     <img id="imgPreview" class="w-full aspect-video" src="{{$course->image}}">

                     


                      <!--<img id="imgPreview" class="w-full aspect-video" src="{ Storage::url($course->image) }}">-->


                    </figure>
                    <div>
                      <p>Lorem</p>
                      <label>
                          <span class="btn btn-blue md:hidden">
                            Selecciona una imagen
                          </span>
                    
    <input type="file" name="image" accept="image/*" onchange="preview_image(event, '#imgPreview')" />
    
    

                      </label>
                      
                      <div class="flex justify-end mt-4">
                        <x-button>
                          Guardar cambios
                        </x-button>
                      </div>
                    </div>
                  </div>
                  
                </div>
        </form>
    </div>
  </div>
  <div class="bg-gray-200 p-4">Grid 2</div>
  <div class="bg-gray-200 p-4">Grid 3</div>
  <div class="bg-gray-200 p-4">Grid 4</div>
</div>


</x-instructor-layout>

<script src="{{ asset('vendor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>


<script src="{{ asset('js/preview_image.js') }}"></script>

