@extends('layouts.admin_layouts')
@section('title','social link')
@section('admin_content')


<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                 	social link
                </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" method="POST" action="{{route('social.update',$social->id)}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row">

                                <div class="form-group col-lg-6">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$social->facebook}}">       
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" value="{{$social->twitter}}" name="twitter">
                                </div>

                            </div>

                         

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>youtube</label>
                                    <input type="text" class="form-control"  value="{{$social->youtube}}" name="youtube">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>github</label>
                                    <input type="text" class="form-control" value="{{$social->github}}" name="github">
                                </div>
                            </div>


                             <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Linkedin</label>
                                    <input type="text" class="form-control" value="{{$social->linkedin}}" name="linkedin">
                                </div>

                             
                            </div>
                            

                            
                            <button type="submit" class="btn btn-danger">Update social link</button>

                        </form>


                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
        </div>



    













@endsection