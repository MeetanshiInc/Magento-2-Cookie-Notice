<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Source model for text alignment options.
 */
class Textalign implements ArrayInterface
{
    /**
     * Return array of text alignment options.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'left', 'label' => __('Left')],
            ['value' => 'center', 'label' => __('Center')],
            ['value' => 'right', 'label' => __('Right')],
        ];
    }
}
