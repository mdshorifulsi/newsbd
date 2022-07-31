@extends('layouts.admin_layouts')
@section('title','create post')
@section('admin_content')


<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Add new post
                </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" method="POST" action="{{route('photo.store')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row">

                                <div class="form-group col-lg-6">
                                    <label>photo Title English</label>
                                    <input type="text" class="form-control" placeholder="photo Title english" name="title_en">       
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>photo Title bangla</label>
                                    <input type="text" class="form-control" placeholder="photo Title bangla " name="title_bn">       
                                </div>

                                
                            
                        </div>

                         <div class="row">

                                <div class="form-group col-lg-6">
                                <label>photo</label>
                                <input type="file" name="photo">
                            </div>

                                <div class="checkbox">
                            <label>
                                <input type="checkbox" name="type" value="1">big photo ?
                            </label>
                        </div>
                            
                        </div>

                         

                         <hr>

                            <button type="reset" class="btn btn-success">Reset post</button>
                            <button type="submit" class="btn btn-danger">Save post</button>

                        </form>


                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
        </div>



    













@endsection