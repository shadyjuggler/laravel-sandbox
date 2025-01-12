<x-layout>
    @foreach ($jobs as $job)
        <x-job-card
            class="mb-4"
            :$job
        >
            <x-link-button
                class="mt-2"
                :href="route('jobs.show', $job)"
            >
                Show
            </x-link-button>
        </x-job-card>
    @endforeach
</x-layout>
