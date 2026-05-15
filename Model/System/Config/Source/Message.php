<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Source model for message type options.
 */
class Message implements ArrayInterface
{
    /**
     * Return array of message type options.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'default', 'label' => __('Default message')],
            ['value' => 'custom', 'label' => __('Custom message')],
        ];
    }
}
