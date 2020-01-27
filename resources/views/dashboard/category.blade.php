@extends('dashboard.master')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Add Category</strong>
                        </div>
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    @endif
                    @if(Session::has('message'))
                     <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                     @endif<!-- end .flash-message -->
                        <div class="card-body card-block">
                            <form action="{{route('store.cat')}}" method="post">
                                @csrf
                            <div class="has-success form-group">
                                <label for="inputIsValid" class=" form-control-label">Add to Category</label>
                                <input type="text" name="name" id="inputIsValid" class="is-valid form-control-success form-control">
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            </div>
                        </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>All Categories</strong>
                        </div>
                       
                    
                        <div class="card-body card-block">
                            
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection