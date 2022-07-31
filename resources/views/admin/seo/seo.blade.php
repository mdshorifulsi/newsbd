@extends('layouts.admin_layouts')
@section('title','seo')
@section('admin_content')


<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    seo
                </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" method="POST" action="{{route('seo.update',$seo->id)}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row">

                                <div class="form-group col-lg-6">
                                    <label>Author</label>
                                    <input type="text" class="form-control" name="meta_author" value="{{$seo->meta_author}}">       
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>meta title</label>
                                    <input type="text" class="form-control" value="{{$seo->meta_title}}" name="meta_title">
                                </div>

                            </div>

                         

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>meta keyword</label>
                                    <input type="text" class="form-control"  value="{{$seo->meta_keyword}}" name="meta_keyword">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>meta_description</label>
                                    <input type="text" class="form-control" value="{{$seo->meta_description}}" name="meta_description">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Google analytics</label>
                                    <input type="text" class="form-control"  value="{{$seo->google_analytics}}" name="google_analytics">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Google verification</label>
                                    <input type="text" class="form-control" value="{{$seo->google_verification}}" name="google_verification">
                                </div>
                            </div>

                             <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>alexa_analytics</label>
                                    <input type="text" class="form-control"  value="{{$seo->alexa_analytics}}" name="alexa_analytics">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Google verification</label>
                                    <input type="text" class="form-control" value="{{$seo->google_verification}}" name="google_verification">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-lg-6">
                                <label>Logo</label>
                                <input type="file" name="logo">
                            </div>

                                <div class="form-group col-lg-6">
                                    <img src="{{ asset($seo->logo)}}"style="width:250px;height:150px;">
                                </div>
                            </div>

                            

                                
                            </div>
                           



                            
                            <button type="submit" class="btn btn-danger">Update seo </button>

                        </form>


                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
        </div>



    













@endsection