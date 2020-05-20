<x-dashboard-tile :position="$position">
    <div class="h-full">
        <h1 class="text-2xl text-center">{{ $channel }}</h1>
        <div wire:poll.{{ $refreshIntervalInSeconds }}s class="self-center | divide-y-2">
            <ul class="slack__messages">
                @foreach($items as $row)
                    <li class="message">
                        <div class="message__title">{{ $row['text'] ?? null }}</div>
                        <div class="">
                            <span class="message__date">{{ ($row['date'] ?? null) }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-dashboard-tile>

<style>
    .message {
        margin-top: 0.25rem;
        padding: 0.25rem;
    }

    .message__title {
        letter-spacing: .05em;
        font-weight: 600;
    }

    .message__date {
        color: var(--brand-primary);
    }

    .message__author {
        opacity: 0.6;
    }

</style>
