<?php

namespace CrocoIT\Jobs\Api;

use CrocoIT\Jobs\Api\Data\DepartmentInterface;
use Magento\Framework\Exception\NoSuchEntityException;

interface DepartmentRepositoryInterface
{
    /**
     * @param DepartmentInterface $department
     * @return DepartmentInterface
     */
    public function save(DepartmentInterface $department): DepartmentInterface;

    /**
     * @param int $id
     * @return DepartmentInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $id): DepartmentInterface;


    /**
     * @param DepartmentInterface $department
     * @return bool
     */
    public function delete(DepartmentInterface $department): bool;
}
