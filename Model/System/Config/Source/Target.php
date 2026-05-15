<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Source model for link target options.
 */
class Target implements ArrayInterface
{
    /**
     * Open link in same window
     *
     * @var string
     */
    public const SAME_WINDOW = '_self';

    /**
     * Open link in new window
     *
     * @var string
     */
    public const NEW_WINDOW = '_blank';

    /**
     * Return array of link target options.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::SAME_WINDOW, 'label' => __('Same Window')],
            ['value' => self::NEW_WINDOW, 'label' => __('New Window')],
        ];
    }
}
