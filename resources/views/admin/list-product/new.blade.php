@extends('admin.list-product.home')

@section('content-product')
    <div class="container add-item">
        <div class="row">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-sm">
                <form class="form-inline" method="POST" action="{{ route('admin.color.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group mx-sm-12">
                        <label class="sr-only">Màu</label>
                        <input type="text" class="form-control" placeholder="Thêm màu" name="color">
                    </div>
                    <button type="submit" class="btn btn-primary ">Thêm</button>
                </form>
            </div>
            <div class="col-sm">
                <form class="form-inline" method="POST" action="{{ route('admin.size.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group mx-sm-12">
                        <label class="sr-only">Cỡ</label>
                        <input type="text" class="form-control" placeholder="Thêm cỡ" name="size">
                    </div>
                    <button type="submit" class="btn btn-success ">Thêm</button>
                </form>
            </div>
            <div class="col-sm">
                <form class="form-inline" method="POST" action="{{ route('admin.material.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group mx-sm-12">
                        <label class="sr-only">Chất liệu</label>
                        <input type="text" class="form-control" placeholder="Thêm chất liệu" name="material">
                    </div>
                    <button type="submit" class="btn btn-danger ">Thêm</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12">
        <br>
        <h3>Thêm mới sản phẩm</h3>
        <br>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data"
              class="form-product">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" required="nhập tên sản phẩm">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mức độ ưu tiên: </label>
                <div class="col-sm-10">
                    <select name="priority" class="select-admin" required="">
                        <option value="" selected disabled>Chọn mức độ ưu tiên</option>
                        @foreach(App\Product::PRIORITY as $priority)
                            <option value="{{ $priority }}">{{ $priority }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Vị trí hiển thị: </label>
                <div class="col-sm-10">
                    <select name="show" class="select-admin" required="">
                        <option value="" selected disabled>Chọn vị trí hiển thị</option>
                        @foreach(App\Product::SHOW as $show)
                            <option value="{{ $show }}">{{ $show }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Loại sản phẩm chính: </label>
                <div class="col-sm-10">
                    <select name="category_id" class="select-admin" onchange="selectCategory(this)" id="category"
                            required="">
                        <option value="" selected disabled>Chọn loại chính</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Danh mục con: </label>
                <div class="col-sm-10">
                    <select name="sub_category_id" class="select-admin" id="subCategory" required="">
                        <option value="" selected disabled>danh mục con</option>

                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">chọn màu sắc: </label>
                <div class="col-sm-10">
                    @foreach($colors as $color)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1"
                                   value="{{ $color->id }}" name="color[]">
                            <label class="form-check-label" for="inlineCheckbox1">{{ $color->color }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">chọn kích cỡ: </label>
                <div class="col-sm-10">
                    @foreach($sizes as $size)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1"
                                   value="{{ $size->id }}" name="size[]">
                            <label class="form-check-label" for="inlineCheckbox1">{{ $size->size }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">chọn chất liệu: </label>
                <div class="col-sm-10">
                    @foreach($materials as $material)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1"
                                   value="{{ $material->id }}" name="material[]">
                            <label class="form-check-label" for="inlineCheckbox1">{{ $material->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Giá:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="price" required="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nhà sản xuất:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="producer" required="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Thời gian bảo hành:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="warranties" required="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mô tả chi tiết:</label>
                <div class="col-sm-10">
                    <div class="document-editor">
                        <div class="document-editor__toolbar"></div>
                        <div class="document-editor__editable-container"
                        ">
                        <div class="document-editor__editable">
                            <textarea name="description" id="editor"></textarea>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Chọn ảnh cho sản phẩm:</label>
        <div class="col-sm-10">
            <div id="gallery">
            </div>

            <div class="upload-file-wrapper">
                <div class="add-image">
                    <div class="image-container new">
                        <div class="image">

                        </div>
                    </div>
                </div>
                <input type="file" id="media" name="images[]"
                       class="input-file"
                       accept="image/*" multiple/ required="">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10" style="padding-left: 160px;">
                <button class="btn btn-primary" type="submit">Thêm sản phẩm</button>
            </div>
        </div>
        </form>
    </div>
    <script>

        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

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