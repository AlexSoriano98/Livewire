<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Crear nuevo post
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">Crear nuevo post</x-slot>
        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Imagen Cargando</strong>
                <span class="block sm:inline">Espere un momento a que procese la imagen.</span>
                
              </div>

            @if ($image)
                <img class="mb-4" src="{{$image->temporaryUrl()}}">    
            @endif            
            <div class="mb-4">
                <x-jet-label value="Titulo del post" />
                <x-jet-input class="w-full" type="text" wire:model="title" />
                <x-jet-input-error class="mt-2" for="title"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Contenido del post" />
                <textarea wire:model.defer="content" row="6" class="form-control w-full"></textarea>
                <x-jet-input-error class="mt-2" for="content"/>
            </div>
            <div>
                <input type="file" wire:model="image" id="{{$identificador}}">
                <x-jet-input-error class="mt-2" for="image"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save, image" class="disabled:opacity-25">
                Crear post
            </x-jet-danger-button>

            
        </x-slot>
    </x-jet-dialog-modal>
</div>
