<!-- Product Favorite -->
<div class="arrival pt-8 pb-100 position-relative overflow-hidden z-1 trending-products-area">
    <div class="container">

        <div class="heading-fav">

            <h2 class="title d-inline" data-aos="fade-up">
                <img class="img-fluid text-left d-inline p-2 mb-lg-2" src="https://skinoasis.solusiitkreasi.com/public/uploads/media/0szep88MhwsQEGt367sGBWvjDSTF99mm4XryAZAb.png" width="220">
                backed-up with high knowledge in natural ingredients and headmost technologies,
            </h2><!-- End .entry-title -->

            <div class="entry-content mt-lg-6" data-aos="fade-up">
                <p style="font-size:22px !important;">We present you the list of extremely powerful effect but also delicate products.</p>
            </div><!-- End .entry-content -->
        </div>

        <div class="heading-fav heading-center mb-5 " data-aos="fade-up">
            <h4 class="subtitle text-uppercase mb-4">
                {{ localize('Products Favorite') }}
            </h4>
        </div>

        <div class="tab-content tab-content-carousel " data-aos="fade-up">
            <div class="tab-pane p-0 fade show active" id="arrival-all" role="tabpanel">
                <div class="owl-carousel  carousel-equal-height owl-simple carousel-with-shadow  cols-lg-4 cols-md-3 cols-2" data-toggle="owl"
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
                    @php
                        $trending_products = getSetting('top_trending_products') != null ? json_decode(getSetting('top_trending_products')) : [];
                        $products = \App\Models\Product::whereIn('id', $trending_products)->get();
                    @endphp

                    @foreach ($products as $product)
                            @include('frontend.skinoasis.pages.partials.products.favoriteProduct', [
                                'product' => $product,
                            ])
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</div>
