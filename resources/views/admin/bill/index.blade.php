@extends('admin.bill.home')

@section('content-bill')
    <div class="table" style="padding: 10px 55px 10px 10px; margin-left: 15px; background-color: #e9e9e9;">
        <h3 class="title">Danh sách các sản phẩm</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ngày bán</th>
                <th scope="col">Tên Khách hàng</th>
                <th scope="col">Số sản phẩm</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Cập nhật</th>
            </tr>
            </thead>
            <tbody>
                @foreach($bills as $index => $bill)
            <tr>
                <th scope="row">{{ $index+1 }}</th>
                <th scope="row"><a href="{{ route('admin.bill.show', $bill->id) }}">{{$bill->date_order}}</a></th>
                <th scope="row">{{ $bill->customer->name }}</th>
                <th scope="row">{{ $bill->billdetail->count() }}</th>
                <th scope="row">{{ $bill->total }}</th>
                <th scope="row">{{ $bill->status }}</th>
                <th scope="row">
                    <form action="{{ route('admin.bill.edit', $bill->id) }}" method="post">
                        @csrf
                        <button class="btn btn-success" type="submit">update</button>
                    </form>
                </th>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection