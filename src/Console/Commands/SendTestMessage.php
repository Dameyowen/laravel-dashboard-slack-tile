<?php

namespace Enflow\Dashboard\Tile\Slack\Console\Commands;

use Illuminate\Console\Command;

class SendTestMessage extends Command
{
    protected $signature = 'dashboard:send-slack-message';

    protected $description = 'Send test slack message';

    public function handle()
    {
        $this->info('Sending test slack message');
        //
        $this->info('All done!');
    }
}
