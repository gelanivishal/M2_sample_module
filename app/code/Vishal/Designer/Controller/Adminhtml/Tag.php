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
namespace Vishal\Designer\Controller\Adminhtml;

/**
 * Admin designer tag edit controller
 */
class Tag extends Actions
{
	/**
	 * Form session key
	 * @var string
	 */
    protected $_formSessionKey  = 'designer_tag_form_data';

    /**
     * Allowed Key
     * @var string
     */
    protected $_allowedKey      = 'Vishal_Designer::post';

    /**
     * Model class name
     * @var string
     */
    protected $_modelClass      = 'Vishal\Designer\Model\Tag';

    /**
     * Active menu key
     * @var string
     */
    protected $_activeMenu      = 'Vishal_Designer::element';

}
