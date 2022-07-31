@extends('layouts.admin_layouts')
@section('title','namaj')
@section('admin_content')


<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    namaj Time : 
                </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" method="POST" action="{{route('namaj.update',$namaj->id)}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row">

                                <div class="form-group col-lg-6">
                                    <label>fojor</label>
                                    <input type="text" class="form-control" name="fojor" value="{{$namaj->fojor}}">       
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>johor</label>
                                    <input type="text" class="form-control" value="{{$namaj->johor}}" name="johor">
                                </div>

                            </div>

                         

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>asor</label>
                                    <input type="text" class="form-control"  value="{{$namaj->asor}}" name="asor">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>magrib</label>
                                    <input type="text" class="form-control" value="{{$namaj->magrib}}" name="magrib">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Esha</label>
                                    <input type="text" class="form-control"  value="{{$namaj->Esha}}" name="esha">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>jummah</label>
                                    <input type="text" class="form-control" value="{{$namaj->jummah}}" name="jummah">
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