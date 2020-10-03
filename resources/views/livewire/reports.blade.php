{{-- <div class="w-full flex justify-between">
    <div class="w-1/3">
        <div class="bg-teal-400 overflow-hidden shadow-xl sm:rounded-lg m-5">
            <div class="p-5 text-center text-white text-xl">
                <h1 class="font-semibold text-xl text-white leading-tight">{{ __('Waterfall Rate ') }} </h1>
                {{ $waterfall_rate }} {{ __('%') }}
            </div>
        </div>
    </div>
    <div class="w-1/3">
        <div class="bg-teal-400 overflow-hidden shadow-xl sm:rounded-lg m-5">
            <div class="p-5 text-center text-white text-xl">
                <h1 class="font-semibold text-xl text-white leading-tight">{{ __('Incremental Rate ') }} </h1>
                {{ $incremental_rate }} {{ __('%') }}
            </div>
        </div>
    </div>
    <div class="w-1/3">
        <div class="bg-teal-400 overflow-hidden shadow-xl sm:rounded-lg m-5">
            <div class="p-5 text-center text-white text-xl">
                <h1 class="font-semibold text-xl text-white leading-tight">{{ __('Spiral Rate ') }} </h1>
                {{ $spiral_rate }} {{ __('%') }}
            </div>
        </div>
    </div>
</div>

<div class="w-full flex justofy-between">
    <div class="w-1/2">
        <div class="bg-teal-400 overflow-hidden shadow-xl sm:rounded-lg m-5">
            <div class="p-5 text-center text-white text-xl">
                <h1 class="font-semibold text-xl text-white leading-tight">{{ __('V Process Rate ') }} </h1>
                {{ $v_process_rate }} {{ __('%') }}
            </div>
        </div>
    </div>
    <div class="w-1/2">
        <div class="bg-teal-400 overflow-hidden shadow-xl sm:rounded-lg m-5">
            <div class="p-5 text-center text-white text-xl">
                <h1 class="font-semibold text-xl text-white leading-tight">{{ __('Scrum Rate ') }} </h1>
                {{ $scrum_rate }} {{ __('%') }}
            </div>
        </div>
    </div>
</div> --}}

<section class="py-8 px-4">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full lg:w-1/3 px-4 mb-4 lg:mb-0">
        <div class="h-full border rounded shadow">
          <div class="flex items-center justify-between py-3 px-4 border-b">
            <h3 class="text-lg font-heading">{{ __('Waterfall') }}</h3><span class="py-1 px-3 text-sm text-white font-semibold bg-green-500 rounded-full">Score</span>
          </div>
          <div class="flex flex-col p-4">
            <h3 class="text-3xl mb-3 font-heading font-semibold">{{ $waterfall_rate }}</h3>
            <span>Total Waterfall Rate</span><span class="text-green-500">{{ $waterfall_rate * 1/500 }}%</span>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 px-4 mb-4 lg:mb-0">
        <div class="h-full border rounded shadow">
          <div class="flex items-center justify-between px-4 py-3 border-b">
            <h3 class="text-lg font-heading">{{ __('Incremental' )}}</h3>
            <span class="py-1 px-3 text-sm text-white font-semibold bg-green-500 rounded-full">Score</span>
          </div>
          <div class="flex flex-col p-4">
            <h3 class="text-3xl mb-3 font-heading font-semibold">{{ $incremental_rate }}</h3>
            <span>Total Incremental Rate</span><span class="text-green-500">{{ $incremental_rate * 1/500 }}%</span>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 px-4 mb-4 lg:mb-0">
        <div class="h-full border rounded shadow">
          <div class="flex items-center justify-between px-4 py-3 border-b">
            <h3 class="text-lg font-heading">{{ __('Spiral') }}</h3><span class="py-1 px-3 text-sm text-white font-semibold bg-green-500 rounded-full">Score</span>
          </div>
          <div class="flex flex-col p-4">
            <h3 class="text-3xl mb-3 font-heading font-semibold">{{ $spiral_rate }}</h3>
            <span>Total Spiral Rate</span><span class="text-green-500">{{ $spiral_rate * 1/500 }}%</span>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 px-4 mt-4 mb-4 lg:mb-0">
        <div class="h-full border rounded shadow">
          <div class="flex items-center justify-between px-4 py-3 border-b">
            <h3 class="text-lg font-heading">{{ __('v Process') }}</h3><span class="py-1 px-3 text-sm text-white font-semibold bg-green-500 rounded-full">Score</span>
          </div>
          <div class="flex flex-col p-4">
            <h3 class="text-3xl mb-3 font-heading font-semibold">{{ $v_process_rate }}</h3>
            <span>Total V Process Rate</span><span class="text-green-500">{{ $v_process_rate * 1/500 }}%</span>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 px-4 mb-4 mt-4 lg:mb-0">
        <div class="h-full border rounded shadow">
          <div class="flex items-center justify-between px-4 py-3 border-b">
            <h3 class="text-lg font-heading">{{ __('Scrum') }}</h3><span class="py-1 px-3 text-sm text-white font-semibold bg-green-500 rounded-full">Score</span>
          </div>
          <div class="flex flex-col p-4">
            <h3 class="text-3xl mb-3 font-heading font-semibold">{{ $scrum_rate }}</h3>
            <span>Total Scrum Rate</span><span class="text-green-500">{{ $scrum_rate * 1/500 }}%</span>
          </div>
        </div>
      </div>
    </div>
  </section>
