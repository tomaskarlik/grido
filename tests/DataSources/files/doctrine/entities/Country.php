<?php

namespace Grido\Tests\Entities;

use Doctrine\ORM\Mapping as ORM;
use Nette\SmartObject;

/**
 * Country entity.
 *
 * @package     Entities
 * @author      Josef Kříž <pepakriz@gmail.com>
 *
 * @ORM\Entity
 * @ORM\Table(name="country")
 */
class Country
{
    use SmartObject;

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(length=2)
     */
    public $code;

    /**
     * @var string
     * @ORM\Column()
     */
    public $title;

    /**
     * @var ArrayCollection|User[]
     * @ORM\OneToMany(targetEntity="User", mappedBy="country")
     */
    public $users;


    public function __toString()
    {
        return $this->title;
    }
}
