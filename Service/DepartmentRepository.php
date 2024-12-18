<?php
declare(strict_types=1);
namespace CrocoIT\Jobs\Service;

use CrocoIt\Popup\Api\Data\PopupInterface;
use CrocoIt\Popup\Api\PopupRepositoryInterface;
use CrocoIt\Popup\Model\PopupFactory;
use CrocoIt\Popup\Model\ResourceModel\Popup as PopupResource;
use Magento\Framework\Exception\AlreadyExistsException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\TestFramework\Exception\NoSuchActionException;

class DepartmentRepository implements PopupRepositoryInterface
{
    /**
     * @param PopupResource $popupResource
     * @param PopupFactory $factory
     */
    public function __construct(
        private readonly PopupResource $popupResource,
        private readonly PopupFactory $factory,
    ){}

    /**
     * @param int $popupId
     * @return PopupInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $popupId): PopupInterface
    {
        $popup = $this->factory->create();
       $this->popupResource->load($popup, $popupId);
       if (!$popup->getId()) {
           throw new NoSuchEntityException(__('Popup with id "%1" does not exist.', $popupId));
       }
       return $popup;
    }

    /**
     * @param PopupInterface $popup
     * @return void
     * @throws AlreadyExistsException
     */
    public function save(PopupInterface $popup): void
    {
        $this->popupResource->save($popup);
    }

    /**
     * @param PopupInterface $popup
     * @return void
     * @throws \Exception
     */
    public function delete(PopupInterface $popup): void
    {
        $this->popupResource->delete($popup);
    }

}
