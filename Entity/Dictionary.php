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

namespace WellCommerce\Bundle\DictionaryBundle\Entity;

use Knp\DoctrineBehaviors\Model\Blameable\Blameable;
use Knp\DoctrineBehaviors\Model\Timestampable\Timestampable;
use Knp\DoctrineBehaviors\Model\Translatable\Translatable;
use WellCommerce\Bundle\CoreBundle\Entity\IdentifiableTrait;

/**
 * Dictionary
 */
class Dictionary implements DictionaryInterface
{
    use IdentifiableTrait;
    use Timestampable;
    use Translatable;
    use Blameable;
    
    /**
     * @var string
     */
    protected $identifier = '';
    
    /**
     * {@inheritdoc}
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setIdentifier(string $identifier)
    {
        $this->identifier = $identifier;
    }
}
