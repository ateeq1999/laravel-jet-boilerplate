{{-- Steps Bar --}}
<div class="w-full py-6">
    <div class="flex">
      <div class="w-1/4">
        <div class="relative mb-2">
          <div class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
            <span class="text-center text-white w-full">
              <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm14 8V5H5v6h14zm0 2H5v6h14v-6zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
              </svg>
            </span>
          </div>
        </div>
  
        <div class="text-xs text-center md:text-base">{{ '1' }}</div>
    </div>

    {{-- Step Two --}}
  
    <div class="w-1/4">
        <div class="relative mb-2">
          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
              <div class="w-0 bg-green-300 py-1 rounded" style="{{ $step > 1 ? 'width: 100%;' : 'width: 33%;' }}"></div>
            </div>
          </div>
  
          <div class="w-10 h-10 mx-auto {{ $step > 1 ? 'bg-green-500' : 'bg-white' }} border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
            <span class="{{ $step > 1 ? 'text-center text-white w-full' : 'text-center text-gray-600 w-full' }}">
              <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
              </svg>
            </span>
          </div>
        </div>
  
        <div class="text-xs text-center md:text-base">{{ __('2') }}</div>
    </div>

    {{-- Step Three --}}

    <div class="w-1/4">
        <div class="relative mb-2">
          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
              <div class="w-0 bg-green-300 py-1 rounded" style="{{ $step > 2 ? 'width: 100%;' : 'width: 33%;' }}"></div>
            </div>
          </div>
  
          <div class="w-10 h-10 mx-auto {{ $step > 2 ? 'bg-green-500' : 'bg-white' }} border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
            <span class="{{ $step > 2 ? 'text-center text-white w-full' : 'text-center text-gray-600 w-full' }}">
              <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
              </svg>
            </span>
          </div>
        </div>
  
        <div class="text-xs text-center md:text-base">{{ __('3') }}</div>
    </div>

    {{-- Step Four --}}

    <div class="w-1/4">
        <div class="relative mb-2">
          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
              <div class="w-0 bg-green-300 py-1 rounded" style="{{ $step > 3 ? 'width: 100%;' : 'width: 33%;' }}"></div>
            </div>
          </div>
  
          <div class="w-10 h-10 mx-auto {{ $step > 3 ? 'bg-green-500' : 'bg-white' }} border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
            <span class="{{ $step > 3 ? 'text-center text-white w-full' : 'text-center text-gray-600 w-full' }}">
              <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
              </svg>
            </span>
          </div>
        </div>
  
        <div class="text-xs text-center md:text-base">{{'4'}}</div>
    </div>

    {{-- Step Five --}}

    <div class="w-1/4">
        <div class="relative mb-2">
          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
              <div class="w-0 bg-green-300 py-1 rounded" style="{{ $step > 4 ? 'width: 100%;' : 'width: 33%;' }}"></div>
            </div>
          </div>
  
          <div class="w-10 h-10 mx-auto {{ $step > 4 ? 'bg-green-500' : 'bg-white' }} border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
            <span class="{{ $step > 4 ? 'text-center text-white w-full' : 'text-center text-gray-600 w-full' }}">
              <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
              </svg>
            </span>
          </div>
        </div>
  
        <div class="text-xs text-center md:text-base">{{'5'}}</div>
    </div>

    {{-- Step Six --}}

    <div class="w-1/4">
        <div class="relative mb-2">
          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
              <div class="w-0 bg-green-300 py-1 rounded" style="{{ $step > 5 ? 'width: 100%;' : 'width: 33%;' }}"></div>
            </div>
          </div>
  
          <div class="w-10 h-10 mx-auto {{ $step > 5 ? 'bg-green-500' : 'bg-white' }} border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
            <span class="{{ $step > 5 ? 'text-center text-white w-full' : 'text-center text-gray-600 w-full' }}">
              <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
              </svg>
            </span>
          </div>
        </div>
  
        <div class="text-xs text-center md:text-base">{{'6'}}</div>
    </div>
    
    {{-- Step Seven --}}
    
    <div class="w-1/4">
        <div class="relative mb-2">
          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
              <div class="w-0 bg-green-300 py-1 rounded" style="{{ $step > 6 ? 'width: 100%;' : 'width: 33%;' }}"></div>
            </div>
          </div>
  
          <div class="w-10 h-10 mx-auto {{ $step > 6 ? 'bg-green-500' : 'bg-white' }} border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
            <span class="{{ $step > 6 ? 'text-center text-white w-full' : 'text-center text-gray-600 w-full' }}">
              <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
              </svg>
            </span>
          </div>
        </div>
  
        <div class="text-xs text-center md:text-base">{{'7'}}</div>
    </div>
    
    {{-- Last Step --}}
    
    <div class="w-1/4">
        <div class="relative mb-2">
          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
              <div class="w-0 bg-green-300 py-1 rounded" style="{{ $step > 7 ? 'width: 100%;' : 'width: 33%;' }}"></div>
            </div>
          </div>
  
          <div class="w-10 h-10 mx-auto {{ $step > 7 ? 'bg-green-500' : 'bg-white' }} border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
            <span class="{{ $step > 7 ? 'text-center text-white w-full' : 'text-center text-gray-600 w-full' }}">
              <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
              </svg>
            </span>
          </div>
        </div>
  
        <div class="text-xs text-center md:text-base">{{'8'}}</div>
    </div>
    
