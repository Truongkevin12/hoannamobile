
<?php
$iphone = DB::table('products')
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
             <div class="item product product-item product-item">
                
             <div class="wrap-item">
                @foreach ($iphone as $item)  
                  <div class="product-label"></div>      
                  <div class="product-item-image">
                     <a class="product-item-link">
                         <div>
                            <img width="100%"src="{{$item->image}}" sizes="210px">
                         </div>
                     </a>
                 </div>
                 <div class="product-item-info">
                    <a class="product-item-link product-name font-subtitle-1">
                         <h3> {{$item->name}}</h3>
                     </a> 
                     <div class="box-price-product">
                         <div class="price-box price-final_price" data-role="priceBox" data-product-id="7303" data-price-box="product-id-7303"><span class="normal-price">
     <span class="price-container price-final_price tax weee"
             >
                 <span class="price-label">Mua ngay</span>
             <span  id="product-price-7303" class="price-wrapper ">
             <span class="price">{{$item->price}} ₫</span><span class="discount">Giảm 28%</span><span class="market-price">{{$item->discount}}</span>        </span>
             </span>
        </span>
     </div>
     <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">3.207.000 ₫</span></div></div>
            <div class="box-product-bottom">
             <span class="label-special-gift gift-lll">Tặng thêm <strong>800.000đ</strong> khi Thu cũ đổi mới. Giảm thêm <strong>600.000đ</strong> khi mở thẻ TPBank</span>                    
            </div>        
                 </div>
                 @endforeach  
             </div>
             
         </div>
     <p><span class="hidden"> </span></p></div></div></div></div></main>
     ////////
     <div class=" slider-custom block-slider-2 container mt-16">
    
        <div class="homepage-content-wrapper">
                                                <div class="slider-header"> 
                    <h2 class="slider-title pb-16 bold">
                        iPhone VN/A                             
                    </h2>
                                                                                                            <div class="sub-links">
                                <a href="https://didongviet.vn/iphone-13" target="_blank">iPhone 13</a>
<a href="https://didongviet.vn/iphone-12" target="_blank">iPhone 12</a>
<a href="https://didongviet.vn/iphone-11" target="_blank">iPhone 11</a>
<a href="https://didongviet.vn/iphone-se-2022.html" target="_blank">iPhone SE 3 2022</a>                                </div>
                                                                    </div>
                                                <div class="slider-content">
                    <div class="products list items product-slider product-slider  product-sliders product-items slides row owl-carousel owl-theme" style="opacity: 1; display: block;">
                             
    <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4464px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-496px, 0px, 0px);"><div class="owl-item" style="width: 248px;"><div class="item product product-item product-item">
    <div class="wrap-item">
         <div class="product-label"><span class="flag flag-installment">Trả góp <font>0%</font></span><span class="percent-deal"><font>Giảm </font>4,400,000đ</span></div>            <div class="product-item-image">
            <a title=" iPhone 11 64GB Chính Hãng (VN/A) " class="product-item-link" href="https://didongviet.vn/iphone-11-64gb-chinh-hang.html">
                <div>
                    <img alt="iPhone 11 64GB Chính Hãng (VN/A) " src="https://cdn.didongviet.vn/pub/media/catalog/product//i/p/iphone-11-64gb-chinh-hang_3.jpg">
                </div>
            </a>
        </div>
        <div class="product-item-info">
                        <a title="iPhone 11 64GB Chính Hãng (VN/A) " class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-11-64gb-chinh-hang.html">
                <h3>iPhone 11 64GB Chính Hãng (VN/A) </h3>
            </a> 
            <div class="box-price-product">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="7303" data-price-box="product-id-7303"><span class="normal-price">

<span class="price-container price-final_price tax weee">
        <span class="price-label">Mua ngay</span>
    <span id="product-price-7303" data-price-amount="10590000" data-price-type="finalPrice" class="price-wrapper ">
       
    <span class="price">10.590.000&nbsp;₫</span><span class="discount">Giảm 29%</span><span class="market-price">14.990.000&nbsp;₫</span>        </span>
    </span>
</span>

</div>                    <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">3.177.000&nbsp;₫</span></div>                </div>
                    

                    <div class="box-product-bottom">
                                                                    <span class="label-special-gift gift-lll">Tặng thêm <strong>800.000đ</strong> khi Thu cũ đổi mới. Giảm thêm <strong>600.000đ</strong> khi mở thẻ TPBank</span>                    </div>
                            
        </div>
    </div>
</div></div><div class="owl-item" style="width: 248px;"><div class="item product product-item product-item">
    <div class="wrap-item">
         <div class="product-label"><span class="percent-deal"><font>Giảm </font>5,600,000đ</span></div>            <div class="product-item-image">
            <a title=" iPhone 13 128GB Chính Hãng (VN/A)" class="product-item-link" href="https://didongviet.vn/iphone-13-128gb.html">
                <div>
                    <img alt="iPhone 13 128GB Chính Hãng (VN/A)" src="https://cdn.didongviet.vn/pub/media/catalog/product//i/p/iphone-13-128gb-didongviet_1.jpg">
                </div>
            </a>
        </div>
        <div class="product-item-info">
                        <a title="iPhone 13 128GB Chính Hãng (VN/A)" class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-13-128gb.html">
                <h3>iPhone 13 128GB Chính Hãng (VN/A)</h3>
            </a> 
            <div class="box-price-product">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="13599" data-price-box="product-id-13599"><span class="normal-price">

<span class="price-container price-final_price tax weee">
        <span class="price-label">Mua ngay</span>
    <span id="product-price-13599" data-price-amount="18590000" data-price-type="finalPrice" class="price-wrapper ">
       
    <span class="price">18.590.000&nbsp;₫</span><span class="discount">Giảm 23%</span><span class="market-price">24.190.000&nbsp;₫</span>        </span>
    </span>
</span>

</div>                    <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">5.577.000&nbsp;₫</span></div>                </div>
                    

                    <div class="box-product-bottom">
                                                                    <span class="label-special-gift gift-lll">Tặng thêm <strong>1.000.000đ</strong> khi Thu cũ đổi mới. Giảm thêm <strong>600.000đ</strong> khi mở thẻ TPBank</span><div class="box-sp-gift gift-type1 gift"><p style="text-align: right;">&nbsp;</p>
<p>&nbsp;</p></div>                    </div>
                            
        </div>
    </div>
</div></div><div class="owl-item" style="width: 248px;"><div class="item product product-item product-item">
    <div class="wrap-item">
         <div class="product-label"><span class="percent-deal"><font>Giảm </font>7,500,000đ</span></div>            <div class="product-item-image">
            <a title=" iPhone 13 Pro Max 128GB Chính Hãng (VN/A)" class="product-item-link" href="https://didongviet.vn/iphone-13-pro-max-128gb.html">
                <div>
                    <img alt="iPhone 13 Pro Max 128GB Chính Hãng (VN/A)" src="https://cdn.didongviet.vn/pub/media/catalog/product//i/p/iphone-13-pro-max-128gb-didongviet.jpg">
                </div>
            </a>
        </div>
        <div class="product-item-info">
                        <a title="iPhone 13 Pro Max 128GB Chính Hãng (VN/A)" class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-13-pro-max-128gb.html">
                <h3>iPhone 13 Pro Max 128GB Chính Hãng (VN/A)</h3>
            </a> 
            <div class="box-price-product">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="13607" data-price-box="product-id-13607"><span class="normal-price">

<span class="price-container price-final_price tax weee">
        <span class="price-label">Mua ngay</span>
    <span id="product-price-13607" data-price-amount="26490000" data-price-type="finalPrice" class="price-wrapper ">
       
    <span class="price">26.490.000&nbsp;₫</span><span class="discount">Giảm 22%</span><span class="market-price">33.990.000&nbsp;₫</span>        </span>
    </span>
</span>

</div>                    <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">7.947.000&nbsp;₫</span></div>                </div>
                    

                    <div class="box-product-bottom">
                                                                    <span class="label-special-gift gift-lll">Tặng thêm <strong>1.000.000đ</strong> khi Thu cũ đổi mới. Giảm thêm <strong>600.000đ</strong> khi mở thẻ TPBank</span>                    </div>
                            
        </div>
    </div>
