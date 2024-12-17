<?php
declare(strict_types=1);
namespace CrocoIT\Jobs\Model\Department\Source;
use Magento\Framework\Data\OptionSourceInterface;

class IsActive implements OptionSourceInterface
{

    public const ENABLED  = 1;
    public const DISABLED = 0;

    public function toOptionArray() :array
    {
        return [
            ['value' => self::ENABLED, 'label' => __('Enabled')],
            ['value' => self::DISABLED, 'label' => __('Disabled')]
        ];

    }

}
