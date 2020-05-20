<?php

namespace Enflow\Dashboard\Tile\Slack;

use Livewire\Component;

class SlackComponent extends Component
{
    public $position;
    public $channel;

    public function mount(string $position, string $channel)
    {
        $this->position = $position;
        $this->channel = $channel;
    }

    public function render()
    {
        return view('dashboard-slack::tile', [
            'items' => SlackStore::make($this->channel)->messages(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.slack.refresh_interval_in_seconds') ?? 10,
        ]);
    }
}
