<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\ContactUsTransfer;

class ContactUsMapper
{
    /**
     * @param array $data
     *
     * @return \Generated\Shared\Transfer\ContactUsTransfer[]
     */
    public function mapContactUsData(array $data)
    {
        $collection = [];

        foreach ($data as $item) {
            $contactUsTransfer = new ContactUsTransfer();
            $collection[] = $contactUsTransfer->fromArray($item->toArray(), true);
        }

        return $collection;
    }
}
