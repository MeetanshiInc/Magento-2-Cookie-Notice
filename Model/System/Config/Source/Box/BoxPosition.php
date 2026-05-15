<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source\Box;

use Magento\Framework\Option\ArrayInterface;

/**
 * Source model for box position options.
 */
class BoxPosition implements ArrayInterface
{
    /**
     * Top left position value
     *
     * @var string
     */
    public const TOPLEFT = 'v-top-left';

    /**
     * Top right position value
     *
     * @var string
     */
    public const TOPRIGHT = 'v-top-right';

    /**
     * Bottom left position value
     *
     * @var string
     */
    public const BOTTOMLEFT = 'v-bottom-left';

    /**
     * Bottom right position value
     *
     * @var string
     */
    public const BOTTOMRIGHT = 'v-bottom-right';

    /**
     * Center position value
     *
     * @var string
     */
    public const CENTER = 'v-center';

    /**
     * Return array of box position options.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::TOPLEFT, 'label' => __('Top left')],
            ['value' => self::TOPRIGHT, 'label' => __('Top right')],
            ['value' => self::BOTTOMLEFT, 'label' => __('Bottom left')],
            ['value' => self::BOTTOMRIGHT, 'label' => __('Bottom right')],
            ['value' => self::CENTER, 'label' => __('Center')],
        ];
    }
}
