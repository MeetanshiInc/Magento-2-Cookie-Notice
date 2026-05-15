<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Source model for cookie notice type options.
 */
class Type implements ArrayInterface
{
    /**
     * Return array of notice type options.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'v-bar', 'label' => __('Bar')],
            ['value' => 'v-box', 'label' => __('Popup')],
        ];
    }
}
