<?php

namespace Enflow\Dashboard\Tile\Slack;

use Illuminate\Support\Arr;
use Spatie\Dashboard\Models\Tile as BaseTile;

class Tile extends BaseTile
{
    public function appendData($name, $value)
    {
        $currentData = $this->data;

        $currentData[$name] = array_merge(Arr::wrap($currentData[$name]), Arr::wrap($value));

        $this->update([
            'data' => $currentData,
        ]);

        return $this;
    }

    public function prependData($name, $value)
    {
        $currentData = $this->data;

        $currentData[$name] = array_merge([($value)], Arr::wrap($currentData[$name]));

        $this->update([
            'data' => $currentData,
        ]);

        return $this;
    }
}
