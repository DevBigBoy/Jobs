<?php

declare(strict_types=1);

namespace CrocoIT\Jobs\Model;

use CrocoIT\Jobs\Api\Data\DepartmentInterface;
use Magento\Framework\Model\AbstractModel;
use CrocoIT\Jobs\Model\ResourceModel\Department as DepartmentResource;

class Department extends AbstractModel implements DepartmentInterface
{
    public function _construct()
    {
        $this->_init(DepartmentResource::class);
    }

    public function getDepartmentId(): int
    {
        return (int) $this->getData(DepartmentInterface::DEPARTMENT_ID);
    }

    public function setDepartmentId(int $departmentId): self
    {
        return $this->setData(DepartmentInterface::DEPARTMENT_ID, $departmentId);
    }

    public function getName(): string
    {
        return (string) $this->getData(DepartmentInterface::NAME);
    }

    public function setName(string $name): self
    {
        return $this->setData(DepartmentInterface::NAME, $name);
    }

    public function getDescription(): string
    {
        return (string) $this->getData(DepartmentInterface::DESCRIPTION);
    }

    public function setDescription(string $description): self
    {
        return $this->setData(DepartmentInterface::DESCRIPTION, $description);
    }

    public function getCreatedAt(): string
    {
        return (string) $this->getData(DepartmentInterface::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt): self
    {
        return $this->setData(DepartmentInterface::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt(): string
    {
        return (string) $this->getData(DepartmentInterface::UPDATED_AT);
    }

    public function setUpdatedAt(string $updatedAt): self
    {
        return $this->setData(DepartmentInterface::UPDATED_AT, $updatedAt);
    }

    public function getIsActive(): bool
    {
        return (bool) $this->getData(DepartmentInterface::IS_ACTIVE);
    }

    public function setIsActive(bool $isActive): self
    {
        return $this->setData(DepartmentInterface::IS_ACTIVE, $isActive);
    }
}
