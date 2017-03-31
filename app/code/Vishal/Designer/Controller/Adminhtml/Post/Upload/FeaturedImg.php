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
namespace Vishal\Designer\Controller\Adminhtml\Post\Upload;

use Vishal\Designer\Controller\Adminhtml\Upload\Image\Action;

/**
 * Designer featured image upload controller
 */
class FeaturedImg extends Action
{
    /**
     * File key
     *
     * @var string
     */
    protected $_fileKey = 'featured_img';

    /**
     * Check admin permissions for this controller
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Vishal_Designer::post');
    }

}
