<?php
declare(strict_types=1);

namespace DaoNguyen\UiComponent\Model;

use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    public function getConfigData()
    {
        return ['data' => ['foo' => 'bar']];
    }
}
