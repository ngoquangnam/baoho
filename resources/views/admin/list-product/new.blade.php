@extends('admin.list-product.home')

@section('content-product')
    <div class="container">
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
        <h3>Thêm mới sản phẩm</h3>
        <br>
        <form action="">
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Loại sản phẩm chính: </label>
                <div class="col-sm-10">
                    <select name=""  class="select-admin">
                        <option value="" selected disabled>loại chính</option>
                        <option value="">abc</option>
                        <option value="">abc</option>
                        <option value="">abc</option>
                    </select>
                 </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Danh mục con: </label>
                <div class="col-sm-10">
                    <select name=""  class="select-admin">
                        <option value="" selected disabled>danh mục con</option>
                        <option value="">abc</option>
                        <option value="">abc</option>
                        <option value="">abc</option>
                    </select>
                 </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Danh mục nhỏ: </label>
                <div class="col-sm-10">
                    <select name=""  class="select-admin">
                        <option value="" selected disabled>danh mục nhỏ</option>
                        <option value="">abc</option>
                        <option value="">abc</option>
                        <option value="">abc</option>
                    </select>
                 </div>
            </div>

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Giá:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Nhà sản xuất:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Thời gian bảo hành:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Mô tả chi tiết:</label>
                <div class="col-sm-10" style="height: 250px;">
                    <textarea name="content" id="editor"></textarea>

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
    </script>
@endsection