<?php

namespace Perspective\WareHouse\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Catalog\Model\ProductRepository;
use \Magento\Catalog\Helper\Image;
use \Perspective\WareHouse\Model\PostFactory;

class Custom extends Template
{

    /**
     * @param ProductRepository $productRepository
     * @param Image $imageHelper
     * @param PostFactory $postFactory
     */

    public function __construct(
        Context $context,
        ProductRepository $productRepository,
        Image $imageHelper,
        PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
        $this->_imageHelper = $imageHelper;
        $this->_productRepository = $productRepository;
        parent::__construct($context);
    }
    
    public function getCatProd($idcat)
    {
        $m = []; $i = 0;
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
            foreach($collection as $item) {
                if($item->getData('idcat') == $idcat && $item->getData('kolprod') != 0) {
                    $m[$i][] = $item->getData('namewar');
                    $m[$i][] = $item->getData('idprod');
                    $i++;
                }
            }
            
        return $m;
    }

    public function getProductImage($image)
        {
            $product = $this->_productRepository->getById($image);
            $image_url = $this->_imageHelper->init($product, 'product_base_image')->getUrl();
            return $image_url;
        }

    public function getProductById($id)
    {
        return $this->_productRepository->getById($id);
    }
}