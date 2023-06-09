<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 mt-3 mb-9">
            {{$vacante->titulo}}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4">
            <p class="font-bold text-sm text-gray-800 my-3 uppercase">Empresa: 
                <span class="normal-case font-normal">{{$vacante->empresa}}</span>
            </p>

            <p class="font-bold text-sm text-gray-800 my-3 uppercase">Último día para postularse: 
                <span class="normal-case font-normal">{{$vacante->ultimo_dia->toFormattedDateString()}}</span>
            </p>

            <p class="font-bold text-sm text-gray-800 my-3 uppercase">Categoría: 
                <span class="normal-case font-normal">{{$vacante->categoria_id}}</span>
            </p>

            <p class="font-bold text-sm text-gray-800 my-3 uppercase">Salario: 
                <span class="normal-case font-normal">{{$vacante->salario_id}}</span>
            </p>
        </div>
    </div>
</div>
