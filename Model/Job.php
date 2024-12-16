<?php
declare(strict_types=1);

namespace CrocoIT\Jobs\Model;

use Magento\Framework\Model\AbstractModel;
use CrocoIT\Jobs\Api\Data\JobInterface;
use CrocoIT\Jobs\Model\ResourceModel\Job as JobResource;

class Job extends AbstractModel implements JobInterface
{
    /**
     * Initialize the resource model
     */
    protected function _construct()
    {
        $this->_init(JobResource::class);
    }

    public function getId(): ?int
    {
        return $this->getData(self::JOB_ID);
    }

    public function getTitle(): ?string
    {
        return $this->getData(self::TITLE);
    }

    public function setTitle(string $title): JobInterface
    {
        return $this->setData(self::TITLE, $title);
    }

    public function getLocation(): ?string
    {
        return $this->getData(self::LOCATION);
    }

    public function setLocation(string $location): JobInterface
    {
        return $this->setData(self::LOCATION, $location);
    }

    public function getType(): ?string
    {
        return $this->getData(self::TYPE);
    }

    public function setType(string $type): JobInterface
    {
        return $this->setData(self::TYPE, $type);
    }

    public function getDescription(): ?string
    {
        return $this->getData(self::DESCRIPTION);
    }

    public function setDescription(string $description): JobInterface
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    public function getCreatedAt(): ?string
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt): JobInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt(): ?string
    {
        return $this->getData(self::UPDATED_AT);
    }

    public function setUpdatedAt(string $updatedAt): JobInterface
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    public function getIsActive(): bool
    {
        return (bool)$this->getData(self::IS_ACTIVE);
    }

    public function setIsActive(bool $isActive): JobInterface
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    public function getDepartmentId(): ?int
    {
        return $this->getData(self::DEPARTMENT_ID);
    }

    public function setDepartmentId(int $departmentId): JobInterface
    {
        return $this->setData(self::DEPARTMENT_ID, $departmentId);
    }
}
