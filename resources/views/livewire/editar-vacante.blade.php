<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante' novalidate>
    <!-- Título Vacante -->
    <div>
        <x-input-label for="titulo" :value="__('Título Vancante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" required autofocus placeholder="Ingresa el título de la vacante" />
        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <!-- Salario Vacante -->
    <div>
        <x-input-label for="salario" :value="__('Salario Vancante')" />
        <select wire:model="salario" id="salario" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{$salario->id}}">{{$salario->salario}}</option>
            @endforeach
        </select>
        @error('salario')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <!-- Categoria Vacante -->
    <div>
        <x-input-label for="categoria" :value="__('Categoria Vancante')" />
        <select wire:model="categoria" id="categoria" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
>           <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
        @error('categoria')
        <livewire:mostrar-alerta :message="$message"/>
    @enderror
    </div>

    <!-- Empresa -->
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" required autofocus placeholder="Ingresa el nombre de la empresa" />
        @error('empresa')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <!-- Último día de postulación -->
    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')" required autofocus />
        @error('ultimo_dia')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <!-- Descripción del puesto -->
    <div>
        <x-input-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea wire:model="descripcion" id="descripcion" cols="30" rows="10" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" placeholder="Descripcion general del puesto"></textarea>
        @error('descripcion')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <!-- Título Vacante -->
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 mb-5 w-full" type="file" wire:model="imagen_nueva" accept="image/*" autofocus/>
        
        <div class="my-5 w-80">
            <x-input-label :value="__('Imagen')" />
            <img src="{{ asset('storage/vacantes/' . $imagen)}}" alt="{{ 'Imagen Vacante ' . "titulo"}}">
        </div>
        
        <div class="my-5">
            @if($imagen_nueva)
                Preview Imagen Nueva:
                <img class="w-1/2 flex justify-items-center" src="{{ $imagen_nueva->temporaryURL()}}">
            @endif
        </div>

        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <x-primary-button class="w-full justify-center">
        Guardar Cambios
    </x-primary-button>
</form>