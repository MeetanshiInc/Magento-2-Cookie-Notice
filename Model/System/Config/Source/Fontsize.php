<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Source model for font size options.
 */
class Fontsize implements ArrayInterface
{
    /**
     * Return array of font size options.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 14, 'label' => __('Small')],
            ['value' => 16, 'label' => __('Medium')],
            ['value' => 18, 'label' => __('Large')],
        ];
    }
}
