@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Reportar incidencia') }}</div>

                <div class="card-body">
                       @if (count($errors)>0)
                       <div class="alert alert-danger">
                            <ul>
                               @foreach ($errors->all() as $errors)
                               <li>{{$errors}}</li>
                               @endforeach
                            </ul>
                       </div>
                       @endif
                    <form action="" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select name="category_id" id="" class="form-control form-select">
                            <option value="">General</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}"> {{$category->name}}</option>
                            @endforeach
                            </select>
                        
                        </div>
                        <div class="form-group">
                            <label for="severity">Severidad</label>
                            <select name="severity" id="" class="form-control form-select">
                                <option value="M">Menor</option>
                                <option value="N">Normal</option>
                                <option value="A">Alta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" name="title" class="form-control" value="{{old ('title')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Descripcion</label>
                            <textarea name="description" cols="5" rows="5" class="form-control">{{old ('description')}}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Registrar incidente</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
