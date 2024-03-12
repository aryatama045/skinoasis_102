@extends('backend.layouts.master')

@section('title')
    {{ localize('Website Homepage Configuration') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('contents')
    <section class="tt-section pt-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card tt-page-header">
                        <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                            <div class="tt-page-title">
                                <h2 class="h5 mb-lg-0">{{ localize('On Sale Products') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 g-4">
                <!--left sidebar-->
                <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data"
                        class="halal-popular-products-form">
                        @csrf
                        <!--slider info start-->
                        <div class="card mb-4">
                            <div class="card-body">

                                <div class="mb-4">
                                    <label for="halal_on_sale_sub_title"
                                        class="form-label">{{ localize('Sub Title') }}</label>
                                    <input type="hidden" name="types[]" value="halal_on_sale_sub_title">
                                    <input type="text" name="halal_on_sale_sub_title" id="halal_on_sale_sub_title"
                                        placeholder="{{ localize('Type sub title') }}" class="form-control"
                                        value="{{ getSetting('halal_on_sale_sub_title') }}" required>
                                </div>

                                <div class="mb-4">
                                    <label for="halal_on_sale_title" class="form-label">{{ localize('Title') }}</label>
                                    <input type="hidden" name="types[]" value="halal_on_sale_title">
                                    <input type="text" name="halal_on_sale_title" id="halal_on_sale_title"
                                        placeholder="{{ localize('Type title') }}" class="form-control"
                                        value="{{ getSetting('halal_on_sale_title') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="halal_on_sale_link_text"
                                        class="form-label">{{ localize('Link Text') }}</label>
                                    <input type="hidden" name="types[]" value="halal_on_sale_link_text">
                                    <input type="text" name="halal_on_sale_link_text" id="halal_on_sale_link_text"
                                        placeholder="{{ localize('Type text') }}" class="form-control"
                                        value="{{ getSetting('halal_on_sale_link_text') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="halal_on_sale_link" class="form-label">{{ localize('Link') }}</label>
                                    <input type="hidden" name="types[]" value="halal_on_sale_link">
                                    <input type="url" name="halal_on_sale_link" id="halal_on_sale_link"
                                        placeholder="{{ env('APP_URL') . '/example' }}" class="form-control"
                                        value="{{ getSetting('halal_on_sale_link') }}" required>
                                </div>



                                <div class="mb-3">
                                    <label class="form-label">{{ localize('On Sale Banner') }}</label>
                                    <input type="hidden" name="types[]" value="halal_on_sale_banner">
                                    <div class="tt-image-drop rounded">
                                        <span class="fw-semibold">{{ localize('Choose Avatar Image') }}</span>
                                        <!-- choose media -->
                                        <div class="tt-product-thumb show-selected-files mt-3">
                                            <div class="avatar avatar-xl cursor-pointer choose-media"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                                onclick="showMediaManager(this)" data-selection="single">
                                                <input type="hidden" name="halal_on_sale_banner"
                                                    value="{{ getSetting('halal_on_sale_banner') }}">
                                                <div class="no-avatar rounded-circle">
                                                    <span><i data-feather="plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- choose media -->
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ localize('Sale Products') }}</label>
                                    <input type="hidden" name="types[]" value="halal_on_sale_products">
                                    @php
                                        $productIds = getSetting('halal_on_sale_products') != null ? json_decode(getSetting('halal_on_sale_products')) : [];
                                    @endphp
                                    <select class="select2 form-control halal_on_sale_products" multiple="multiple"
                                        data-placeholder="{{ localize('Select products') }}"
                                        name="halal_on_sale_products[]" required>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}"
                                                @if (in_array($product->id, $productIds)) selected @endif>
                                                {{ $product->collectLocalization('name') }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--slider info end-->


                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">
                                        <i data-feather="save" class="me-1"></i> {{ localize('Save') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!--right sidebar-->
                <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                    <div class="card tt-sticky-sidebar">
                        <div class="card-body">
                            <h5 class="mb-4">{{ localize('Homepage Configuration') }}</h5>
                            <div class="tt-vertical-step-link">
                                <ul class="list-unstyled">
                                    @include('backend.pages.appearance.halal.homepage.inc.rightSidebar')
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('scripts')
    <script>
        "use strict";

        // runs when the document is ready --> for media files
        $(document).ready(function() {
            getChosenFilesCount();
            showSelectedFilePreviewOnLoad();
            getProducts();
        });
    </script>
@endsection
