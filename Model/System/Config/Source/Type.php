<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Type implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'v-bar', 'label' => __('Bar')],
            ['value' => 'v-box', 'label' => __('Popup')]
        ];
    }
}
