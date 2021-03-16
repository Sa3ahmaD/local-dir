<?php
namespace Shop\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="User",inversedBy="products")
     */
    protected $user;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setUser(User $user) {
        $this->user = $user;
    }
    /**
     * @return User
     */
    public function getUser() {
        return $this->user;
    }
}