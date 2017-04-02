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
namespace Vishal\Designer\Api;

use Vishal\Designer\Api\Data\CategoryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface CategoryRepositoryInterface 
{
    public function save(CategoryInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(CategoryInterface $page);

    public function deleteById($id);
}
