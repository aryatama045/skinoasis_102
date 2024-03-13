<!-- Product Favorite -->
<div class="arrival pt-8 pb-100 position-relative overflow-hidden z-1 featured-product-area" data-aos="fade-up">
    <div class="container">

        <div class="heading-fav heading-center mb-5 ">
            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a href="#featured-all" class="nav-link font-size-normal letter-spacing-large active" data-toggle="tab" role="tab">All</a>
                </li>

                @php
                    $trending_product_categories = getSetting('trending_product_categories') != null ? json_decode(getSetting('trending_product_categories')) : [];
                    $categories = \App\Models\Category::whereIn('id', $trending_product_categories)->get();
                @endphp
                @foreach ($categories as $category)
                <li class="nav-item">
                    <a href="#featured-{{ $category->id }}" class="nav-link font-size-normal letter-spacing-large" data-toggle="tab" role="tab">{{ $category->collectLocalization('name') }}</a>
                </li>
                @endforeach

            </ul>
        </div>

        @php
            $trending_products = getSetting('top_trending_products') != null ? json_decode(getSetting('top_trending_products')) : [];
            $products = \App\Models\Product::whereIn('id', $trending_products)->get();
        @endphp

        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="featured-all" role="tabpanel">
                <div class="owl-carousel  carousel-equal-height owl-simple carousel-with-shadow cols-lg-4 cols-md-3 cols-2" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items": 2
                            },
                            "768": {
                                "items": 3
                            },
                            "992": {
                                "items": 4,
                                "nav": true
                            }
                        }
                    }'>

                    @foreach ($products as $product)
                            @include('frontend.skinoasis.pages.partials.products.favoriteProduct', [
                                'product' => $product,
                            ])
                    @endforeach
                </div>
            </div>

            @foreach ($products as $product)
                <div class="tab-pane p-0 fade " id="featured-@php if($product->categories()->count() > 0){
                            foreach ($product->categories as $category) {
                                echo $category->id .' ';
                            }
                        @endphp" role="tabpanel">
                    <div class="owl-carousel  carousel-equal-height owl-simple carousel-with-shadow cols-lg-4 cols-md-3 cols-2" data-toggle="owl"
                        data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items": 2
                                },
                                "768": {
                                    "items": 3
                                },
                                "992": {
                                    "items": 4,
                                    "nav": true
                                }
                            }
                        }'>

                        @include('frontend.skinoasis.pages.partials.products.favoriteProduct', [
                            'product' => $product,
                        ])


                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
