<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <x-tabla>
            
            <div class="px-6 py-4 flex items-center">
                <x-input class="flex-1 mr-4"  wire:model.live="search" placeholder="Búsqueda..."/>
                
                @livewire('create-entidad')
            </div>



            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th wire:click="orden('id')" scope="col" class="cursor-pointer py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Id
                            @if ($sort == 'id')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th wire:click="orden('nombre')" scope="col" class="cursor-pointer px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Nombre
                            @if ($sort == 'nombre')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>

                        <th wire:click="orden('padre_id')" scope="col" class="cursor-pointer px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Id padre
                            @if ($sort == 'padre_id')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>

                        <th wire:click="orden('ficha')" scope="col" class="cursor-pointer px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Ficha
                            @if ($sort == 'ficha')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th wire:click="orden('imagen')" scope="col" class="cursor-pointer px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Imagen
                            @if ($sort == 'ficha')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="relative py-3.5 px-4">
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900">
                    @forelse ($entidades as $entidad)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $entidad->id }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $entidad->nombre }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $entidad->padre_id }}
                                </div>
                            </td>
                            
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $entidad->ficha }}
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $entidad->imagen }}
                                </div>
                            </td>

                            <td class="px-6 py-4 text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    @empty
                        <h3>No hay elementos para listar</h3>
                    @endforelse   
                </tbody>
            </table>
        </x-tabla>


    </div>
</div>
