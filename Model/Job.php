<?php
declare(strict_types=1);

namespace CrocoIT\Jobs\Model;

use Magento\Framework\Model\AbstractModel;
use CrocoIT\Jobs\Api\Data\JobInterface;
use CrocoIT\Jobs\Model\ResourceModel\Job as JobResource;

class Job extends AbstractModel implements JobInterface
{
    protected function _construct()
    {
        $this->_init(JobResource::class);
    }

    public function getJobId(): int
    {
        return (int) $this->getData(JobInterface::JOB_ID);
    }

    public function setJobId(int $jobId): self
    {
        return $this->setData(JobInterface::JOB_ID, $jobId);
    }

    public function getTitle(): string
    {
        return (string) $this->getData(JobInterface::TITLE);
    }

    public function setTitle(string $title): self
    {
        return $this->setData(JobInterface::TITLE, $title);
    }

    public function getLocation(): string
    {
        return (string) $this->getData(JobInterface::LOCATION);
    }

    public function setLocation(string $location): self
    {
        return $this->setData(JobInterface::LOCATION, $location);
    }

    public function getType(): string
    {
        return (string) $this->getData(JobInterface::TYPE);
    }

    public function setType(string $type): self
    {
        return $this->setData(JobInterface::TYPE, $type);
    }

    public function getDescription(): string
    {
        return (string) $this->getData(JobInterface::DESCRIPTION);
    }

    public function setDescription(string $description): self
    {
        return $this->setData(JobInterface::DESCRIPTION, $description);
    }


    public function getIsActive(): bool
    {
        return (bool) $this->getData(JobInterface::IS_ACTIVE);
    }

    public function setIsActive(bool $isActive): self
    {
        return $this->setData(JobInterface::IS_ACTIVE, $isActive);
    }

    public function getDepartmentId(): int
    {
        return (int) $this->getData(JobInterface::DEPARTMENT_ID);
    }

    public function setDepartmentId(int $departmentId): self
    {
        return $this->setData(JobInterface::DEPARTMENT_ID, $departmentId);
    }

    public function getCreatedAt(): string
    {
        return (string) $this->getData(JobInterface::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt): self
    {
        return $this->setData(JobInterface::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt(): string
    {
        return (string) $this->getData(JobInterface::UPDATED_AT);
    }

    public function setUpdatedAt(string $updatedAt): self
    {
        return $this->setData(JobInterface::UPDATED_AT, $updatedAt);
    }
}
