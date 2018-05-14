@extends('adminlte::page')

@section('title', __('Edit permission'))

@section('content_header')

    <h1>{{ __('Edit permission') }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
        <li><a href="{{ route('permissions.index') }}">{{ __('Permissions') }}</a></li>
        <li class="active">{{ __('Edit') }}</li>
    </ol>

@stop

@section('content')

    @include('components.errors')
    @include('components.message')

    <div class="row">

        <div class="col-md-12">

            <form action="{{ route('permissions.update', [ 'id' => $permission->id ]) }}" method="POST" role="form" autocomplete="off" data-validate>

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $permission->id }}">

                <div class="box box-purple">

                    <div class="box-body">

                        <fieldset>

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" id="input" name="name" class="form-control" value="{{ $permission->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <input type="text" id="description" name="description" class="form-control" value="{{ $permission->description }}" required>
                            </div>

                        </fieldset>

                    </div>

                    <div class="box-footer">

                        <div class="box-tools">

                            <a href="{{ route('permissions.index') }}" class="btn btn-default btn-sm pull-left">
                                {{ __('Cancel') }}
                            </a>

                            <button type="submit" class="btn btn-sm bg-purple pull-right">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                {{ __('Update') }}
                            </button>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

@stop
