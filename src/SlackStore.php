<?php

namespace Enflow\Dashboard\Tile\Slack;

use Illuminate\Support\Str;

class SlackStore
{
    private Tile $tile;
    private $channel;

    public static function make(string $channel)
    {
        return new static($channel);
    }

    public function __construct(string $channel)
    {
        $this->channel = Str::lower($channel);
        $this->tile = Tile::firstOrCreateForName('services.' . $this->channel);
    }

    public function setMessages(Iterable $messages): self
    {
        $this->tile->putData('messages', $messages);

        return $this;
    }
    
    public function appendMessage($message): self
    {
        $this->tile->appendData('messages', $message);

        return $this;
    }

    public function prependMessage($message): self
    {
        $this->tile->prependData('messages', $message);

        return $this;
    }

    public function messages(): Iterable
    {
        return $this->tile->getData('messages') ?? [];
    }
}
