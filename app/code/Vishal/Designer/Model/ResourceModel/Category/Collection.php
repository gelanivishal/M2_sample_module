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
namespace Vishal\Designer\Model\ResourceModel\Category;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'category_id';

    protected function _construct()
    {
        $this->_init('Vishal\Designer\Model\Category','Vishal\Designer\Model\ResourceModel\Category');
    }
}