</div>

{{-- Question Section --}}
@foreach ($questions as $question)
    <div class="max-w-12xl mx-auto sm:px-12 lg:px-12 py-5" style="{{ $step === $question->id ? '' : 'display: none;'}}">
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="col-span-6 lg:col-span-6 py-5">
                <div class="my-5 text-lg font-medium md:text-base">
                    {{ $question->title }}
                </div>

                <div class="mt-1 border border-gray-200 rounded-lg cursor-pointer">
                        <div class="px-4 py-3 {{ $answers[$question->criteria] == 7 ? 'border-t border-gray-200' : '' }}"
                            wire:click="setHigh('{{ $question->criteria }}')">
                            <div class="{{ $answers[$question->criteria] == 7 ? 'opacity-50' : '' }}">
                                <div class="flex items-center">
                                    <div class="text-sm text-gray-600 {{ $answers[$question->criteria] == 7 ? 'font-semibold' : '' }}" autofocus>
                                        {{ 'High' }}
                                    </div>

                                    @if ($answers[$question->criteria] == 7)
                                        <svg class="ml-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    @endif
                                </div>

                            </div>
                        </div>
                </div>
                <div class="mt-1 border border-gray-200 rounded-lg cursor-pointer">
                        <div class="px-4 py-3 {{ $answers[$question->criteria] == 5 ? 'border-t border-gray-200' : '' }}"
                            wire:click="setMedium('{{ $question->criteria }}')">
                            <div class="{{ $answers[$question->criteria] == 5 ? 'opacity-50' : '' }}">
                                <div class="flex items-center">
                                    <div class="text-sm text-gray-600 {{ $answers[$question->criteria] == 7 ? 'font-semibold' : '' }}" autofocus>
                                        {{ 'Medium' }}
                                    </div>

                                    @if ($answers[$question->criteria] == 5)
                                        <svg class="ml-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    @endif
                                </div>

                            </div>
                        </div>
                </div>
                <div class="mt-1 border border-gray-200 rounded-lg cursor-pointer">
                        <div class="px-4 py-3 {{ $answers[$question->criteria] == 3 ? 'border-t border-gray-200' : '' }}"
                            wire:click="setLow('{{ $question->criteria }}')">
                            <div class="{{ $answers[$question->criteria] == 3 ? 'opacity-50' : '' }}">
                                <div class="flex items-center">
                                    <div class="text-sm text-gray-600 {{ $answers[$question->criteria] == 7 ? 'font-semibold' : '' }}" autofocus>
                                        {{ 'Low' }}
                                    </div>

                                    @if ($answers[$question->criteria] == 3)
                                        <svg class="ml-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    @endif
                                </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Toggle Buttons --}}
    <div class="px-6 py-4 bg-gray-100 text-right flex" style="{{ $step === $question->id ? '' : 'display: none;' }}">
    {{-- <div class="px-6 py-4 bg-gray-100 text-right flex" style="{{ $step === $question->id ? '' : 'display: none;' }}"> --}}

        <x-jet-button style="{{ $selected == true ? '' : 'display: none;' }}" class="mx-2 w-1/2" wire:click="decrementSteps()" wire:loading.attr="disabled">
            {{ __('Prev') }}
        </x-jet-button>

        <x-jet-secondary-button style="{{ $selected == true ? '' : 'display: none;' }}"  class="mx-2 w-1/2 py-4 disabled:opacity-25" wire:click="incrementSteps()" wire:loading.attr="disabled">
            {{ __('Next') }}
        </x-jet-secondary-button>
    
    </div>
@endforeach

