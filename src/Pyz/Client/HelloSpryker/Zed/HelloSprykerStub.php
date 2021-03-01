<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloSpryker\Zed;

use Generated\Shared\Transfer\ContactUsTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

/**
 * Class HelloSprykerStub
 *
 * @package Pyz\Client\HelloSpryker\Zed
 */
class HelloSprykerStub extends ZedRequestStub implements HelloSprykerStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\ContactUsTransfer $contactUsTransfer
     *
     * @return \Generated\Shared\Transfer\ContactUsTransfer
     */
    public function saveContactUsData(ContactUsTransfer $contactUsTransfer): ContactUsTransfer
    {
        return $this->zedStub->call(
            '/hello-spryker/gateway/save-contact-us-data',
            $contactUsTransfer
        );
    }
}
