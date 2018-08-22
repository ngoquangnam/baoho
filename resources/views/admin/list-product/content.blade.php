@extends('admin.list-product.home')

@section('content-product')
    <div class="table" style="padding: 10px 55px 10px 10px; margin-left: 15px; background-color: #e9e9e9;">
        <h3 class="title">Danh sách các sản phẩm</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Danh mục con</th>
                <th scope="col">Nhà sản xuất</th>
                <th scope="col">Bảo hành</th>
                <th scope="col">Xóa</th>
                <th scope="col">Sửa</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $index => $product)
                <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <th scope="row" class="table-image"><img src="{{ asset($product->images->first->image->image) }}"
                                                             class="img"></th>
                    <th scope="row">{{ $product->name }}</th>
                    <th scope="row">{{ $product->price }}</th>
                    <th scope="row">{{ $product->category->name }}</th>
                    <th scope="row">{{ $product->subCategory->name }}</th>
                    <th scope="row">{{ $product->producer }}</th>
                    <th scope="row">{{ $product->warranties }}</th>
                    <th scope="row">
                        <form action="{{ route('admin.product.delete', $product->id) }}" method="post">
                            @csrf

                            <button class="btn btn-danger" type="submit">Xóa</button>
                        </form>
                    </th>
                    <th scope="row"><a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary">Sửa</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection