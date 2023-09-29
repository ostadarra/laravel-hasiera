<div>
    <x-secondary-button wire:click="$set('open', true)">
        Crear nueva entidad
    </x-danger-button>

    <x-dialog-modal wire:model.live="open">

        <x-slot name="title">
            Crear nueva entidad
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="imagen" class="mb-4 bg-indigo-900 text-center py-4 lg:px-4">
                <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                  <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Cargando imagen</span>
                  <span class="font-semibold mr-2 text-left flex-auto">Espere un momento</span>
                </div>
            </div>
            
            
            @if ($imagen)
                <img class="mb-4" src="{{ $imagen->temporaryUrl() }}">
            @endif

            <div class="mb-4">
                <x-label value="Nombre de la entidad:"/>
                <x-input type="text" class="w-full" wire:model='nombre'/>
                
                <x-input-error for="nombre" />
            </div>

            <div class="mb-4">
                <x-label value="Entidad padre:"/>
                <x-input type="text" class="w-full"  wire:model='padre_id'/>
                
                <x-input-error for="padre_id" />
            </div>

            <div class="mb-4">
                <x-label value="Contiene ficha:"/>
                <x-checkbox value="Sí" wire:model='ficha'/>
            </div>

            <div class="mb-4">
                <input type="file" wire:model.live='imagen'>
                <x-input-error for="imagen" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="$set('open', false)">
                Cancelar
            </x-danger-button>

            <x-primary-button wire:click="save" wire:loading.attr="disabled" wire:target='save, imagen' >
                Crear entidad
            </x-secondary-button>

            <span wire:loading wire:target='save'>Cargando...</span>
        </x-slot>

    </x-dialog-modal>
</div>
