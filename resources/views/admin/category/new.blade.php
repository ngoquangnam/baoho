@extends('admin.category.home')

@section('content-category')

    <div class="container" id="category">
        <div class="row">
            <h4>Thêm loại sản phẩm</h4>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="alert alert-danger" v-bind:style="alert" style="display: none;">
            <ul>
                <li>vui lòng chọn danh mục sản phẩm</li>
            </ul>
        </div>
        <div class="alert alert-danger" v-bind:style="alert" style="display: none;">
            <ul>
                <li>vui lòng chọn danh mục con sản phẩm</li>
            </ul>
        </div>
        <div class="row" >
            <div class="col">
                <div class="col-sm-12 bg-success cateHeader">
                    <h4 class="table-admin">Thêm danh mục chính</h4>
                </div>
                <div class="row cateBorder">
                    <form method="post" action="{{ route('admin.category.store') }}" class="cateForm">
                        @csrf
                        <div class="col-sm-8 form-group cateInput">
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Thêm" v-model="message">
                        </div>
                        <div class="col-sm-4 cateInput">
                            <button class="btn btn-success">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="col-sm-12 bg-success cateHeader">
                    <h4 class="table-admin">Thêm danh mục con</h4>
                </div>
                <form action="{{ route('admin.subCategory.store') }}" method="post" @submit="checkForm">
                    @csrf
                    <div class="row subcateBorder">
                        <select class="select-admin" v-model="category_id" name="category_id">
                            <option value="" selected disabled>loại chính</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="row cateBorder">
                        <div class="col-sm-8 form-group  cateInput">
                            <input type="text" name="subCategory" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Thêm" >
                        </div>
                        <div class="col-sm-4 cateInput">
                            <button class="btn btn-success" type="submit">Thêm</button>
                        </div>
                    </div>
                </form>
                
            </div>
            
        </div>

    </div>


    <script type="text/javascript">
        
        new Vue({
            el: '#category',
            data: {
                selected: '',
                category_id: '',
                subCategory_id: '',
                message: '',
                alert: {
                    display: 'none',

                },
               
            },
            methods: {
                checkForm: function (e) {
                
                if (!this.category_id){
                    this.alert.display = 'block';
                    e.preventDefault();
                }
                else
                    return true;                 
                },
               
            },
            
        });

    </script>
@endsection