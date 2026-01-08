<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Behaviour
 * @package Meetanshi\CookieNotice\Model\System\Config\Source
 */
class Behaviour implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 365, 'label' => 'Never show again'],
            ['value' => 1, 'label' => 'Hide for the rest of the day'],
            ['value' => 0, 'label' => 'Hide for the rest of the session']
        ];
    }
}
