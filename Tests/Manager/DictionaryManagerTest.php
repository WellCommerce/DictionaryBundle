<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\DictionaryBundle\Tests\Manager;

use WellCommerce\Bundle\CoreBundle\Manager\ManagerInterface;
use WellCommerce\Bundle\CoreBundle\Test\Manager\AbstractManagerTestCase;
use WellCommerce\Bundle\DictionaryBundle\Entity\DictionaryInterface;

/**
 * Class DictionaryManagerTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class DictionaryManagerTest extends AbstractManagerTestCase
{
    protected function get(): ManagerInterface
    {
        return $this->container->get('dictionary.manager');
    }
    
    protected function getExpectedEntityInterface(): string
    {
        return DictionaryInterface::class;
    }
}
