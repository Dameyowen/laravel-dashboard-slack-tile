<?php

namespace  Enflow\Dashboard\Tile\Slack;

use Illuminate\Contracts\Queue\ShouldQueue;
use Lisennk\LaravelSlackEvents\Events\Message;

class SlackChannelListener implements ShouldQueue
{
    public function handle(Message $message)
    {
        $channel = config('dashboard.tiles.slack.channels')[$message->event['channel']] ?? null;
        if (empty($channel)) {
            return null;
        }
        $slackStore = SlackStore::make($channel ?? 'general');
//        $message['date'] = Carbon::make($message['date'])->diffForHumans();
        $slackStore->prependMessage($message);
    }
}
