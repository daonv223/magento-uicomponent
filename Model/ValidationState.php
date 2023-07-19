<?php
declare(strict_types=1);

namespace DaoNguyen\UiComponent\Model;

class ValidationState extends \Magento\Framework\App\Arguments\ValidationState
{
    public function isValidationRequired()
    {
        return false;
    }
}
