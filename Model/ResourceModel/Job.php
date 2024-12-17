<?php
declare(strict_types=1);

namespace CrocoIT\Jobs\Model\ResourceModel;

use CrocoIT\Jobs\Api\Data\JobInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Job extends AbstractDb
{
    protected function _construct()
    {
        $this->_init(
            JobInterface::TABLE_NAME,
            JobInterface::JOB_ID
        );
    }
}
