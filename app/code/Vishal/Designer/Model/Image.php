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

use Vishal\Designer\Helper\Image as ImageHelper;

/**
 * Image model
 *
 * @method string getFile()
 * @method $this setFile(string $value)
 */
class Image extends \Magento\Framework\DataObject
{

    /**
     * @var \\Magento\Store\Model\StoreManagerInterface $storeManagerInterface,
     */
    protected $_storeManager;

    /**
     * @var \Vishal\Designer\Helper\Image
     */
    protected $imageHelper;

    /**
     * Initialize dependencies.
     *
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Store\Model\StoreManagerInterface $storeManagerInterface,
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManagerInterface,
        ImageHelper $imageHelper,
        array $data = []
    ) {
        parent::__construct($data);
        $this->_storeManager = $storeManagerInterface;
        $this->imageHelper = $imageHelper;
    }

    /**
     * Retrieve image url
     * @return string
     */
    public function getUrl()
    {
        if ($this->getFile()) {
            return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA).$this->getFile();
        }

        return null;
    }

    /**
     * Resize image
     * @param int $width
     * @param int $height
     * @return string
     */
    public function resize($width, $height = null)
    {
        return $this->imageHelper->init($this->getFile())
            ->resize($width, $height);
    }

    /**
     * Retrieve image url
     * @return string
     */
    public function __toString()
    {
        return $this->getUrl();
    }

}
