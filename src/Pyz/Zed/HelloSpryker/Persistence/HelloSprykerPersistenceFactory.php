<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Persistence;

use Orm\Zed\HelloSpryker\Persistence\PyzContactUsQuery;
use Pyz\Zed\HelloSpryker\Persistence\Propel\Mapper\ContactUsMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\HelloSpryker\HelloSprykerConfig getConfig()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerQueryContainerInterface getQueryContainer()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerRepositoryInterface getRepository()
 */
class HelloSprykerPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\HelloSpryker\Persistence\PyzContactUsQuery
     */
    public function createHelloSprykerQuery()
    {
        return PyzContactUsQuery::create();
    }

    /**
     * @return \Pyz\Zed\HelloSpryker\Persistence\Propel\Mapper\ContactUsMapper
     */
    public function createContactUsMapper()
    {
        return new ContactUsMapper();
    }
}
