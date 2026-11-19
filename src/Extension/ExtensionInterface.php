<?php

namespace MarketMedia\Plates\Extension;

use MarketMedia\Plates\Engine;

/**
 * A common interface for extensions.
 */
interface ExtensionInterface
{
    public function register(Engine $engine);
}
