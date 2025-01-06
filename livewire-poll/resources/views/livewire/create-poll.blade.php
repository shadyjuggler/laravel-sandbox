<div>
    <form wire:submit.prevent="createPoll">
        <label for="">Poll Title</label>
        <input
            type="text"
            wire:model.live="title"
        >

        <div class="mb-4">
            <button
                class="btn"
                wire:click.prevent="addOption"
            >
                Add Option
            </button>
        </div>

        <div>
            @foreach ($options as $index => $option)
                <div class="mt-2">
                    <label>Option {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input
                            type="text"
                            wire:model="options.{{ $index }}"
                        >
                        <button
                            class="btn"
                            wire:click.prevent="removeOption({{$index}})"
                        >Remove</button>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="mt-4 btn" type="submit">Create Poll</button>
    </form>
</div>
