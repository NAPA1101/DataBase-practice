<?php

namespace Perspective\WareHouse\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Catalog\Model\ProductRepository;
use \Magento\Framework\View\Element\Template\Context;
use \Perspective\WareHouse\Model\PostFactory;

class Index extends Template
{

    /**
     * @param Context $context
     * @param ProductRepository $productRepository
     * @param PostFactory $postFactory
     */
    
    public function __construct(
        Context $context,
        ProductRepository $productRepository,
        PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
        $this->_productRepository = $productRepository;
        parent::__construct($context);
    }

    public function getResult()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }

    public function getNameProd($namewar)
    {
        $m = [];
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
            foreach($collection as $item) {
                if($item->getData('namewar') == $namewar) {
                    $m[] = $item->getData('idprod');
                }
            }
            return $m;
    }

    public function getProductById($id) 
    {
        return $this->_productRepository->getById($id);
    }
}