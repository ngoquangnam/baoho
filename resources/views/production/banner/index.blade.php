@extends('production.layout')

@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Thêm banner <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form  class="form-horizontal form-label-left" action="{{ route('admin.banner.store') }}" method="POST" class="form-product" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiêu đề chính <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  name="title">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tiêu đề nhỏ <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12"  name="discount">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề phụ </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="sub_title">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Chọn ảnh</label>

                    <div id="gallery">
                    </div>
                    <div class="upload-file-wrapper">
                        <div class="add-image">
                            <div class="image-container new">
                                <div class="image1" >
                                    
                                </div>
                            </div>
                        </div>
                        <input type="file" id="media" name="image"
                               class="input-file"
                               accept="image/*" multiple="" />
                    </div>
         
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
            
          </div>
        </div>

        <div class="x_panel">
          <div class="x_title">
            <h2>Danh sách banner<small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Ảnh</th>
                    <th>Tiêu đề chính</th>
                    <th>Tiêu đề phụ</th>
                    <th>Tiêu đề nhỏ</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($banners as $index => $banner)
                  <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <td style="height: 100px; width: 150px;"><img src="{{ asset($banner->image) }}" class="img" style="height: 100%;" ></td>
                    <td class="banner">{{ $banner->title }}</td>
                    <td class="banner">{{ $banner->discount }}</td>
                    <td class="banner">{{ $banner->sub_title }}</td>
                    <td class="banner">
                       <form action="{{ route('admin.banner.delete', $banner->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger" type="submit">Xóa</button>
                      </form>
                    </td>
                    <td class="banner"> <a href="{{ route('admin.banner.edit', $banner->id) }}" class="btn btn-primary">Sửa</a></td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>


  </div>
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
                for (var i = 0; i < this.files.length; i++) {
                    reader = new FileReader();
                    reader.onload = function (event) {
                        var newImg = '<img src="' + event.target.result + '"> ';
                        $($.parseHTML(newImg)).appendTo(gallery);
                    }

                    reader.readAsDataURL(this.files[i]);
                }
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