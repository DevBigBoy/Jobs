<?php

declare(strict_types=1);

namespace CrocoIT\Jobs\Api\Data;

interface JobInterface
{
    public const TABLE_NAME = 'crocoit_jobs_job';

    public const STATUS_DISABLED = 0;
    public const STATUS_ENABLED = 1;

    public const ID = 'job_id';
    public const TITLE = 'title';
    public const LOCATION = 'location';
    public const TYPE = 'type';
    public const DESCRIPTION = 'description';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    public const IS_ACTIVE = 'is_active';
    public const DEPARTMENT_ID = 'department_id';

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(string $title):self;

    /**
     * @return string
     */
    public function getLocation(): string;

    /**
     * @param string $location
     * @return self
     */
    public function setLocation(string $location):self;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type):self;

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

    /**
     * @return int
     */
    public function getDepartmentId(): int;

    /**
     * @param int $departmentId
     * @return self
     */
    public function setDepartmentId(int $departmentId): self;
}
