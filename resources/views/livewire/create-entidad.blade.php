<div>
    <x-secondary-button wire:click="$set('open', true)">
        Crear nueva entidad
    </x-danger-button>

    <x-dialog-modal wire:model.live="open">

        <x-slot name="title">
            Crear nueva entidad
        </x-slot>

        <x-slot name="content">
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
        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="$set('open', false)">
                Cancelar
            </x-danger-button>

            <x-primary-button wire:click="save" wire:loading.attr="disabled" wire:target='save' >
                Crear entidad
            </x-secondary-button>

            <span wire:loading wire:target='save'>Cargando...</span>
        </x-slot>

    </x-dialog-modal>
</div>
