<?php

namespace CrocoIT\Jobs\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;

class InsertSampleData implements DataPatchInterface, PatchRevertableInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * InsertSampleData constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * Apply sample data to the database
     */
    public function apply()
    {
        // Insert department data
        $departmentData = [
            ['department_id' => 1, 'name' => 'Engineering', 'description' => 'Responsible for all technical and engineering tasks.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1],
            ['department_id' => 2, 'name' => 'Marketing', 'description' => 'Handles all marketing strategies, including advertising and PR.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1],
            ['department_id' => 3, 'name' => 'Sales', 'description' => 'Responsible for generating leads and closing deals with customers.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1],
            ['department_id' => 4, 'name' => 'Human Resources', 'description' => 'Oversees employee relations, recruitment, and compliance.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1]
        ];

        foreach ($departmentData as $data) {
            $this->moduleDataSetup->getConnection()->insert(
                $this->moduleDataSetup->getTable('crocoit_jobs_department'),
                $data
            );
        }

        // Insert job data
        $jobData = [
            // Engineering jobs
            ['job_id' => 1, 'title' => 'Software Engineer', 'location' => 'Remote', 'type' => 'Full-time', 'description' => 'Develop and maintain software systems.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1, 'department_id' => 1],
            ['job_id' => 2, 'title' => 'Backend Developer', 'location' => 'Office', 'type' => 'Full-time', 'description' => 'Design and implement server-side applications.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1, 'department_id' => 1],
            // Marketing jobs
            ['job_id' => 3, 'title' => 'Marketing Manager', 'location' => 'Office', 'type' => 'Full-time', 'description' => 'Develop marketing strategies and campaigns.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1, 'department_id' => 2],
            ['job_id' => 4, 'title' => 'SEO Specialist', 'location' => 'Remote', 'type' => 'Full-time', 'description' => 'Optimize website content for search engines.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1, 'department_id' => 2],
            // Sales jobs
            ['job_id' => 5, 'title' => 'Sales Representative', 'location' => 'Office', 'type' => 'Full-time', 'description' => 'Generate leads and close sales deals.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1, 'department_id' => 3],
            ['job_id' => 6, 'title' => 'Account Manager', 'location' => 'Remote', 'type' => 'Full-time', 'description' => 'Manage client relationships and ensure satisfaction.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1, 'department_id' => 3],
            // HR jobs
            ['job_id' => 7, 'title' => 'HR Manager', 'location' => 'Office', 'type' => 'Full-time', 'description' => 'Manage HR operations and employee relations.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1, 'department_id' => 4],
            ['job_id' => 8, 'title' => 'Recruitment Specialist', 'location' => 'Remote', 'type' => 'Full-time', 'description' => 'Handle recruitment and onboarding of new employees.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'is_active' => 1, 'department_id' => 4]
        ];

        foreach ($jobData as $data) {
            $this->moduleDataSetup->getConnection()->insert(
                $this->moduleDataSetup->getTable('crocoit_jobs_job'),
                $data
            );
        }
    }

    /**
     * Revert sample data
     */
    public function revert()
    {
        // Remove data for the sample departments and jobs
        $this->moduleDataSetup->getConnection()->delete(
            $this->moduleDataSetup->getTable('crocoit_jobs_department'),
            ['department_id IN (?)' => [1, 2, 3, 4]]
        );

        $this->moduleDataSetup->getConnection()->delete(
            $this->moduleDataSetup->getTable('crocoit_jobs_job'),
            ['job_id IN (?)' => [1, 2, 3, 4, 5, 6, 7, 8]]
        );
    }

    /**
     * Get the patch dependencies
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * Get patch aliases
     */
    public function getAliases()
    {
        return [];
    }
}
