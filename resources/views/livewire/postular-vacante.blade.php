<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postular a esta vacante</h3>

    <form class="w-96 mt-5">
        <div class="mb-4">
            <x-input-label class="mb-4" for="cv" :value="__('Curriculum u Hoja de Vida (PDF)')"></x-input-label>
            <x-text-input id="cv" type="file" accept=".pdf" class="block mt-1 w-full"></x-text-input>
        </div>

        <x-primary-button class="my-5 w-full justify-center">
            {{__('Postularme')}}
        </x-primary-button>
    </form>
</div> 
