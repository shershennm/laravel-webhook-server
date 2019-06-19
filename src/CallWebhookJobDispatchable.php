<?php

namespace Spatie\WebhookServer;

/**
 * Self-dispatchable and chainable.
 * Laravel only (not Lumen).
 */

use Illuminate\Foundation\Bus\Dispatchable;

class CallWebhookJobDispatchable extends CallWebhookJob
{
    use Dispatchable;
}
