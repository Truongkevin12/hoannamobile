<?php
$smartphone = DB::table('products')
    ->orderby('viewers', 'DESC')
    ->limit(10)
    ->get();
?>



    
    
    <script type="text/javascript">
        require(['etheme/owlcarousel', 'jquery','etheme/slick'], function (owlcarousel, $) {
            jQuery(document).ready(function() {
                jQuery(".slider-trademark").slick({
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    autoplay: true,
                    dots: false,
                    infinite: true,
                    arrows:true,
                    responsive: [
                        {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true 
                             
                        }
                        },
                        {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                        }
                        
                    ]
                });
                 
               
            });
        });
    </script>
    </div>