</div></div><div class="owl-item" style="width: 248px;"><div class="item product product-item product-item">
    <div class="wrap-item">
         <div class="product-label"><span class="percent-deal"><font>Giảm </font>6,500,000đ</span></div>            <div class="product-item-image">
            <a title=" iPhone 13 Pro 128GB Chính Hãng (VN/A)" class="product-item-link" href="https://didongviet.vn/iphone-13-pro-128gb.html">
                <div>
                    <img alt="iPhone 13 Pro 128GB Chính Hãng (VN/A)" src="https://cdn.didongviet.vn/pub/media/catalog/product//i/p/iphone-13-pro-128gb-didongviet.jpg">
                </div>
            </a>
        </div>
        <div class="product-item-info">
                        <a title="iPhone 13 Pro 128GB Chính Hãng (VN/A)" class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-13-pro-128gb.html">
                <h3>iPhone 13 Pro 128GB Chính Hãng (VN/A)</h3>
            </a> 
            <div class="box-price-product">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="13604" data-price-box="product-id-13604"><span class="normal-price">

<span class="price-container price-final_price tax weee">
        <span class="price-label">Mua ngay</span>
    <span id="product-price-13604" data-price-amount="24390000" data-price-type="finalPrice" class="price-wrapper ">
       
    <span class="price">24.390.000&nbsp;₫</span><span class="discount">Giảm 21%</span><span class="market-price">30.890.000&nbsp;₫</span>        </span>
    </span>
</span>

</div>                    <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">7.317.000&nbsp;₫</span></div>                </div>
                    

                    <div class="box-product-bottom">
                                                                    <span class="label-special-gift gift-lll">Tặng thêm&nbsp;<strong>1.000.000đ</strong>&nbsp;khi Thu cũ đổi mới. Giảm thêm&nbsp;<strong>600.000đ</strong>&nbsp;khi mở thẻ TPBank</span>                    </div>
                            
        </div>
    </div>
</div></div><div class="owl-item" style="width: 248px;"><div class="item product product-item product-item">
    <div class="wrap-item">
         <div class="product-label"><span class="percent-deal"><font>Giảm </font>7,800,000đ</span></div>            <div class="product-item-image">
            <a title=" iPhone 13 Pro Max 256GB Chính Hãng (VN/A)" class="product-item-link" href="https://didongviet.vn/iphone-13-pro-max-256gb.html">
                <div>
                    <img alt="iPhone 13 Pro Max 256GB Chính Hãng (VN/A)" src="https://cdn.didongviet.vn/pub/media/catalog/product//i/p/iphone-13-pro-max-256gb-didongviet_1.jpg">
                </div>
            </a>
        </div>
        <div class="product-item-info">
        <div style="" class="label-sticker-title"><img src="https://didongviet.vn/pub/media/efw/icons/image//s/a/sale-soc.png"></div>                <a title="iPhone 13 Pro Max 256GB Chính Hãng (VN/A)" class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-13-pro-max-256gb.html">
                <h3>iPhone 13 Pro Max 256GB Chính Hãng (VN/A)</h3>
            </a> 
            <div class="box-price-product">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="13608" data-price-box="product-id-13608"><span class="normal-price">

<span class="price-container price-final_price tax weee">
        <span class="price-label">Mua ngay</span>
    <span id="product-price-13608" data-price-amount="29190000" data-price-type="finalPrice" class="price-wrapper ">
       
    <span class="price">29.190.000&nbsp;₫</span><span class="discount">Giảm 21%</span><span class="market-price">36.990.000&nbsp;₫</span>        </span>
    </span>
</span>

</div>                    <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">8.757.000&nbsp;₫</span></div>                </div>
                    

                    <div class="box-product-bottom">
                                                                    <span class="label-special-gift gift-lll">Từ 23.09 - 25.09: Giá chỉ từ <strong>28,690,000đ</strong></span>                    </div>
                            
        </div>
    </div>
