<?php

declare(strict_types=1);

namespace Owl\Component\Rbac\Model;

use Sylius\Component\Resource\Model\TimestampableTrait;

abstract class BaseAuthItem implements AuthItemInterface
{
    use TimestampableTrait;

    /** @var mixed */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $groupPermission;

    /** @var string */
    protected $description;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    abstract public function getType(): string;

    /**
     * @return string
     */
    public function getGroupPermission():? string
    {
        return $this->groupPermission;
    }

    public function setGroupPermission(string $groupPermission): void
    {
        $this->groupPermission = $groupPermission;
    }

    /**
     * @return string
     */
    public function getDescription():? string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
