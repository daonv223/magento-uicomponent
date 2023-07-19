<?php
declare(strict_types=1);

namespace DaoNguyen\UiComponent\Component;

use Magento\Ui\Component\AbstractComponent;

class Simple extends AbstractComponent
{
    const NAME = 'ui_component_simple';

    public function getComponentName()
    {
        return self::NAME;
    }
}
