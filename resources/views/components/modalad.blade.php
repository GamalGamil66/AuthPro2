@props(['name','title'])
<div x-data="{showModal : false ,name : '{{ $name }}'}" x-show="showModal">
    <template x-teleport="#x-teleport-target">
      <div
        class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
        x-show="showModal"
        x-on:open-modal.window="showModal = ($event.detail.name === name)"
        x-on:close-modal.window="showModal = false"
        x-transition.duration @keydown.window.escape="showModal = false"
        role="dialog"
        @keydown.window.escape="showModal = false"
      >
        <div
          class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
          @click="showModal = false"
          x-show="showModal"
        ></div>
        <div
          class="relative w-full max-w-lg origin-top rounded-lg bg-white transition-all duration-300"
          x-show="showModal">
          <div
            class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 sm:px-5">
            <h3 class="text-base font-medium text-slate-700">
              {{$title}}
            </h3>
            <button
              @click="showModal = !showModal"
              class="btn -ml-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4.5 w-4.5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg>
            </button>
          </div>
          {{ $delbody }}
        </div>
      </div>
    </template>
  </div>
