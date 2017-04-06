<?php
/**
 * Vishal_Designer extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Sample
 * @package   Vishal_Designer
 * @copyright 2016 Vishal Gelani
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @author    Vishal Gelani
 */
namespace Vishal\Designer\Model\ResourceModel;
class Tag extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('vishal_designer_tag','tag_id');
    }

    /**
     * Process tag data before saving
     *
     * @param \Magento\Framework\Model\AbstractModel $object
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _beforeSave(\Magento\Framework\Model\AbstractModel $object)
    {
        $object->setTitle(
            trim(strtolower($object->getTitle()))
        );

        if (!$object->getId()) {
            $tag = $object->getCollection()
                ->addFieldToFilter('title', $object->getTitle())
                ->setPageSize(1)
                ->getFirstItem();
            if ($tag->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('The tag is already exist.')
                );
            }
        }

        return parent::_beforeSave($object);
    }

}
