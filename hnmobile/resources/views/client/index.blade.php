<?php
$sp = DB::table('products')
    ->orderby('viewers', 'DESC')
    ->limit(10)
    ->get();
?>



@extends('layout')
@section('content')
 <main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
     <div class=" slider-custom block-slider-2 container mt-16">
          <div class="homepage-content-wrapper">
            <div class="slider-header"> 
                <h2 class="slider-title pb-16 bold">iPhone VN/A</h2>
                    <div class="sub-links">
                        <a href="https://didongviet.vn/iphone-13" target="_blank">iPhone 13</a>
                            <a href="https://didongviet.vn/iphone-12" target="_blank">iPhone 12</a>
                            <a href="https://didongviet.vn/iphone-11" target="_blank">iPhone 11</a>
                            <a href="https://didongviet.vn/iphone-se-2022.html" target="_blank">iPhone SE 3 2022</a>                                </div>
                    </div>
                <div class="slider-content">
                    <div class="products list items product-slider product-slider  product-sliders product-items slides row">  
                        @foreach ($sp as $item)    
             <div class="item product product-item product-item">
             <div class="wrap-item">
                  <div class="product-label"></div>            
                  <div class="product-item-image">
                     <a title="" class="product-item-link" href="">
                         <div>
                             <img alt="" src="{{$item->images}}"/>
                         </div>
                     </a>
                 </div>
                 <div class="product-item-info">
                    <a title="iPhone 11 64GB Chính Hãng (VN/A) " class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-11-64gb-chinh-hang.html">
                         <h3>iPhone 11 64GB Chính Hãng (VN/A) </h3>
                     </a> 
                     <div class="box-price-product">
                         <div class="price-box price-final_price" data-role="priceBox" data-product-id="7303" data-price-box="product-id-7303"><span class="normal-price">
     <span class="price-container price-final_price tax weee"
             >
                 <span class="price-label">Mua ngay</span>
             <span  id="product-price-7303" class="price-wrapper ">
             <span class="price">10.690.000 ₫</span><span class="discount">Giảm 28%</span><span class="market-price">14.990.000 ₫</span>        </span>
             </span>
        </span>
     </div>
     <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">3.207.000 ₫</span></div></div>
            <div class="box-product-bottom">
             <span class="label-special-gift gift-lll">Tặng thêm <strong>800.000đ</strong> khi Thu cũ đổi mới. Giảm thêm <strong>600.000đ</strong> khi mở thẻ TPBank</span>                    
            </div>                     
                 </div>
             </div>
         </div>
           
              
             
             <script>
             window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/didongviet.vn\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/didongviet.vn\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/didongviet.vn\/"};
         </script>
         <!-- ko template: getTemplate() --><!-- /ko -->
         <script type="text/x-magento-init">
             {
                 "#authenticationPopup": {
                     "Magento_Ui/js/core/app": {"components":{"authenticationPopup":{"component":"Magento_Customer\/js\/view\/authentication-popup","children":{"messages":{"component":"Magento_Ui\/js\/view\/messages","displayArea":"messages"},"captcha":{"component":"Magento_Captcha\/js\/view\/checkout\/loginCaptcha","displayArea":"additional-login-form-fields","formId":"user_login","configSource":"checkout"},"amazon-button":{"component":"Amazon_Login\/js\/view\/login-button-wrapper","sortOrder":"0","displayArea":"additional-login-form-fields","config":{"tooltip":"Securely login into our website using your existing Amazon details.","componentDisabled":true}},"social-buttons":{"component":"Mageplaza_SocialLogin\/js\/view\/social-buttons","displayArea":"before"}}}}}            },
                 "*": {
                     "Magento_Ui/js/block-loader": "https\u003A\u002F\u002Fdidongviet.vn\u002Fpub\u002Fstatic\u002Ffrontend\u002Fddv\u002Fdefault\u002Fvi_VN\u002Fimages\u002Floader\u002D1.gif"
                 }
             }
         </script>
     </div>
     <script type="text/x-magento-init">
         {
             "*": {
                 "Magento_Customer/js/section-config": {
                     "sections": {"stores\/store\/switch":["*"],"stores\/store\/switchrequest":["*"],"directory\/currency\/switch":["*"],"*":["messages"],"customer\/account\/logout":["*","recently_viewed_product","recently_compared_product","persistent"],"customer\/account\/loginpost":["*"],"customer\/account\/createpost":["*"],"customer\/account\/editpost":["*"],"customer\/ajax\/login":["checkout-data","cart","captcha","customer"],"catalog\/product_compare\/add":["compare-products"],"catalog\/product_compare\/remove":["compare-products"],"catalog\/product_compare\/clear":["compare-products"],"sales\/guest\/reorder":["cart"],"sales\/order\/reorder":["cart"],"checkout\/cart\/add":["cart","directory-data"],"checkout\/cart\/delete":["cart"],"checkout\/cart\/updatepost":["cart"],"checkout\/cart\/updateitemoptions":["cart"],"checkout\/cart\/couponpost":["cart"],"checkout\/cart\/estimatepost":["cart"],"checkout\/cart\/estimateupdatepost":["cart"],"checkout\/onepage\/saveorder":["cart","checkout-data","last-ordered-items"],"checkout\/sidebar\/removeitem":["cart"],"checkout\/sidebar\/updateitemqty":["cart"],"rest\/*\/v1\/carts\/*\/payment-information":["cart","last-ordered-items","instant-purchase"],"rest\/*\/v1\/guest-carts\/*\/payment-information":["cart"],"rest\/*\/v1\/guest-carts\/*\/selected-payment-method":["cart","checkout-data"],"rest\/*\/v1\/carts\/*\/selected-payment-method":["cart","checkout-data","instant-purchase"],"customer\/address\/*":["instant-purchase"],"customer\/account\/*":["instant-purchase"],"vault\/cards\/deleteaction":["instant-purchase"],"multishipping\/checkout\/overviewpost":["cart"],"authorizenet\/directpost_payment\/place":["cart","checkout-data"],"paypal\/express\/placeorder":["cart","checkout-data"],"paypal\/payflowexpress\/placeorder":["cart","checkout-data"],"paypal\/express\/onauthorization":["cart","checkout-data"],"persistent\/index\/unsetcookie":["persistent"],"review\/product\/post":["review"],"braintree\/paypal\/placeorder":["cart","checkout-data"],"wishlist\/index\/add":["wishlist"],"wishlist\/index\/remove":["wishlist"],"wishlist\/index\/updateitemoptions":["wishlist"],"wishlist\/index\/update":["wishlist"],"wishlist\/index\/cart":["wishlist","cart"],"wishlist\/index\/fromcart":["wishlist","cart"],"wishlist\/index\/allcart":["wishlist","cart"],"wishlist\/shared\/allcart":["wishlist","cart"],"wishlist\/shared\/cart":["cart"],"ape\/customer_ajax\/register":["checkout-data","cart","customer"],"rest\/*\/v1\/guest-carts\/*\/set-payment-information":["cart","checkout-data"],"rest\/*\/v1\/carts\/*\/set-payment-information":["cart","checkout-data"],"sociallogin\/popup\/create":["checkout-data","cart"]},
                     "clientSideSections": ["checkout-data","cart-data","chatData"],
                     "baseUrls": ["https:\/\/didongviet.vn\/"],
                     "sectionNames": ["messages","customer","compare-products","last-ordered-items","cart","directory-data","captcha","instant-purchase","persistent","review","wishlist","chatData","recently_viewed_product","recently_compared_product","product_data_storage","paypal-billing-agreement"]            }
             }
         }
     </script>
     <script type="text/x-magento-init">
         {
             "*": {
                 "Magento_Customer/js/customer-data": {
                     "sectionLoadUrl": "https\u003A\u002F\u002Fdidongviet.vn\u002Fcustomer\u002Fsection\u002Fload\u002F",
                     "expirableSectionLifetime": 60,
                     "expirableSectionNames": ["cart","persistent"],
                     "cookieLifeTime": "604800",
                     "updateSessionUrl": "https\u003A\u002F\u002Fdidongviet.vn\u002Fcustomer\u002Faccount\u002FupdateSession\u002F"
                 }
             }
         }
     </script>
     <script type="text/x-magento-init">
         {
             "*": {
                 "Magento_Customer/js/invalidation-processor": {
                     "invalidationRules": {
                         "website-rule": {
                             "Magento_Customer/js/invalidation-rules/website-rule": {
                                 "scopeConfig": {
                                     "websiteId": "1"
                                 }
                             }
                         }
                     }
                 }
             }
         }
     </script>
     <script type="text/x-magento-init">
         {
             "body": {
                 "pageCache": {"url":"https:\/\/didongviet.vn\/page_cache\/block\/render\/","handles":["default","cms_index_index","cms_page_view","cms_index_index_id_home"],"originalRequest":{"route":"cms","controller":"index","action":"index","uri":"\/"},"versionCookieName":"private_content_version"}        }
         }
     </script>
     
     
     
     
     
     <p><span class="hidden"> </span></p></div></div></div></div></main>
 @endsection
