@extends('admin.banner.home')

@section('content-banner')
    <div class="container add-item" >
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
            
        </div>
    </div>
    <div class="col-12">
        <br>
        <h3>Thêm mới banner</h3>
        <br>
        <form action="{{ route('admin.banner.store') }}" method="POST" class="form-product" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Tiêu đề chính</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Tiêu đề nhỏ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="discount">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Tiêu đề phụ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sub_title">
                </div>
            </div>
           

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Chọn ảnh</label>
                <div class="col-sm-10">
                    <div id="gallery">
                            </div>

                    <div class="upload-file-wrapper">
                        <div class="add-image">
                            <div class="image-container new">
                                <div class="image" >
                                    
                                </div>
                            </div>
                        </div>
                        <input type="file" id="media" name="image"
                               class="input-file"
                               accept="image/*" multiple="true" />
                    </div>
            </div>

             <div class="form-group row">
                 <div class="col-sm-2"></div>
                 <div class="col-sm-10" style="padding-left: 160px;">
                     <button class="btn btn-primary" type="submit">Thêm Banner</button>
                 </div>
             </div>
        </form>
    </div>
    <script>

        

    'use strict';

    ( function (document, window, index) {
        var inputFile = document.querySelector('.input-file');
        var gallery = document.querySelector('#gallery');

        inputFile.addEventListener('change', function (e) {
            var reader = null;
            $('#gallery').html("");
            if (this.files) {

                    reader = new FileReader();
                    reader.onload = function (event) {
                        var newImg = '<img src="' + event.target.result + '"> ';
                        $($.parseHTML(newImg)).appendTo(gallery);
                    }

                    reader.readAsDataURL(this.files[0]);
            }

        });

        // Firefox bug fix
        inputFile.addEventListener('focus', function () {
            inputFile.classList.add('has-focus');
        });
        inputFile.addEventListener('blur', function () {
            inputFile.classList.remove('has-focus');
        });
    }(document, window, 0));
         

            
    </script>
@endsection