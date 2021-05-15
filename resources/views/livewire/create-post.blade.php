<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Crear nuevo post
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">Crear nuevo post</x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Titulo del post"/>
                <x-jet-input class="w-full" type="text" wire:model.defer="title"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Contenido del post"/>
                <textarea wire:model.defer="content" row="6" class="form-control w-full"></textarea>    
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">
                Crear post
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>