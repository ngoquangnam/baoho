@extends('production.layout')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Thêm sản phẩm</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Design
                                <small>different form elements</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br/>
                            <form class="form-horizontal form-label-left" action="{{ route('admin.product.store') }}"
                                  method="POST" class="form-product" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên sản
                                        phẩm <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" required="required"
                                               class="form-control col-md-7 col-xs-12" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mức độ ưu tiên</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="select2_single form-control" tabindex="-1" name="priority"
                                                required="">
                                            <option selected="" disabled="">Chọn mức độ ưu tiên cho sản phẩm</option>
                                            @foreach(App\Product::PRIORITY as $priority)
                                                <option value="{{ $priority }}">{{ $priority }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Vị trí hiển thị</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="select2_single form-control" tabindex="-1" name="show"
                                                required="">
                                            <option selected="" disabled="">Chọn vị trí hiển thị</option>
                                            @foreach(App\Product::SHOW as $show)
                                                <option value="{{ $show }}">{{ $show }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại sản phẩm chính</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="select2_single form-control" tabindex="-1"
                                                onchange="selectCategory(this)" id="category" name="category_id"
                                                required="">
                                            <option selected="" disabled="">Chọn loại sản phẩm chính</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh mục con</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="select2_single form-control" tabindex="-1" id="subCategory"
                                                name="sub_category_id" required="">
                                            <option selected="" disabled="">Chọn danh mục con</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Chọn màu
                                    </label>

                                    <div class="col-md-9 col-sm-9 col-xs-12" style="display: inline-flex">
                                        @foreach($colors as $color)
                                            <div class="checkbox form-check form-check-inline">
                                                <label>
                                                    <input type="checkbox" class="flat" value="{{ $color->id }}"
                                                           name="color[]">
                                                    <div style="width: 25px; height: 25px;background-color: {{ $color->color }};"></div>

                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Chọn chất liệu
                                    </label>

                                    <div class="col-md-9 col-sm-9 col-xs-12" style="display: inline-flex">
                                        @foreach($materials as $material)
                                            <div class="checkbox form-check form-check-inline">
                                                <label>
                                                    <input type="checkbox" class="flat" value="{{ $material->id }}"
                                                           name="material[]"> {{  $material->name  }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Chọn kích cỡ
                                    </label>

                                    <div class="col-md-9 col-sm-9 col-xs-12" style="display: inline-flex">
                                        @foreach($sizes as $size)
                                            <div class="checkbox form-check form-check-inline">
                                                <label>
                                                    <input type="checkbox" class="flat" value="{{ $size->id }}"
                                                           name="size[]"> {{ $size->size }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Giá <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="last-name" required="required"
                                               class="form-control col-md-7 col-xs-12" name="price">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Giảm giá
                                        <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="last-name" class="form-control col-md-7 col-xs-12"
                                               name="discount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nhà sản
                                        xuất: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                               name="producer">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian
                                        bảo hành:</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                               name="warranties">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Link
                                        video:</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                               name="link_video">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mô tả chi tiết:</label>
                                    
                                </div>
                                <div class="form-group row">
                                
                                         <textarea id="summernote" name="description"></textarea>
                                         <!-- summernote in layout -->
                                        <!-- <textarea name="description" id="editor"></textarea> -->
                                    
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">Chọn
                                        ảnh</label>
                                    <div class="upload-file-wrapper col-md-2 col-sm-2 col-xs-12">
                                        <div class="add-image">
                                            <div class="image-container new">
                                                <div class="image1">

                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" id="media" name="images[]"
                                               class="input-file"
                                               accept="image/*" multiple=""/>
                                    </div>
                                    <div id="gallery" class="col-md-8 col-sm-8 col-xs-12">
                                    </div>

                                </div>


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script>


        'use strict';

        (function (document, window, index) {
            var inputFile = document.querySelector('.input-file');
            var gallery = document.querySelector('#gallery');

            inputFile.addEventListener('change', function (e) {
                var reader = null;
                $('#gallery').html("");
                if (this.files) {
                    for (var i = 0; i < this.files.length; i++) {
                        reader = new FileReader();
                        reader.onload = function (event) {
                            var newImg = '<img src="' + event.target.result + '"> ';
                            $($.parseHTML(newImg)).appendTo(gallery);
                        }

                        reader.readAsDataURL(this.files[i]);
                    }
                }

            });

            // Firefox bug fix
            inputFile.addEventListener('focus', function () {
                inputFile.classList.add('has-focus');
            });
            inputFile.addEventListener('blur', function () {
                inputFile.classList.remove('has-focus');
            });
        }(document, window, 0));


        function selectCategory(obj) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //var data = $('#category').val();
            var data = obj.value;
            // console.log('ok');
            // console.log(data);

            $.ajax({
                type: 'get',
                data: data,
                url: "/dashboard/products/" + data + "/",
                success: function (data) {
                    if (data != '[]') {
                        $('#subCategory').html("");
                        $.each(JSON.parse(data), function (key, value) {
                            var option = new Option(value.name, value.id, true);
                            $('#subCategory').append(option);
                        });
                    }
                    else {
                        $('#subCategory').html("");
                        $('#subCategory').append("<option selected disabled>" + "không có danh mục con tương ứng" + "</option>");
                    }
                }
            });
        }
    </script>
@endsection