<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Fontfamily implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'unset', 'label' => __('Auto')],
            ['value' => 'Open+Sans', 'label' => __('Open Sans')],
            ['value' => 'Lato', 'label' => __('Lato')],
            ['value' => 'Old+Standard+TT', 'label' => __('Old Standard TT')],
            ['value' => 'Abril+Fatface', 'label' => __('Abril Fatface')],
            ['value' => 'PT+Serif', 'label' => __('PT Serif')],
            ['value' => 'Ubuntu', 'label' => __('Ubuntu')],
            ['value' => 'Vollkorn', 'label' => __('Vollkorn')],
        ];
    }
}
