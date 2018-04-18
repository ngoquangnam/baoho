@extends('admin.list-product.home')

@section('content-product')
    <div class="title-block">
        <h3 class="inline-form">Chỉnh sửa sản phẩm</h3>
        <a href="" class="btn btn-info">Chỉnh sửa</a>
        <form action="" class="inline-form">
            <button type="submit" class="btn btn-danger">Xóa sản phẩm</button>
        </form>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
        </tr>
        </tbody>
    </table>
    @endsection