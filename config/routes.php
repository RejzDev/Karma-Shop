<?php
    return array(
        'product/([0-9]+)' => 'product/view/$1',
    
      
        'catalog' => 'catalog/index',
        'catalog/sort-([a-z]+)' => 'catalog/index/$1' ,
        'catalog/page-([0-9]+)' => 'catalog/index/$1' ,
        'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2' ,
        'category/([0-9]+)' => 'catalog/category/$1',
    
        'cart/checkout' => 'cart/checkout',
        'cart/saveorder' => 'cart/saveorder',
        'cart/add/([0-9]+)' => 'cart/addtocart/$1',
        'cart/remove/([0-9]+)' => 'cart/removeCart/$1',
        'cart' =>'cart/index',
    
        'user/register' => 'user/register',
        'user/login' => 'user/login',
        'user/logout' => 'user/logout',
    
        
        'admin/product/create' => 'adminProduct/create',
        'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
        'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
        'admin/product' => 'adminProduct/index',
       
        
        'admin/category/create' => 'adminCategory/create',
        'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
        'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
        'admin/category' => 'adminCategory/index',
        
        
        'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
        'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
        'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
        'admin/order' => 'adminOrder/index',
        
        
        'admin' => 'admin/index',
    
        'cabinet/edit' =>'cabinet/edit',
        'cabinet/order/([0-9]+)' =>'order/view/$1',
        'cabinet/order' =>'order/index',
        'cabinet' => 'cabinet/index' ,
        
        '' => 'home/index',
    );