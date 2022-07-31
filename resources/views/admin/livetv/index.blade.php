@extends('layouts.admin_layouts')
@section('title','Live Tv')
@section('admin_content')


<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     
                        <td>
                                     @if($livetv->status==1)
                                <a class="btn btn-success" href="{{route('livetv.unactive',$livetv->id)}}">live Tv Active
                                    <i class="glyphicon glyphicon-thumbs-up"></i>
                                </a>
                               
                                @else
                                
                                <a class="btn btn-danger" href="{{route('livetv.active',$livetv->id)}}">
                                    live Tv unactive
                                    <i class="glyphicon glyphicon-thumbs-up"></i>
                                 
                                </a>
                            @endif
                                </td>                
                                       
                </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" method="POST" action="{{route('livetv.update',$livetv->id)}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row">

                                <div class="form-group col-lg-6">
                                    <label>live tv embed code</label>
                                    <input type="text" class="form-control" name="embed_code" value="{{$livetv->embed_code }}">       
                                </div>

                             
                            </div>

                            <div class="Tv">
                                    <label>
                                        <input type="checkbox" value="1" name="status"> status
                                    </label>
                             </div>
                             <hr>

                             
                            <button type="submit" class="btn btn-danger">Update live tv </button>

                        </form>


                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
        </div>



    













@endsection