</div></div><div class="owl-item" style="width: 248px;"><div class="item product product-item product-item">
    <div class="wrap-item">
         <div class="product-label"><span class="percent-deal"><font>Giảm </font>8,300,000đ</span></div>            <div class="product-item-image">
            <a title=" iPhone 13 Pro Max 512GB Chính Hãng (VN/A)" class="product-item-link" href="https://didongviet.vn/iphone-13-pro-max-512gb.html">
                <div>
                    <img alt="iPhone 13 Pro Max 512GB Chính Hãng (VN/A)" src="https://cdn.didongviet.vn/pub/media/catalog/product//i/p/iphone-13-pro-max-512gb-didongviet_1.jpg">
                </div>
            </a>
        </div>
        <div class="product-item-info">
        <div style="" class="label-sticker-title"><img src="https://didongviet.vn/pub/media/efw/icons/image//s/a/sale-soc.png"></div>                <a title="iPhone 13 Pro Max 512GB Chính Hãng (VN/A)" class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-13-pro-max-512gb.html">
                <h3>iPhone 13 Pro Max 512GB Chính Hãng (VN/A)</h3>
            </a> 
            <div class="box-price-product">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="13609" data-price-box="product-id-13609"><span class="normal-price">

<span class="price-container price-final_price tax weee">
        <span class="price-label">Mua ngay</span>
    <span id="product-price-13609" data-price-amount="34990000" data-price-type="finalPrice" class="price-wrapper ">
       
    <span class="price">34.990.000&nbsp;₫</span><span class="discount">Giảm 19%</span><span class="market-price">43.290.000&nbsp;₫</span>        </span>
    </span>
</span>

</div>                    <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">10.497.000&nbsp;₫</span></div>                </div>
                    

                    <div class="box-product-bottom">
                                                                    <span class="label-special-gift gift-lll">Tặng thêm&nbsp;<strong>1.000.000đ</strong>&nbsp;khi Thu cũ đổi mới. Giảm thêm&nbsp;<strong>600.000đ</strong>&nbsp;khi mở thẻ TPBank</span>                    </div>
                            
        </div>
    </div>
</div></div><div class="owl-item" style="width: 248px;"><div class="item product product-item product-item">
    <div class="wrap-item">
         <div class="product-label"><span class="percent-deal"><font>Giảm </font>3,000,000đ</span></div>            <div class="product-item-image">
            <a title=" iPhone SE 3 64GB Chính Hãng (VN/A)" class="product-item-link" href="https://didongviet.vn/iphone-se-2022-64gb.html">
                <div>
                    <img alt="iPhone SE 3 64GB Chính Hãng (VN/A)" src="https://cdn.didongviet.vn/pub/media/catalog/product//t/r/trang-thumb.png">
                </div>
            </a>
        </div>
        <div class="product-item-info">
        <div style="" class="label-sticker-title"><img src="https://didongviet.vn/pub/media/efw/icons/image//s/a/sale-soc.png"></div>                <a title="iPhone SE 3 64GB Chính Hãng (VN/A)" class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-se-2022-64gb.html">
                <h3>iPhone SE 3 64GB Chính Hãng (VN/A)</h3>
            </a> 
            <div class="box-price-product">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="17587" data-price-box="product-id-17587"><span class="normal-price">

<span class="price-container price-final_price tax weee">
        <span class="price-label">Mua ngay</span>
    <span id="product-price-17587" data-price-amount="9990000" data-price-type="finalPrice" class="price-wrapper ">
       
    <span class="price">9.990.000&nbsp;₫</span><span class="discount">Giảm 23%</span><span class="market-price">12.990.000&nbsp;₫</span>        </span>
    </span>
</span>

</div>                    <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">2.997.000&nbsp;₫</span></div>                </div>
                    

                    <div class="box-product-bottom">
                                                                    <span class="label-special-gift gift-lll">Tặng thêm <strong>500.000đ</strong> khi Thu cũ đổi mới. Giảm thêm <strong>600.000đ</strong> khi mở thẻ TPBank</span>                    </div>
                            
        </div>
    </div>
