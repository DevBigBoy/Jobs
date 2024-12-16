<?php
declare(strict_types=1);

namespace CrocoIT\Jobs\Model\ResourceModel\Department;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use CrocoIT\Jobs\Model\Department;
use CrocoIT\Jobs\Model\ResourceModel\Department as DepartmentResource;

class Collection extends AbstractCollection
{
    /**
     * Initialize model and resource model
     */
    protected function _construct()
    {
        $this->_init(
            Department::class,
            DepartmentResource::class);
    }
}
