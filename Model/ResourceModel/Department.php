<?php
declare(strict_types=1);

namespace CrocoIT\Jobs\Model\ResourceModel;

use CrocoIT\Jobs\Api\Data\DepartmentInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Department extends AbstractDb
{
   public function _construct()
   {
       $this->_init(
           DepartmentInterface::TABLE_NAME,
           DepartmentInterface::DEPARTMENT_ID
       );
   }
}
