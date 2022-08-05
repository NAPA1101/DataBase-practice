<?php

namespace Perspective\Schema\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Perspective\Schema\Model\ContactdetailsFactory;

class Schema extends Template
{
    public function __construct(
        Context $context,
        ContactdetailsFactory $ContactdetailsFactory)
    {
        $this->_ContactdetailsFactory = $ContactdetailsFactory;
        parent::__construct($context);
    }

    public function getResult()
    {
        $post = $this->_ContactdetailsFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }

    public function getFilter($name)
    {
        $post = $this->_ContactdetailsFactory->create();
        $collection = $post->getCollection();
        $collection->addFieldToFilter('name', $name)
        ->addFieldToFilter('data_review', array('gteq' => date('Y-m-01')));
        return $collection;        
    }
}