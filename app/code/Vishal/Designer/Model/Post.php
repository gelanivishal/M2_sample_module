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
namespace Vishal\Designer\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Vishal\Designer\Api\Data\PostInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'vishal_designer_post';

    protected function _construct()
    {
        $this->_init('Vishal\Designer\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

}
