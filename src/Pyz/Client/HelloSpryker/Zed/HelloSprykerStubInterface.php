<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloSpryker\Zed;

use Generated\Shared\Transfer\ContactUsTransfer;

interface HelloSprykerStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\ContactUsTransfer $contactUsEntityTransfer
     *
     * @return \Generated\Shared\Transfer\ContactUsTransfer
     */
    public function saveContactUsData(ContactUsTransfer $contactUsEntityTransfer): ContactUsTransfer;
}
