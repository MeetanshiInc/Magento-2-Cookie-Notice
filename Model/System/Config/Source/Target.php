<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Target implements ArrayInterface
{
    const SAME_WINDOW = '_self';
    const NEW_WINDOW = '_blank';

    public function toOptionArray()
    {
        return [
            ['value' => self::SAME_WINDOW, 'label' => __('Same Window')],
            ['value' => self::NEW_WINDOW, 'label' => __('New Window')]
        ];
    }
}
