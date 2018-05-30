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
                        <label  class="sr-only">Màu</label>
                        <input type="text" class="form-control"  placeholder="Thêm màu" name="color">
                    </div>
                    <button type="submit" class="btn btn-primary ">Thêm</button>
                </form>
            </div>
            <div class="col-sm">
                <form class="form-inline" method="POST" action="{{ route('admin.size.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group mx-sm-12">
                        <label  class="sr-only">Cỡ</label>
                        <input type="text" class="form-control"  placeholder="Thêm cỡ" name="size">
                    </div>
                    <button type="submit" class="btn btn-success ">Thêm</button>
                </form>
            </div>
            <div class="col-sm">
                <form class="form-inline" method="POST" action="{{ route('admin.material.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group mx-sm-12">
                        <label  class="sr-only">Chất liệu</label>
                        <input type="text" class="form-control"  placeholder="Thêm chất liệu" name="material">
                    </div>
                    <button type="submit" class="btn btn-danger ">Thêm</button>
                </form>
            </div>
        </div>
    </div>


    <div class="col-12">
        <br>
        <h3>Sửa sản phẩm</h3>
        <br>
        <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" enctype="multipart/form-data" method="POST" class="form-product">
            @csrf
            
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ old('name', isset($product) ? $product->name : null) }}">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Mức độ ưu tiên: </label>
                <div class="col-sm-10">
                    <select name="priority"  class="select-admin">
                        <option selected disabled>{{ old('priority', isset($product) ? $product->priority : null) }}</option>
                        @foreach(App\Product::PRIORITY as $priority)
                        <option value="{{ $priority }}">{{ $priority }}</option>
                        @endforeach
                    </select>
                 </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Vị trí hiển thị: </label>
                <div class="col-sm-10">
                    <select name="show"  class="select-admin">
                        <option selected disabled>{{ old('show', isset($product) ? $product->show : null) }}</option>
                        @foreach(App\Product::SHOW as $show)
                            <option value="{{ $show }}">{{ $show }}</option>
                        @endforeach
                    </select>
                 </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Loại sản phẩm chính: </label>
                <div class="col-sm-10">
                    <select name="category_id"  class="select-admin" onchange="selectCategory(this)" id="category">
                        <option selected disabled>{{ old('category_id', isset($product) ? $product->category->name : null) }}</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                 </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Danh mục con: </label>
                <div class="col-sm-10">
                    <select name="sub_category_id"  class="select-admin" id="subCategory">
                        <option value="" selected disabled>{{ old('sub_category_id', isset($product) ? $product->subCategory->name : null) }}</option>
                        
                    </select>
                 </div>
            </div>

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">chọn màu sắc: </label>
                <div class="col-sm-10">
                     @foreach($colors as $key => $color)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1" value="{{ $color->id }}" name="color[]"  
                        @foreach($product->colors as $pc)
                        @if($color->id  == $pc->id)
                        {{'checked'}}
                        @endif
                        @endforeach>
                        <label class="form-check-label" for="inlineCheckbox1">{{ $color->color }}</label>
                    </div>
                    @endforeach
                 </div>
            </div>

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">chọn kích cỡ: </label>
                <div class="col-sm-10">
                      @foreach($sizes as $key => $size)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1" value="{{ $size->id }}" name="size[]" 
                        @foreach($product->sizes as $ps)
                        @if($size->id  == $ps->id)
                        {{'checked'}}
                        @endif
                        @endforeach>
                        <label class="form-check-label" for="inlineCheckbox1">{{ $size->size }}</label>
                    </div>
                    @endforeach
                 </div>
            </div>

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">chọn chất liệu: </label>
                <div class="col-sm-10">
                      @foreach($materials as $key => $material)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1" value="{{ $material->id }}" name="material[]"  
                        @foreach($product->materials as $pm)
                        @if($material->id  == $pm->id)
                        {{'checked'}}
                        @endif
                        @endforeach>
                        <label class="form-check-label" for="inlineCheckbox1">{{ $material->name }}</label>
                    </div>
                    @endforeach
                 </div>
            </div>
            

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Giá:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="price" value="{{ old('price', isset($product->price) ? $product->price : 'null' ) }}" >
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Nhà sản xuất:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="producer" value="{{ old('producer', isset($product->producer) ? $product->producer : 'null' ) }}">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Thời gian bảo hành:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="warranties" value="{{ old('warranties', isset($product->warranties) ? $product->warranties : 'null' ) }}">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Mô tả chi tiết:</label>
                <div class="col-sm-10" >
                    <div class="document-editor">
                        <div class="document-editor__toolbar"></div>
                        <div class="document-editor__editable-container" ">
                            <div class="document-editor__editable">
                                <textarea name="description" id="editor" >
                                    {!! old('description', isset($product->description) ? $product->description : 'null' ) !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Chọn ảnh cho sản phẩm:</label>
                <div class="col-sm-10">
                    <div id="gallery">
                        @foreach($product->images as $image)
                            <img src="{{ $image->image }}">
                        @endforeach
                    </div>

                    <div class="upload-file-wrapper">
                        <div class="add-image">
                            <div class="image-container new">
                                <div class="image" >
                                    
                                </div>
                            </div>
                        </div>
                        <input type="file" id="media" name="images[]"
                               class="input-file"
                               accept="image/*" multiple/">
                    </div>
            </div>

             <div class="form-group row">
                 <div class="col-sm-2"></div>
                 <div class="col-sm-10" style="padding-left: 160px;">
                     <button class="btn btn-primary" type="submit">Sửa sản phẩm</button>
                 </div>
             </div>
        </form>
    </div>
    <script>

        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

    'use strict';

    ( function (document, window, index) {
        var inputFile = document.querySelector('.input-file');
        var gallery = document.querySelector('#gallery');

        inputFile.addEventListener('change', function (e) {
            var reader = null;
            $('#gallery').html("");

            if (this.files) {

                for (var i = 0; i < this.files.length; i++) {
                    reader = new FileReader();// nhận đầu vào là file và xử lý file

                    reader.onload = function (event) {
                        var newImg = '<img src="' + event.target.result + '"> ';// result truy cập đến nội dung file
                        $($.parseHTML(newImg)).appendTo(gallery);
                    }

                    reader.readAsDataURL(this.files[i]);//chuẩn bị dữ liệu để gửi file
                }//hết for
            }

        });
        // test

       
        // Firefox bug fix
        inputFile.addEventListener('focus', function () {
            inputFile.classList.add('has-focus');
        });
        inputFile.addEventListener('blur', function () {
            inputFile.classList.remove('has-focus');
        });
    }(document, window, 0));
         

            function selectCategory(obj){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var data = obj.value;

                //var data = $('#category').val();

                $.ajax({
                    type: 'get',
                    data: data,
                    url: "/dashboard/products/" + data + "/",
                    success: function(data){
                        if (data != '[]')
                        {
                            $('#subCategory').html("");
                            $.each(JSON.parse(data), function(key, value){
                                var option = new Option(value.name, value.id, true);
                                $('#subCategory').append(option);
                            });
                        }
                        else{
                            $('#subCategory').html("");
                            $('#subCategory').append("<option selected disabled>" + "không có danh mục con tương ứng" + "</option>");
                        }
                    }
                });
            }
    </script>
@endsection