</div></div><div class="owl-item" style="width: 248px;"><div class="item product product-item product-item">
    <div class="wrap-item">
         <div class="product-label"><span class="percent-deal"><font>Giảm </font>2,000,000đ</span></div>            <div class="product-item-image">
            <a title=" iPhone SE 3 128GB Chính Hãng (VN/A)" class="product-item-link" href="https://didongviet.vn/iphone-se-2022-128gb.html">
                <div>
                    <img alt="iPhone SE 3 128GB Chính Hãng (VN/A)" src="https://cdn.didongviet.vn/pub/media/catalog/product//s/e/se-thumb.png">
                </div>
            </a>
        </div>
        <div class="product-item-info">
        <div style="" class="label-sticker-title"><img src="https://didongviet.vn/pub/media/efw/icons/image//s/a/sale-soc.png"></div>                <a title="iPhone SE 3 128GB Chính Hãng (VN/A)" class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-se-2022-128gb.html">
                <h3>iPhone SE 3 128GB Chính Hãng (VN/A)</h3>
            </a> 
            <div class="box-price-product">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="16898" data-price-box="product-id-16898"><span class="normal-price">

<span class="price-container price-final_price tax weee">
        <span class="price-label">Mua ngay</span>
    <span id="product-price-16898" data-price-amount="11990000" data-price-type="finalPrice" class="price-wrapper ">
       
    <span class="price">11.990.000&nbsp;₫</span><span class="discount">Giảm 14%</span><span class="market-price">13.990.000&nbsp;₫</span>        </span>
    </span>
</span>

</div>                    <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">3.597.000&nbsp;₫</span></div>                </div>
                    

                    <div class="box-product-bottom">
                                                                    <span class="label-special-gift gift-lll">Tặng thêm <strong>500.000đ</strong> khi Thu cũ đổi mới. Giảm thêm <strong>600.000đ</strong> khi mở thẻ TPBank</span>                    </div>
                            
        </div>
    </div>
</div></div><div class="owl-item" style="width: 248px;"><div class="item product product-item product-item">
    <div class="wrap-item">
         <div class="product-label"></div>            <div class="product-item-image">
            <a title=" iPhone 13 Pro Max 512GB Xanh lá Chính Hãng (VN/A)" class="product-item-link" href="https://didongviet.vn/iphone-13-pro-max-512gb-xanh-la-cay-chinh-hang.html">
                <div>
                    <img alt="iPhone 13 Pro Max 512GB Xanh lá Chính Hãng (VN/A)" src="https://cdn.didongviet.vn/pub/media/catalog/product//i/p/iphone-13-pro-aar-xanh-la-didongviet_5.jpg">
                </div>
            </a>
        </div>
        <div class="product-item-info">
        <div style="" class="label-sticker-title"><img src="https://didongviet.vn/pub/media/efw/icons/image//s/a/sale-soc.png"></div>                <a title="iPhone 13 Pro Max 512GB Xanh lá Chính Hãng (VN/A)" class="product-item-link product-name font-subtitle-1" href="https://didongviet.vn/iphone-13-pro-max-512gb-xanh-la-cay-chinh-hang.html">
                <h3>iPhone 13 Pro Max 512GB Xanh lá Chính Hãng (VN/A)</h3>
            </a> 
            <div class="box-price-product">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="17749" data-price-box="product-id-17749"><span class="normal-price">

<span class="price-container price-final_price tax weee">
        <span class="price-label">Mua ngay</span>
    <span id="product-price-17749" data-price-amount="34990000" data-price-type="finalPrice" class="price-wrapper ">
       
    <span class="price">34.990.000&nbsp;₫</span>        </span>
    </span>
</span>

</div>                    <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">10.497.000&nbsp;₫</span></div>                </div>
                    

                    <div class="box-product-bottom">
                                                                    <span class="label-special-gift gift-lll">Tặng thêm <strong>1.000.000đ</strong> khi Thu cũ đổi mới. Giảm thêm <strong>600.000đ</strong> khi mở thẻ TPBank</span>                    </div>
                            
        </div>
    </div>
</div></div></div></div>
  
     
    
  
     
    
  
     
    
  
     
    
  
     
    
  
     
    
  
     
    
  
     
    
  
                       
</div>
 @endsection
 
