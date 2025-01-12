<x-card class="mb-4">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">
            ${{ number_format($job->salary) }}
        </div>
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex gap-4">
            <div>Compnay name</div>
            <div>Job location</div>
        </div>
        <div class="flex gap-2 text-xs">
            <x-tag>
                {{ Str::ucfirst($job->experience) }}
            </x-tag>
            <x-tag>
                {{ $job->category }}
            </x-tag>
        </div>
    </div>

    <p class="text-sm text-slate-500">
        {!! nl2br(e($job->descr)) !!}
    </p>

   
    {{
        $slot
    }}
</x-card>