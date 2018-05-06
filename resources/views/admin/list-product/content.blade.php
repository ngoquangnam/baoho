@extends('admin.list-product.home')

@section('content-product')
    <div class="table" style="padding: 10px 55px 10px 10px; margin-left: 15px;">
        <h3>Danh sách các sản phẩm</h3>
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
            </tr>
            </thead>
            <tbody>
                @foreach($products as $index => $product)
            <tr>
                <th scope="row">{{ $index+1 }}</th>
                <th scope="row">{{ $product->images->image }}</th>
                <th scope="row">{{ $product->name }}</th>
                <th scope="row">{{ $product->price }}</th>
                <th scope="row">{{ $product->category->name }}</th>
                <th scope="row">{{ $product->subCategory->name }}</th>
                <th scope="row">{{ $product->producer }}</th>
                <th scope="row">{{ $product->warranties }}</th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection