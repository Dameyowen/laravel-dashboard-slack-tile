<?php

namespace Enflow\Dashboard\Tile\Slack;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class SlackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-slack'),
        ], 'dashboard-slack-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-slack');

        Livewire::component('slack', SlackComponent::class);
    }
}
