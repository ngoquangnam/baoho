@extends('admin.banner.home')

@section('content-banner')
    <div class="table" style="padding: 10px 55px 10px 10px; margin-left: 15px; background-color: #e9e9e9;">
        <h3 class="title">Danh sách các Banner</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tiêu đề chính</th>
                <th scope="col">Tiêu đề nhỏ</th>
                <th scope="col">Tiêu đề phụ</th>
                <th scope="col">Xóa</th>
                <th scope="col">Sửa</th>
            </tr>
            </thead>
            <tbody>
            @foreach($banners as $index => $banner)
                <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <th scope="row" class="table-image"><img src="{{ asset($banner->image) }}" class="img"></th>
                    <th scope="row">{{ $banner->title }}</th>
                    <th scope="row">{{ $banner->discount }}</th>
                    <th scope="row">{{ $banner->sub_title }}</th>
                    <th scope="row">
                        <form action="{{ route('admin.banner.delete', $banner->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Xóa</button>
                        </form>
                    </th>
                    <th scope="row"><a href="{{ route('admin.banner.edit', $banner->id) }}"
                                       class="btn btn-primary">Sửa</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection