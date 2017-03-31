<?php
namespace Vishal\Designer\Ui\Component\Listing\Column;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;

class AuthorColumn extends \Magento\Ui\Component\Listing\Columns\Column
{
    protected $_user;
    /**
     * @param ContextInterface                                         $context
     * @param UiComponentFactory                                       $uiComponentFactory
     * @param array                                                    $components
     * @param array                                                    $data
     */
    public function __construct(
        \Magento\User\Model\User $user,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->_user = $user;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }
    /**
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $item[$this->getData('name')] = $this->prepareItem($this->getData('name'), $item);
            }
        }
        return $dataSource;
    }
    /**
     * Format data.
     *
     * @param string $fieldName
     * @param array  $item
     * @return string
     */
    protected function prepareItem($fieldName, array $item)
    {
        $authorId = $item[$fieldName];
        if ($authorId ==$authorId) {
            if($authorId == 1){
                return '<span class="grid-severity-notice"><span>'.$this->_user->load($authorId)->getName().'</span></span>';
            }elseif($authorId == 2){
                return '<span class="grid-severity-critical"><span>'.$this->_user->load($authorId)->getName().'</span></span>';
            }else{
                return '<span class="grid-severity-critical"><span>'.$this->_user->load($authorId)->getName().'</span></span>';
            }
        }
    }
}