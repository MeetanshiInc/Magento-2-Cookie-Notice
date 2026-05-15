<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source\Bar;

use Magento\Framework\Option\ArrayInterface;

/**
 * Source model for bar position options.
 */
class BarPosition implements ArrayInterface
{
    /**
     * Top position value
     *
     * @var string
     */
    public const TOP = 'v-top';

    /**
     * Bottom position value
     *
     * @var string
     */
    public const BOTTOM = 'v-bottom';

    /**
     * Return array of bar position options.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::TOP, 'label' => __('Top')],
            ['value' => self::BOTTOM, 'label' => __('Bottom')],
        ];
    }
}
