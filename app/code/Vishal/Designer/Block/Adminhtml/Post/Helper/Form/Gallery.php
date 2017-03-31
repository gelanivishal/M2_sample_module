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
namespace Vishal\Designer\Block\Adminhtml\Post\Helper\Form;

use Magento\Framework\Registry;

class Gallery extends \Magento\Framework\View\Element\AbstractBlock
{
    /**
     * Gallery field name suffix
     *
     * @var string
     */
    protected $fieldNameSuffix = 'post';

    /**
     * Gallery html id
     *
     * @var string
     */
    protected $htmlId = 'media_gallery';

    /**
     * Gallery name
     *
     * @var string
     */
    protected $name = 'media_gallery';

    /**
     * Html id for data scope
     *
     * @var string
     */
    protected $image = 'image';

    /**
     * @var string
     */
    protected $formName = 'designer_post_form';

    /**
     * @var \Magento\Framework\Data\Form
     */
    protected $form;

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @param \Magento\Framework\View\Element\Context $context
     * @param Registry $registry
     * @param \Magento\Framework\Data\Form $form
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Context $context,
        Registry $registry,
        \Magento\Framework\Data\Form $form,
        $data = []
    ) {
        $this->registry = $registry;
        $this->form = $form;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getElementHtml()
    {
        return $this->getContentHtml();
    }

    /**
     * Get product images
     *
     * @return array|null
     */
    public function getImages()
    {
        $result = array();
        $gallery = $this->registry->registry('current_model')->getGalleryImages();

        if (count($gallery)) {
            $result['images'] = array();
            $position = 1;
            foreach ($gallery as $image) {
                $result['images'][] = [
                    'value_id' => $image->getFile(),
                    'file' => $image->getFile(),
                    'label' => basename($image->getFile()),
                    'position' => $position,
                    'url' => $image->getUrl(),
                ];
                $position++;
            }
        }

        return $result;
    }

    /**
     * Prepares content block
     *
     * @return string
     */
    public function getContentHtml()
    {
        $content = $this->getChildBlock('content')
            ->setId($this->getHtmlId() . '_content')
            ->setElement($this)
            ->setFormName($this->formName);
        $galleryJs = $content->getJsObjectName();
        $content->getUploader()->getConfig()->setMegiaGallery($galleryJs);
        return $content->toHtml();
    }

    /**
     * @return string
     */
    protected function getHtmlId()
    {
        return $this->htmlId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFieldNameSuffix()
    {
        return $this->fieldNameSuffix;
    }

    /**
     * @return string
     */
    public function getDataScopeHtmlId()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function toHtml()
    {
        return $this->getElementHtml();
    }
}
