<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Fontsize implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 14, 'label' => __('Small')],
            ['value' => 16, 'label' => __('Medium')],
            ['value' => 18, 'label' => __('Large')]
        ];
    }
}
