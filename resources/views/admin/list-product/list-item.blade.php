@extends('admin.list-product.home')

@section('content-product')

<div  class="container" id="app1">
    <form v-bind:action="action" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sửa" v-model="message">
        </div>
        <button type="submit" class="btn btn-primary" >Sửa</button>
    </form>
    <br>

    <div class="row">
        <div class="col">
            <table class="table table-bordered table-hover">
                <thead class="bg-success">
                <tr >
                    <th scope="col" colspan="3"><h4 class="table-admin">Màu</h4></th>
                </tr>
                </thead>
                <tbody>
                @foreach($colors as $color)
                    <tr>
                        <th scope="row">{{ $color->color }}</th>
                        <th><button class="btn btn-success" v-on:click="click('{{ $color->color }}', '{{ $color->id }}', 'colors')">Edit</button></th>
                        <th><button class="btn btn-danger">delete</button></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table table-bordered table-hover">
                <thead class="bg-primary">
                <tr>
                    <th scope="col" colspan="3"><h4 class="table-admin">Kích cỡ</h4></th>
                </tr>
                </thead>
                <tbody>
                @foreach($sizes as $size)
                    <tr>
                        <th scope="row">{{ $size->size }}</th>
                        <th><button class="btn btn-success"  v-on:click="click('{{ $size->size }}', '{{ $size->id }}', 'sizes')">Edit</button></th>
                        <th><button class="btn btn-danger">delete</button></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table table-bordered table-hover">
                <thead class="bg-danger">
                <tr>
                    <th scope="col" colspan="3"><h4 class="table-admin">Chất liệu</h4></th>
                </tr>
                </thead>
                <tbody>
                @foreach($materials as $material)
                    <tr>
                        <th scope="row">{{ $material->name }}</th>
                        <th><button class="btn btn-success"  v-on:click="click('{{ $material->name }}', '{{ $material->id }}', 'materials')">Edit</button></th>
                        <th><button class="btn btn-danger">delete</button></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    <script>

        var app1 = new Vue({
            el: '#app1',
            data: {
                message: "",
                id: "",
                action: "acb",
            },
            methods: {
                click: function(message, id, type) 
                {
                    this.message = message;
                    this.id = id ;
                    this.action = '/dashboard/' + type + '/' + id + '/update';
                },
               

            }
               
        })
    </script>
@endsection
