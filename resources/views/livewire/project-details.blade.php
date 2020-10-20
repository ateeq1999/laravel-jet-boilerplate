<div class="shadow overflow-hidden sm:rounded-md">
    <div class="px-4 py-5 bg-white sm:p-6">
        <div class="grid grid-cols-1 gap-6">
            <div>
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" wire:model="name" />
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6">
            <div>
                <x-jet-label value="{{ __('Company Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" wire:model="company_name" />
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6">
            <div>
                <x-jet-label value="{{ __('Type') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="type" wire:model="type" />
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6">
            <div>
                <x-jet-label value="{{ __('Year') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="year" wire:model="year" />
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6">
            <div>
                <x-jet-label value="{{ __('Manager') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="manager" wire:model="manager" />
            </div>
        </div>

        <div class="mt-5 px-6 py-4 bg-gray-100 text-right flex justify-end ">
            <x-jet-secondary-button  class="mx-2 py-4 bg-green-400 disabled:opacity-25" wire:click="submit()" wire:loading.attr="disabled">
                {{ __('submit') }}
            </x-jet-secondary-button>
        </div>

    </div>

</div>