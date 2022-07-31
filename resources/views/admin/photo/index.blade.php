@extends('layouts.admin_layouts')
@section('title','photo Gallery')
@section('admin_content')


<div id="page-wrapper">
	<br>
    <div class="row">
        <div class="col-lg-12">
             <div class="panel-heading">
                <button type="button" class="btn btn-danger"><a href="{{route('photo.create')}}">+ Add new photo</a></button>
            </div>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All photo
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>title Bangla</th>
                                <th>title English</th>
                                <th>photo</th>
                               
                                
                               
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        @foreach($Photogallery as $key=>$row)
                        <tbody>
                            <tr class="odd gradeX">
                                <td>{{$key+1}}</td>
                             

                                
                                <td>{{$row->title_en}}</td>
                                <td>{{$row->title_bn}}</td>

                                <td><img src="{{ asset($row->photo)}}"style="width:250px;height:150px;"></td>
                              <td>
                                    @if($row->type==1)
                                    	<span class="label label-success">Big Photo</span>
                                   	@else
                                    	<span class="label label-danger">Small photo</span>
                                	@endif
                                </td>
                              

                                <td class="center">
                                    
                                    <button class="btn btn-danger" type="button" onclick="deletetag({{ $row->id }})">
                                         <i class="glyphicon glyphicon-trash icon-white"></i>

                                    </button>

                                    <form id="delete-form-{{$row->id}}" action="{{route('photo.delete',$row->id)}}"  method="PUT" style="display: none ; " >
                                        @csrf
                                        @method('DELETE')
                                        


                                    </form>
                                </td>
                                
                                
                            </tr>
                       
                        </tbody>
                        @endforeach
                    </table>  
                </div>
            </div>
        </div>
    </div>
  </div>


   










@endsection