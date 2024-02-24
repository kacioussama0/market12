@php
    $html_tag_data = [];
    $title = 'المنتج';
    $description= 'تفاصيل المنتج'
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/baguetteBox.min.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
    <script src="/js/vendor/glide.min.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/pages/storefront.detail.js"></script>

    <script>
         $(document).ready(function () {
            
            let productId = new URL(window.location).search.split("?product=")[1]

            $.get("{{asset("js/vendor/products.json")}}",function(data) {
                let product = data.products.filter((product)=> product['product_id'] ==  productId);
                if(product.length) product = product[0];
                console.log(product);
                $('#product-title').text(product['title'])
                $('.product-price').text(product['price'] + 'د.ج')
                $('.product-description').html(product['description'])
                $(".product-stock").text("الكمية " + product['qte'])
                

             

                if(Object.keys(product.variantes).length > 0) {
            
                    $(".choices label").text(product.variantes.title)

                    for(let key in product.variantes.images) {

                        $(".choices select").append(`<option value="${product.variantes.choices[key]['id']}">${product.variantes.choices[key]['name']}</option>`)

                        $('.glide-large .glide__slides').append(
                        `
                        <li class="glide__slide p-0">
                                <a href="${product.variantes.images[key]}">
                                    <img
                                            alt="detail"
                                            src="${product.variantes.images[key]}"
                                            class="responsive border-0 rounded-md img-fluid mb-3 sh-35 sh-md-45 sh-xl-60 w-100"
                                    />
                                </a>
                        </li>

                        `
                )

                $('.glide-thumb .glide__slides').append(
                    `
                    <li class="glide__slide p-0">
                           <img alt="thumb" src="${product.variantes.images[key]}" class="responsive rounded-md img-fluid" />
                    </li>

                    `
                )
                    }
                }else {

                    $(".choices").remove()

                    $('.glide-large .glide__slides').html(
                        `
                        <li class="glide__slide p-0">
                                <a href="${product['image']}">
                                    <img
                                            alt="detail"
                                            src="${product['image']}"
                                            class="responsive border-0 rounded-md img-fluid mb-3 sh-35 sh-md-45 sh-xl-60 w-100"
                                    />
                                </a>
                        </li>

                        `
                )

                $('.glide-thumb .glide__slides').html(
                    `
                    <li class="glide__slide p-0">
                           <img alt="thumb" src="${product['image']}" class="responsive rounded-md img-fluid" />
                    </li>

                    `
                )
                }

                

            })
            
        })
    </script>

@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                            <span class="text-small align-middle">Storefront</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <!-- Product Left Side Start -->
                            <div class="col-12 col-xl-7">
                                <div class="glide glide-gallery" id="glideStorefrontDetail">
                                    <span class="badge rounded-pill bg-primary me-4 position-absolute e-n2 t-4 z-index-1 py-2 px-3 product-stock"></span>
                                    <!-- Large Images Start -->
                                    <div class="glide glide-large">
                                        <div class="glide__track" data-glide-el="track">
                                            <ul class="glide__slides gallery-glide-custom">
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Large Images End -->
                                    <!-- Thumbs Start -->
                                    <div class="glide glide-thumb">
                                        <div class="glide__track" data-glide-el="track">
                                            <ul class="glide__slides">
                                            </ul>
                                        </div>
                                        <div class="glide__arrows" data-glide-el="controls">
                                            <button class="btn btn-icon btn-icon-only btn-foreground hover-outline left-arrow" data-glide-dir="<">
                                                <i data-acorn-icon="chevron-left"></i>
                                            </button>
                                            <button class="btn btn-icon btn-icon-only btn-foreground hover-outline right-arrow" data-glide-dir=">">
                                                <i data-acorn-icon="chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Thumbs End -->
                                </div>
                            </div>
                            <!-- Product Left Side End -->

                            <!-- Product Right Side Start -->
                            <div class="col-12 col-xl-5 sh-xl-60 d-flex flex-column justify-content-between">
                                <div>
                                    <a class="mb-1 d-inline-block text-small" href="#"></a>
                                    <h3 class="mb-4" id="product-title"></h3>
                                    <!-- <div class="text-muted text-overline">
                                        <del>$ 14.25</del>
                                    </div> -->
                                    <div class="h4 product-price"></div>
                                   
                                    
                                    </p>
                                    <div class="row g-3 mb-4">

                                        <div class="mb-3 col-md-6">
                                            <label class="fw-bold form-label">الإسم الكامل</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="fw-bold form-label">رقم الهاتف</label>
                                            <input type="number" class="form-control">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="fw-bold form-label">الولاية</label>
                                            <input type="number" class="form-control">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="fw-bold form-label">البلدية</label>
                                            <input type="number" class="form-control">
                                        </div>


                                        <div class="mb-3 col-auto">
                                            <label class="fw-bold form-label">الكمية</label>
                                            <input type="number" class="form-control" value="1">
                                        </div>


                                        <div class="mb-3 col-md-6 choices">
                                            <label class="fw-bold form-label"></label>
                                            <select class="select-single-no-search w-100">
                                            </select>
                                        </div>

                                        

                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-icon btn-icon-end btn-outline-primary  me-sm-1 mb-1 mb-sm-0 w-100 " href="/Storefront/Checkout">
                                        <span>أطلب الأن</span>
                                        <i data-acorn-icon="check-square"></i>
                                    </a>
                                 
                                </div>
                            </div>
                            <!-- Product Right Side End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

        

            <div class="col-lg-8 mb-5">
                <!-- Details Start -->
                <h2 class="small-title">تفاصيل المنتج</h2>
                <div class="card mb-5">
                    <div class="card-body product-description">
                      
                    </div>
                </div>
                <!-- Details End -->
        
            </div>


            <div class="col-lg-4 mb-5">
                <!-- Summary Start -->
                <h2 class="small-title">ملخص الطلبية</h2>
                <div class="card mb-5 w-100 ">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="mb-2">
                                <p class="text-small text-muted mb-1">سعر المنتج</p>
                                <p>
                                    <span class="text-alternate">1</span>
                                </p>
                            </div>
                            <div class="mb-2">
                                <p class="text-small text-muted mb-1">المبلغ الكلي</p>
                                <p>
                                <span class="text-alternate">
                                <span class="text-small text-muted">د.ج</span>
                                285.25
                                </span>
                                </p>
                            </div>
                            <div class="mb-2">
                                <p class="text-small text-muted mb-1">التوصيل</p>
                                <p>
                                <span class="text-alternate">
                                <span class="text-small text-muted">د.ج</span>
                                12.50
                                </span>
                                </p>
                            </div>
                           
                            <div class="mb-2">
                                <p class="text-small text-muted mb-1">المبلغ الإجمالي</p>
                                <div class="cta-2">
                <span>
                <span class="text-small text-muted cta-2">د.ج</span>
                  321.50
                </span>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- Summary End -->
            </div>

        </div>
    </div>
@endsection
