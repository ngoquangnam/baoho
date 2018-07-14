@extends('production.layout')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Thêm loại sản phẩm</h3>
      </div>
      @if($errors->any())
      	<div class="alert alert-danger">
      		<ul>
      			@foreach($errors->all() as $error)
      				<li>{{ $error }}</li>
      			@endforeach
      		</ul>
      	</div>
      @endif

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
            <h2>Thêm loại sản phẩm<small></small></h2>
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
		        <div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="x_panel">
						  <div class="x_title">
						    <h2>Thêm loại sản phẩm chính<small></small></h2>
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
						    <form class="form-horizontal form-label-left input_mask"  method="post" action="{{ route('admin.category.store') }}">
						    	@csrf
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thêm loại sản phẩm<span class="required">*</span>
						        </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="name">
						        </div>
						      </div>
						      <div class="ln_solid"></div>
						      <div class="form-group">
						        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
						          <button type="button" class="btn btn-primary">Cancel</button>
								   <button class="btn btn-primary" type="reset">Reset</button>
						          <button type="submit" class="btn btn-success">Submit</button>
						        </div>
						      </div>
						    </form>
						     <table class="table">
						          <thead>
						            <tr>
						              <th>#</th>
						              <th>Tên</th>
						              <th>Tác vụ</th>
						            </tr>
						          </thead>
						          <tbody>
						            @foreach($categories as $index => $category)
						            <tr>
						              <th scope="row">{{ $index + 1 }}</th>
						              <td>{{ $category->name }}</td>
						              <td>
						              	<form action="{{ route('admin.category.delete', $category->id) }}" method="post">
						                    @csrf
						                    
						                    <button class="btn btn-danger" type="submit">Xóa</button>
						                </form>
						              </td>
						            </tr>
						           @endforeach
						          </tbody>
						        </table>
						  </div>


						  <div class="x_title">
						    <h2>màu sắc<small></small></h2>
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
						    <form class="form-horizontal form-label-left input_mask"  method="POST" action="{{ route('admin.color.store') }}">
						    	@csrf
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thêm màu cho sản phẩm<span class="required">*</span>
						        </label>
						        <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Styled</label>
			                        <div class="col-md-9 col-sm-9 col-xs-12">
			                          <div class="input-group demo2">
			                            <input type="text"  class="form-control" name="color" required="" />
			                            <span class="input-group-addon"><i></i></span>
			                          </div>
			                        </div>
			                     </div>
						      </div>
						      <div class="ln_solid"></div>
						      <div class="form-group">
						        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
						          <button type="button" class="btn btn-primary">Cancel</button>
								   <button class="btn btn-primary" type="reset">Reset</button>
						          <button type="submit" class="btn btn-success">Submit</button>
						        </div>
						      </div>
						    </form>
						     <table class="table">
						          <thead>
						            <tr>
						              <th>#</th>
						              <th>Tên</th>
						              <th>Tác vụ</th>
						            </tr>
						          </thead>
						          <tbody>
						            @foreach($colors as $index => $color)
						            <tr>
						              <th scope="row">{{ $index + 1 }}</th>
						              <td><div style="width: 30px; height: 30px;background-color: {{ $color->color }};"></div></td>
						              <td>
						              	<form action="{{ route('admin.color.delete', $color->id) }}" method="post">
						                    @csrf
						                    
						                    <button class="btn btn-danger" type="submit">Xóa</button>
						                </form>
						              </td>
						            </tr>
						           @endforeach
						          </tbody>
						        </table>
						  </div>

						  <div class="x_title">
						    <h2>kích cỡ<small></small></h2>
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
						    <form class="form-horizontal form-label-left input_mask"  method="post" action="{{ route('admin.category.store') }}">
						    	@csrf
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thêm kích cỡ sản phẩm<span class="required">*</span>
						        </label>
						        <div class="form-group">
			                        <div class="col-md-9 col-sm-9 col-xs-12">
			                          <div class="input-group demo2">
			                           <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="size">
			                          </div>
			                        </div>
			                     </div>
						      </div>
						      <div class="ln_solid"></div>
						      <div class="form-group">
						        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
						          <button type="button" class="btn btn-primary">Cancel</button>
								   <button class="btn btn-primary" type="reset">Reset</button>
						          <button type="submit" class="btn btn-success">Submit</button>
						        </div>
						      </div>
						    </form>
						     <table class="table">
						          <thead>
						            <tr>
						              <th>#</th>
						              <th>Tên</th>
						              <th>Tác vụ</th>
						            </tr>
						          </thead>
						          <tbody>
						            @foreach($sizes as $index => $size)
						            <tr>
						              <th scope="row">{{ $index + 1 }}</th>
						              <td>{{ $size->size }}</td>
						              <td>
						              	<form action="{{ route('admin.category.delete', $size->id) }}" method="post">
						                    @csrf
						                    
						                    <button class="btn btn-danger" type="submit">Xóa</button>
						                </form>
						              </td>
						            </tr>
						           @endforeach
						          </tbody>
						        </table>
						  </div>


						<div class="x_title">
						    <h2>Chất liệu<small></small></h2>
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
						    <form class="form-horizontal form-label-left input_mask"  method="post" action="{{ route('admin.category.store') }}">
						    	@csrf
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thêm chất liệu sản phẩm<span class="required">*</span>
						        </label>
						        <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Styled</label>
			                        <div class="col-md-9 col-sm-9 col-xs-12">
			                          <div class="input-group demo2">
			                            <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="material">
			                          </div>
			                        </div>
			                     </div>
						      </div>
						      <div class="ln_solid"></div>
						      <div class="form-group">
						        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
						          <button type="button" class="btn btn-primary">Cancel</button>
								   <button class="btn btn-primary" type="reset">Reset</button>
						          <button type="submit" class="btn btn-success">Submit</button>
						        </div>
						      </div>
						    </form>
						     <table class="table">
						          <thead>
						            <tr>
						              <th>#</th>
						              <th>Tên</th>
						              <th>Tác vụ</th>
						            </tr>
						          </thead>
						          <tbody>
						            @foreach($materials as $index => $material)
						            <tr>
						              <th scope="row">{{ $index + 1 }}</th>
						              <td>{{ $material->name }}</td>
						              <td>
						              	<form action="{{ route('admin.material.delete', $material->id) }}" method="post">
						                    @csrf
						                    
						                    <button class="btn btn-danger" type="submit">Xóa</button>
						                </form>
						              </td>
						            </tr>
						           @endforeach
						          </tbody>
						        </table>
						  </div>


						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="x_panel">
						  <div class="x_title">
						    <h2>Thêm danh mục sản phẩm con<small></small></h2>
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
						    <form class="form-horizontal form-label-left input_mask" action="{{ route('admin.subCategory.store') }}" method="post">
						    	@csrf
						     <div class="form-group">

						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Chọn loại sản phẩm chính</label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <select class="select2_single form-control" tabindex="-1" name="category_id">
						          <option value="" selected disabled>loại chính</option>
						            @foreach($categories as $category)
						                <option value="{{ $category->id }}">{{ $category->name }}</option>
						            @endforeach
						          </select>
						        </div>
						      </div>

						        <div class="form-group">
						        	<label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
						            <div class="col-md-9 col-sm-9 col-xs-12">
						              <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="subCategory">
						            </div>
						        </div>
						        <div class="form-group">
						            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
						              <button type="button" class="btn btn-primary">Cancel</button>
									   <button class="btn btn-primary" type="reset">Reset</button>
						              <button type="submit" class="btn btn-success">Submit</button>
						            </div>
						      	</div>
						  	</form>
						     <table class="table">
						          <thead>
						            <tr>
						              <th>#</th>
						              <th>Tên</th>
						              <th>Tác vụ</th>
						            </tr>
						          </thead>
						          <tbody>
						          	@foreach($categories as $index => $category)
						          		<tr>
						                  <th scope="row">{{ $index+1 }}</th>
						                  <td style="font-weight: 600;font-size: 15px;">
						                  	{{ $category->name }}</td>
						                </tr>
						          		@foreach($category->subCategories as $key => $subCategory)
						                <tr>
						                  <th scope="row">{{ $index+1 }}.{{ $key+1 }}</th>
						                  <td>{{ $subCategory->name }}</td>
						                  <td>
						                  	<form action="{{ route('admin.subCategory.delete', $subCategory->id) }}" method="post">
						                    @csrf
						                    
						                    <button class="btn btn-danger" type="submit">Xóa</button>
						                </form>
						            </td>
						                </tr>
						           		@endforeach
						           @endforeach
						          </tbody>
						        </table>
						  </div>
						</div>
					</div>
					
		        </div>
              <div class="clearfix"></div>
			</div>
        </div>
      </div>
    </div>


  </div>
</div>
@endsection