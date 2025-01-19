<div class="relative">
    @if ($formRef)
        <button
            @click="$refs['input-{{ $name }}'].value = ''; $refs['{{ $formRef }}'].submit();"
            type="button"
            class="absolute top-1/2 -translate-y-1/2 right-2 w-4 h-4"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="text-slate-500"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18 18 6M6 6l12 12"
                />
            </svg>
        </button>
    @endif
    <input
        class="w-full rounded-md border-0 pr-8 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2"
        type={{$type}}
        placeholder="{{ $placeholder }}"
        name="{{ $name }}"
        value="{{ $value }}"
        id="{{ $name }}"
        x-ref="input-{{ $name }}"
    >
</div>
