<?php
declare(strict_types=1);

namespace CrocoIT\Jobs\Model\ResourceModel\Job;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use CrocoIT\Jobs\Model\Job;
use CrocoIT\Jobs\Model\ResourceModel\Job as JobResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            Job::class,
            JobResource::class);
    }
}
