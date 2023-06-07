<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($vacantes as $vacante)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center" >
            <div class="space-y-3">
                <a href="#" class="text-xl font-bold">
                    {{$vacante->titulo}}
                </a>
                <p class="text-sm font-bold text-gray-600">
                    {{$vacante->empresa}}
                </p>
                <p class="text-sm text-gray-500">
                    Último día: {{$vacante->ultimo_dia->format('d/m/Y')}}
                </p>
            </div>

            <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                <a href="#" class="bg-slate-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center uppercase">Candidatos</a>
                <a href="#" class="bg-blue-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center uppercase">Editar</a>
                <a href="#" class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center uppercase">Eliminar</a>
            </div>
        </div>
    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes a mostrar</p>
    @endforelse
</div>
