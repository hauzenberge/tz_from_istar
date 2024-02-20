<?php

namespace Customize\Add\To\CartButton;

use Shopware\Core\System\SystemConfig\SystemConfigService;

class PluginSettings
{
    private $systemConfigService;

    public function __construct(SystemConfigService $systemConfigService)
    {
        $this->systemConfigService = $systemConfigService;
    }

    public function getColor(): string
    {
        return $this->systemConfigService->get('CustomizeAddToCartButton.config.color');
    }

    public function setColor(string $color): void
    {
        $this->systemConfigService->set('CustomizeAddToCartButton.config.color', $color);
    }
}
