<?php

declare(strict_types=1);

namespace CrocoIT\Jobs\Api\Data;
interface DepartmentInterface
{
    public const TABLE_NAME = 'crocoit_jobs_department';

    public const STATUS_DISABLED = 0;
    public const STATUS_ENABLED = 1;

    public const DEPARTMENT_ID = 'department_id';
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    public const IS_ACTIVE = 'is_active';


    /**
     * @return int
     */
    public function getDepartmentId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     * @return self
     */
    public function setCreatedAt(string $createdAt): self;

    /**
     * @return string
     */
    public function getUpdatedAt(): string;

    /**
     * @param string $updatedAt
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self;

    /**
     * @return bool
     */
    public function getIsActive(): bool;

    /**
     * @param bool $isActive
     * @return self
     */
    public function setIsActive(bool $isActive): self;
}
