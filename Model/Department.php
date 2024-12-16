<?php

declare(strict_types=1);

namespace CrocoIT\Jobs\Model;

use CrocoIT\Jobs\Api\Data\DepartmentInterface;
use Magento\Framework\Model\AbstractModel;
use CrocoIT\Jobs\Model\ResourceModel\Department as DepartmentResource;
use Magento\Tests\NamingConvention\true\string;

class Department extends AbstractModel implements DepartmentInterface
{
    public function _construct()
    {
        $this->_init(DepartmentResource::class);
    }

    public function getDepartmentId(): int
    {
        return $this->getData(DepartmentInterface::DEPARTMENT_ID);
    }

    public function getName(): string
    {
        return $this->getData(DepartmentInterface::NAME);
    }
    public function setName(string $name): self
    {
        $this->setData(DepartmentInterface::NAME, $name);
    }

    public function getDescription(): string
    {
        return $this->getData(DepartmentInterface::DESCRIPTION);
    }

    public function setDescription(string $description): self
    {
        $this->setData(DepartmentInterface::DESCRIPTION, $description);
    }

    public function getCreatedAt(): string
    {
        return $this->getData(DepartmentInterface::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->setData(DepartmentInterface::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt(): string
    {
        return $this->getData(DepartmentInterface::UPDATED_AT);
    }

    public function setUpdatedAt(string $updatedAt): self
    {
        $this->setData(DepartmentInterface::UPDATED_AT, $updatedAt);
    }

    public function setIsActive(bool $isActive): bool
    {
       $this->setData(DepartmentInterface::IS_ACTIVE, $isActive);
    }
    public function getIsActive(): bool
    {
        return $this->getData(DepartmentInterface::IS_ACTIVE);
    }
}
