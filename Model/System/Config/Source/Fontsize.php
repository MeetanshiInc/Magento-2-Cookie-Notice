<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Fontsize
 * @package Meetanshi\CookieNotice\Model\System\Config\Source
 */
class Fontsize implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 14, 'label' => __('Small')],
            ['value' => 16, 'label' => __('Medium')],
            ['value' => 18, 'label' => __('Large')]
        ];
    }
}
