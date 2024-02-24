@php
    $html_tag_data = [];
    $title = 'المتجر';
    $description= 'المتجر الرئيسي'
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
    <script src="/js/vendor/movecontent.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/storefront.home.js"></script>
    <script>

        

        function getCategories() {

            $.get("{{asset("js/vendor/categories.json")}}",function(data) {

                document.querySelector("#categoryMenuMoveContent").innerHTML +=
                    `
                        <a class="nav-link body-link px-0 py-2" href="#category-0" onclick="createProducts()">
                                <span class="align-middle text-capitalize">الكل</span>
                        </a> 
                    `
                for(category of data.categories) {
                    document.querySelector("#categoryMenuMoveContent").innerHTML +=
                `
                    <a class="nav-link body-link px-0 py-2" href="#category-${category.id}" onclick="createProducts(${category.id})">
                        <span class="align-middle text-capitalize">${category.title}</span>
                    </a> 
                `
                }
                })
        }

        function createProducts(categoryId = "") {

            $("#menuModal").modal('hide');

            document.querySelector(".products").innerHTML = ""

            $.get("{{asset("js/vendor/products.json")}}",function(data) {

                if(categoryId) {
                    products = data.products.filter((product)=> product['category_id'] == categoryId);
                }else {
                    products = data.products;
                }
                

                for(product of products) {

                    document.querySelector(".products").innerHTML += 
                    `
                    <div class="col ${(product.qte <= 0) ? "opacity-50" : ""}">
                        <div class="card h-100">
                            <span class="badge rounded-pill ${(product.qte >= 10) ? "bg-primary" : (product.qte <= 0) ? "bg-danger": "bg-warning"} ms-3 position-absolute s-n2 t-2 z-index-1">الكمية ${(product.qte < 0) ? 0 : product.qte}</span>
                            <img src="${product.image}" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body py-3">
                                <div class="h6 mb-0 d-flex" style="font-weight: bold">
                                    <a href="/Storefront/Detail?product=${product['product_id']}" class="body-link d-block  lh-1-25 stretched-link">
                                        <span>${product.title}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="card-text mb-0">
                                    <div>${product.price} د.ج</div>
                                </div>
                            </div>
                        </div>
                    </div>

                `
            }

})
        }

        let products = []

        $(document).ready(function () {
            
            createProducts()
            getCategories()
            
        })
    </script>
@endsection

@section('content')
    <div class="container">

           <!-- Category Modal Start -->
    <div class="modal modal-right fade" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">التصنيفات</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Content of below will be moved to #menuColumn or back in here based on the data-move-breakpoint attribute below -->
                    <div id="categoryMenuMoveContent" data-move-target="#menuColumn" data-move-breakpoint="xl">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Modal End -->

        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                            <span class="text-small align-middle">الرئيسية</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-center justify-content-end">
                    <!-- Categories Button For Small Screens Start -->
                    <button type="button" class="btn btn-icon btn-outline-primary d-inline-block w-100 w-md-auto" data-bs-toggle="modal"
                            data-bs-target="#menuModal">
                            <i data-acorn-icon="more-horizontal"></i>
                        <span>التصنيفات</span>
                    </button>
                    <!-- Categories Button For Small Screens End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->


    
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-2 mb-5 products">

        </div>
        <!-- Trending End -->

    </div>

 
@endsection
