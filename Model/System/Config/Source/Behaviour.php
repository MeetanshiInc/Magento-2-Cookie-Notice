<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Source model for cookie notice behaviour options.
 */
class Behaviour implements ArrayInterface
{
    /**
     * Return array of behaviour options.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 365, 'label' => 'Never show again'],
            ['value' => 1, 'label' => 'Hide for the rest of the day'],
            ['value' => 0, 'label' => 'Hide for the rest of the session'],
        ];
    }
}
