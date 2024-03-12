<div class="vertical-product-card shadow-none rounded-2 position-relative d-md-flex align-items-center bg-white hr-product">

    @php
        $discountPercentage = discountPercentage($product);
    @endphp

    @if ($discountPercentage > 0)
        <span class="offer-badge text-white fw-bold fs-xs bg-danger position-absolute start-0 top-0">
            -{{ discountPercentage($product) }}% <span class="text-uppercase">{{ localize('Off') }}</span>
        </span>
    @endif


    <div class="thumbnail position-relative text-center p-4 flex-shrink-0">
        <img src="{{ uploadedAsset($product->thumbnail_image) }}" alt="{{ $product->collectLocalization('name') }}"
            class="img-fluid fit-cover">
    </div>
    <div class="card-content w-100">

        @if (getSetting('enable_reward_points') == 1)
            <span class="fs-xxs fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-title="{{ localize('Reward Points') }}">
                <i class="fas fa-medal"></i> {{ $product->reward_points }}
            </span>
        @endif

        <!--product category start-->
        <div class="mb-2 tt-category tt-line-clamp tt-clamp-1">
            @if ($product->categories()->count() > 0)
                @foreach ($product->categories as $category)
                    <a href="{{ route('products.index') }}?&category_id={{ $category->id }}"
                        class="d-inline-block text-muted fs-xxs">{{ $category->collectLocalization('name') }}
                        @if (!$loop->last)
                            ,
                        @endif
                    </a>
                @endforeach
            @endif
        </div>
        <!--product category end-->

        <h3 class="h5 mb-2">
            <a href="{{ route('products.show', $product->slug) }}"
                class="card-title fw-semibold mb-2 tt-line-clamp tt-clamp-1">{{ $product->collectLocalization('name') }}
            </a>
        </h3>

        <h6 class="price">
            @include('frontend.skinoasis.pages.partials.products.pricing', [
                'product' => $product,
                'br' => true,
            ])
        </h6>

        @php
            $isVariantProduct = 0;
            $stock = 0;
            if ($product->variations()->count() > 1) {
                $isVariantProduct = 1;
            } else {
                $stock = $product->variations[0]->product_variation_stock ? $product->variations[0]->product_variation_stock->stock_qty : 0;
            }
        @endphp

        @if ($isVariantProduct)
            <a href="javascript:void(0);" class="btn-product btn-cart mt-4 w-100"
                onclick="showProductDetailsModal({{ $product->id }})">{{ localize('Add to Cart') }}</a>
        @else
            <form action="" class="direct-add-to-cart-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="product_variation_id" value="{{ $product->variations[0]->id }}">
                <input type="hidden" value="1" name="quantity">

                @if (!$isVariantProduct && $stock < 1)
                    <a href="javascript:void(0);" class="btn-product btn-cart mt-4 w-100">
                        {{ localize('Out of Stock') }}</a>
                @else
                    <a href="javascript:void(0);" onclick="directAddToCartFormSubmit(this)"
                        class="btn-product btn-cart mt-4 direct-add-to-cart-btn add-to-cart-text">{{ localize('Add to Cart') }}</a>
                @endif
            </form>
        @endif


    </div>
</div>
