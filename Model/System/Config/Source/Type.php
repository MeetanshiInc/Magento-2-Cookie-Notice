<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Type
 * @package Meetanshi\CookieNotice\Model\System\Config\Source
 */
class Type implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'v-bar', 'label' => __('Bar')],
            ['value' => 'v-box', 'label' => __('Popup')]
        ];
    }
}
