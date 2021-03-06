@extends('layout.layout-master')
@section('title','Customer Info')

@section('subheader')
    <!-- SubHeader =============================================== -->
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Quản trị nhà hàng</h1>
                <p>Dành cho các đối tác nhà hàng quản lý thông tin nhà hàng của mình.</p>
                <p></p>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->
@endsection

@section('breadcrumb')
    @include('_parts.front.breadcrumb')
@endsection

@section('content')
    <div class="container margin_60">
            <div class="content">
                <!--  section 1 -->
                <section id="section-1">
                    <div class="indent_title_in">
                        <i class="icon_house_alt"></i>
                        <h3>Mô tả chung về nhà hàng </h3>
                    </div>
                     <form action="{!! route('restaurant.store') !!}" method="POST">
                         <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="wrapper_indent">
                            <div class="form-group">
                                <label>Tên nhà hàng <span class = "error"> * </span> </label>
                                <input class="form-control" name="title" placeholder = "Tên nhà hàng" id="restaurant_name" type="text" value="{!! old("title") !!}">
                                <p class="error mt10 mb10"> {!! $errors->first("title") !!} </p>
                            </div>
                            <div class="form-group">
                                <label>Mô tả về nhà hàng <span class = "error"> * </span> </label>
                                <textarea class="wysihtml5 form-control" name="describe" placeholder="Nội dung mô tả nhà hàng của bạn ..." style="height: 200px;" >{!! old("describe") !!}</textarea>
                                <p class="error mt10 mb10"> {!! $errors->first("describe") !!} </p>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại<span class = "error"> * </span></label>
                                <input type="text" id="Telephone" name="phone" placeholder = "Số điện thoại liên lạc" class="form-control" value="{!! old("phone") !!}">
                                <p class="error mt10 mb10"> {!! $errors->first("phone") !!} </p>
                            </div>
                            <div class="form-group">
                                <label>Email <span class = "error"> * </span> </label>
                                <input type="email" id="Email" name="email" placeholder = "Email liên lạc" class="form-control" value="{!! old("email") !!}">
                                <p class="error mt10 mb10"> {!! $errors->first("email") !!} </p>
                            </div>
                        </div><!-- End wrapper_indent -->

                        <hr class="styled_2">

                        <div class="indent_title_in">
                            <i class="icon_pin_alt"></i>
                            <h3>Địa chỉ</h3>
                        </div>
                        <div class="wrapper_indent">
                            <div class="row">
                                <div class = "col-sm-12"><label>Tỉnh thành <span class = "error"> * </span></label></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control" name="province" id="country" >
                                            <option value="" selected>Tỉnh thành</option>
                                            <option value="Europe">Europe</option>
                                            <option value="United states">United states</option>
                                            <option value="Asia">Asia</option>
                                        </select>
                                        <p class="error mt10 mb10"> {!! $errors->first("province") !!} </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control" name="district" id="country" >
                                            <option value="" selected>Quận huyện</option>
                                            <option value="Europe">Europe</option>
                                            <option value="United states">United states</option>
                                            <option value="Asia">Asia</option>
                                        </select>
                                        <p class="error mt10 mb10"> {!! $errors->first("district") !!} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class = "col-sm-12"><label>Website</label></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="street_2" name="website" placeholder = "Địa chỉ website riêng (nếu có )" class="form-control" value="{!! old("website") !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class = "col-sm-12"><label>Địa chỉ chi tiết <span class="error"> * </span></label></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="street_2" name="address" placeholder = "123 An Dương Vương ..." class="form-control" value="{!! old("address") !!}">
                                        <p class="error mt10 mb10"> {!! $errors->first("address") !!} </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End wrapper_indent -->

                        <hr class="styled_2">
                        <div class="indent_title_in">
                            <i class="icon_images"></i>
                            <h3>Logo và các hình ảnh của nhà hàng</h3>
                        </div>

                        <div class="wrapper_indent add_bottom_45">
                            <div class="form-group">
                                <label>Upload your restaurant logo</label>
                                <div id="logo_picture" class="dropzone">
                                    <input name="logo" type="file">
                                    <div class="dz-default dz-message"><span>Click hoặc kéo thả hình ở đây</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Upload your restaurant photos</label>
                                <div id="photos" class="dropzone">
                                    <input name="photos" type="file" multiple>
                                    <div class="dz-default dz-message"><span>Click hoặc kéo thả hình ở đây</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End wrapper_indent -->


                        <hr class="styled_2">
                        <div class="indent_title_in">
                            <i class="icon_images"></i>
                            <h3>Thông tin khác</h3>
                        </div>

                        <div class="wrapper_indent add_bottom_45">
                            <div class="row">
                                <div class = "col-sm-12"><label>Sức chứa</label>  <span class="error"> * </span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="street_2" name="capacity" placeholder = "Số lượng người" class="form-control" value="{!! old("capacity",$post->capacity) !!}">
                                        <p class="error mt10 mb10"> {!! $errors->first("capacity") !!} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class = "col-sm-12"><label>Giờ mở cửa</label>  <span class="error"> * </span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        @include('_parts/timepicker.timepicker',['placeholder' => "Giờ mở cửa",'name' => 'start_time' , 'value' => (App\Http\Utils\FormatDateTime4Display::formatTime4Display($post->start_time))])
                                        <p class="error mt10 mb10"> {!! $errors->first("start_time") !!} </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class = "col-sm-12"><label>Giờ đóng cửa</label>  <span class="error"> * </span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        @include('_parts/timepicker.timepicker',['placeholder' => "Giờ đóng cửa",'name' => 'end_time' , 'value' => (App\Http\Utils\FormatDateTime4Display::formatTime4Display($post->end_time))])
                                        <p class="error mt10 mb10"> {!! $errors->first("end_time") !!} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class = "col-sm-12"><label>Giá thấp nhất</label>  <span class="error"> * </span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="street_2" name="min_price" placeholder = "Giá thấp nhát" class="form-control" value="{!! old("min_price") !!}">
                                        <p class="error mt10 mb10"> {!! $errors->first("min_price") !!} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class = "col-sm-12"><label>Giá cao nhất</label>  <span class="error"> * </span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="street_2" name="max_price" placeholder = "Giá cao nhất" class="form-control" value="{!! old("max_price") !!}">
                                        <p class="error mt10 mb10"> {!! $errors->first("max_price") !!} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class = "col-sm-12"><label>Loại hình</label>  <span class="error"> * </span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control" name="category_id" id="country">
                                            <option value="" selected>----</option>
                                            @foreach( $categories as $category )
                                                <option value="{!! $category->id !!}" {!! $category->id == old('category_id') ? "selected" : ''  !!} )> {!! $category->name !!} </option>
                                            @endforeach
                                        </select>
                                        <p class="error mt10 mb10"> {!! $errors->first("category_id") !!} </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End wrapper_indent -->

                        <div class="wrapper_indent">
                            <button class="btn_1">Lưu lại ngay</button>
                        </div><!-- End wrapper_indent -->
                     </form>

                </section><!-- End section 1 -->

            </div><!-- End content -->
        </div>
    </div><!-- End container  -->

@endsection

@section('specificscripts')
    <!-- Specific scripts -->

    <script src="{!! asset('public/front/js/bootstrap3-wysihtml5.min.js') !!}"></script>
    <script type="text/javascript">
        $('.wysihtml5').wysihtml5({});
    </script>
    <script src="{!! asset('public/front/js/dropzone.min.js') !!}"></script>
    <script>
        if ($('.dropzone').length > 0) {
            Dropzone.autoDiscover = false;
            $("#photos").dropzone({
                url: "upload",
                addRemoveLinks: true
            });

            $("#logo_picture").dropzone({
                url: "upload",
                maxFiles: 1,
                addRemoveLinks: true
            });

            $(".menu-item-pic").dropzone({
                url: "upload",
                maxFiles: 1,
                addRemoveLinks: true
            });
        }
    </script>

@endsection