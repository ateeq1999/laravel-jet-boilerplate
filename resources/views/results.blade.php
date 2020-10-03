<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Result') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="py-8 px-4">
                    <div class="flex flex-wrap -mx-4">
                      <div class="w-full lg:w-1/5 px-4 mb-6 lg:mb-0">
                        <div class="h-full">
                          <div class="flex justify-between items-end mb-2">
                            <h3 class="text-lg font-heading font-semibold">{{ __('Waterfall') }}</h3>
                            <span class="text-5xl leading-none text-blue-700">{{ $scores['waterfall'] }}</span>
                          </div>
                          <div class="w-full h-4 bg-gray-300 rounded">
                            <div class="h-full bg-blue-500" style="width: 62%;"> </div>
                          </div>
                        </div>
                      </div>
                      <div class="w-full lg:w-1/5 px-4 mb-6 lg:mb-0">
                        <div class="h-full">
                          <div class="flex justify-between items-end mb-2">
                            <h3 class="text-lg font-heading font-semibold">{{ __('Incremental') }}</h3>
                            <span class="text-5xl leading-none text-red-500">{{ $scores['incremental'] }}</span>
                          </div>
                          <div class="w-full h-4 bg-gray-300 rounded">
                            <div class="h-full bg-red-500" style="width: 62%;"> </div>
                          </div>
                        </div>
                      </div>
                      <div class="w-full lg:w-1/5 px-4 mb-6 lg:mb-0">
                        <div class="h-full">
                          <div class="flex justify-between items-end mb-2">
                            <h3 class="text-lg font-heading font-semibold">{{ __('Spiral') }}</h3>
                            <span class="text-5xl leading-none text-purple-400">{{ $scores['spiral'] }}</span>
                          </div>
                          <div class="w-full h-4 bg-gray-300 rounded">
                            <div class="h-full bg-purple-500" style="width: 62%;"></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-full lg:w-1/5 px-4 mb-6 lg:mb-0">
                        <div class="h-full">
                          <div class="flex justify-between items-end mb-2">
                            <h3 class="text-lg font-heading font-semibold">{{ __('V Process') }}</h3>
                            <span class="text-5xl leading-none text-pink-400">{{ $scores['v_process'] }}</span>
                          </div>
                          <div class="w-full h-4 bg-gray-300 rounded">
                            <div class="h-full bg-pink-500" style="width: 62%;"></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-full lg:w-1/5 px-4 mb-6 lg:mb-0">
                        <div class="h-full">
                          <div class="flex justify-between items-end mb-2">
                            <h3 class="text-lg font-heading font-semibold">{{ __('Scrum') }}</h3>
                            <span class="text-5xl leading-none text-green-500">{{ $scores['scrum'] }}</span>
                          </div>
                          <div class="w-full h-4 bg-gray-300 rounded"> 
                            <div class="h-full bg-green-500" style="width: 62%;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
    </div>
</x-app-layout>
