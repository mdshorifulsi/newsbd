@extends('layouts.admin_layouts')
@section('title','importent website')
@section('admin_content')


<div id="page-wrapper">
	<br>
    <div class="row">
        <div class="col-lg-12">
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addcategory" data-whatever="@mdo">+ importent website Add</button>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All importent website
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>website name English</th>
                                <th>website name Bangla</th> 
                                <th>website link</th>
                              
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        @foreach($website as $key=>$row)
                        <tbody>
                            <tr class="odd gradeX">
                                <td>{{$key+1}}</td>
                                <td>{{$row->website_name_en}}</td>
                                <td>{{$row->website_name_bn}}</td>
                                <td>{{$row->website_link}}</td>
                              
                               	<td>
                                    @if($row->status==1)
                                    	<span class="label label-success">Active</span>
                                   	@else
                                    	<span class="label label-danger">Unactive</span>
                                	@endif
                                </td>
                                <td class="center">

                                	@if($row->status==1)
                            <a class="btn btn-success" href="{{route('unactive',$row->id)}}">
                                <i class="glyphicon glyphicon-thumbs-down"></i>
                             
                            </a>
                           
                              @else
                        
                            <a class="btn btn-danger" href="{{route('active',$row->id)}}">
                                <i class="glyphicon glyphicon-thumbs-up"></i>
                             
                            </a>
                            @endif

                            {{-- <a class="btn btn-warning" href="{{route('website.edit',$row->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                     
                                    </a> --}}
                                    
                                	
                                	<button class="btn btn-danger" type="button" onclick="deletetag({{ $row->id }})">
                                         <i class="glyphicon glyphicon-trash icon-white"></i>

                                    </button>

                                    <form id="delete-form-{{$row->id}}" action="{{route('website.delete',$row->id)}}"  method="PUT" style="display: none ; " >
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





<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="modal-body">

       

            <form method="POST" action="{{route('website.store')}}" enctype="multipart/form-data">
                @csrf

            

             <div class="form-group">
                <label for="recipient-name" class="col-form-label">importent website name</label>
                    <input type="text" class="form-control" name="website_name_en" id="website_name_en" placeholder="Add website English name" required>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">importent website name</label>
                    <input type="text" class="form-control" name="website_name_bn" id="website_name_bn" placeholder="Add website bangla name" required>
            </div>


            <div class="form-group">
                <label for="recipient-name" class="col-form-label">importent website link</label>
                    <input type="text" class="form-control" name="website_link" id="website_link" placeholder="Add website link" required>
            </div>

           <div class="checkbox">
                <label>
                    <input type="checkbox" name="status" value="1">Publish
                </label>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>

            </form>
        </div>
    </div>
</div>

</div>







@endsection