<?php
declare(strict_types=1);

namespace CrocoIT\Jobs\Model\ResourceModel;

use CrocoIT\Jobs\Api\Data\DepartmentInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Department extends AbstractDb
{
    /**
     * Initialize the table and primary key
     */
    protected function _construct()
    {
        $this->_init(DepartmentInterface::Table_Name, DepartmentInterface::ID);
    }
}
