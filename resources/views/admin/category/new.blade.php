@extends('admin.category.home')

@section('content-category')
    <div class="container">
        <div class="row">
            <h4>Thêm loại sản phẩm</h4>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-hover">
                    <thead class="bg-success">
                    <tr >
                        <th scope="col" colspan="3"><h4 class="table-admin">Thêm loại chính</h4></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <input type="text" class="form-control"  placeholder="Thêm loại chính" name="color">
                            </th>
                            <th><button class="btn btn-success" >Thêm </button></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <table class="table table-bordered table-hover">
                    <thead class="bg-success">
                    <tr >
                        <th scope="col" colspan="3"><h4 class="table-admin">Thêm danh mục con</h4></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" colspan="2">
                                <select name=""  class="select-admin">
                                    <option value="" selected disabled>danh mục con</option>
                                    <option value="">abc</option>
                                    <option value="">abc</option>
                                    <option value="">abc</option>
                                </select>
                            </th>
                        </tr>
                    <tr>
                        <th><input type="text" class="form-control"  placeholder="Thêm danh mục con" name="color">
                        </th>
                        <th><button class="btn btn-success" >Thêm</button></th>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <table class="table table-bordered table-hover">
                    <thead class="bg-success">
                    <tr >
                        <th scope="col" colspan="3"><h4 class="table-admin">Thêm danh mục nhỏ</h4></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" colspan="2">
                                <select name=""  class="select-admin">
                                    <option value="" selected disabled>loại chính</option>
                                    <option value="">abc</option>
                                    <option value="">abc</option>
                                    <option value="">abc</option>
                                </select>
                            </th>
                        </tr>
                    <tr>
                        <th scope="row" colspan="2">
                            <select name=""  class="select-admin">
                                <option value="" selected disabled>danh mục con</option>
                                <option value="">abc</option>
                                <option value="">abc</option>
                                <option value="">abc</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control"  placeholder="Thêm danh mục nhỏ" name="color">
                        </th>
                        <th><button class="btn btn-success" >Thêm</button></th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        </div>
    </div>

@endsection