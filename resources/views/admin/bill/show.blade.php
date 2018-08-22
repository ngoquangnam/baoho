@extends('admin.bill.home')

@section('content-bill')
    <div class="grid-sýtem">
        <div class="horz-grid">
            <div class="grid-hor">
                <h3>Hóa đơn chi tiết</h3>
            </div>
            <div class="row show-grid">
                <h4>Thông tin khách hàng</h4>
            </div>
            <div class="row show-grid">
                <div class="col-md-6">
                    <h4>Tên khách hàng: {{$customer->name}}</h4>

                    <ul class="ul-bill">
                        <li class="li-bill">Địa chỉ:<span>{{$customer->address}}</span></li>
                        <li class="li-bill">Số điện thoại:<span>{{ $customer->phone }}</span></li>
                        <li class="li-bill">Lưu ý:<span>{{ $customer->note }}</span></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Thông tin hóa đơn</h4>
                    <ul class="ul-bill">
                        <li class="li-bill">Ngày đặt hàng:<span>{{$bill->date_order}}</span></li>
                        <li class="li-bill">Tổng tiền:<span>{{$bill->total}}</span></li>
                        <li class="li-bill">Trạng thái:<span>{{$bill->status}}</span></li>
                    </ul>
                </div>
            </div>

            <div class="row show-grid">
                <h4>Thông tin sản phẩm trong hóa đơn</h4>
            </div>
            <div class="row show-grid">
                <div class="table" style="padding: 10px 55px 10px 10px; margin-left: 15px; background-color: #e9e9e9;">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($billDetails as $index => $billDetail)
                            <tr>
                                <th scope="row">{{ $index+1 }}</th>
                                <th scope="row" class="table-image"><img
                                            src="{{ asset($billDetail->product->images[0]->image) }}" class="img"></th>
                                <th scope="row">{{ $billDetail->product->name }}</th>
                                <th scope="row">{{ $billDetail->qty }}</th>
                                <th scope="row">{{ $billDetail->product->price }}</th>
                                <th scope="row">{{ $billDetail->product->price*$billDetail->qty }}</th>
                                <th scope="row"><a href="{{ route('admin.bill.edit', $billDetail->id) }}"
                                                   class="btn btn-primary">Sửa</a></th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection