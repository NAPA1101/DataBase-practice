<?php

namespace Perspective\WareHouse\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Catalog\Model\ProductRepository;
use \Perspective\WareHouse\Model\PostFactory;
use \Magento\Framework\Registry;

class Tab extends Template
{
    /**
     * @var Registry
     */
    protected $_registry;

    /**
     * @param ProductRepository $productRepository
     * @param PostFactory $postFactory
     * @param Registry $registry
     */
    
    public function __construct(
        Context $context,
        ProductRepository $productRepository,
        PostFactory $postFactory,
        Registry $registry,
        array $data = [])
    {
        $this->_postFactory = $postFactory;
        $this->_registry = $registry;
        $this->_productRepository = $productRepository;
        parent::__construct($context, $data);
    }
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    
    public function getCurrentCategory()
    {        
        return $this->_registry->registry('current_category');
    }
    
    public function getCurrentProduct()
    {        
        return $this->_registry->registry('current_product');
    }    
}