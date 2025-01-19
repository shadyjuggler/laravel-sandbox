<x-layout>
    <x-breadcrumbs
        class="mb-4"
        :links="['Jobs' => route('jobs.index'), $job->title => '#']"
    />
    <x-job-card :$job>
        <p class="text-sm text-slate-500">
            {!! nl2br(e($job->descr)) !!}
        </p>
    </x-job-card>

    <x-card class="mb-4">
        <h2 class="mb-4 text-lg font-medium">
            More {{ $job->employer->company_name }} Jobs
        </h2>

        <div class="text-sm text-slate-500">
            @foreach ($job->employer->jobs as $relatedJob)
                <div class="mb-4 flex justify-between">
                    <div>
                        <div class="text-slate-700">
                            <a href="{{ route('jobs.show', ['job' => $relatedJob]) }}">
                                {{ $relatedJob->title }}
                            </a>
                        </div>
                        <div class="text-xs">{{$relatedJob->created_at->diffForHumans()}}</div>
                    </div>
                    <div class="text-xs">
                        ${{ number_format($relatedJob->salary) }}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>
</x-layout>
