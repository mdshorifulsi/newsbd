@extends('layouts.admin_layouts')
@section('title','notice')
@section('admin_content')


<div id="page-wrapper">
	<br>
    <div class="row">
        <div class="col-lg-12">
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addcategory" data-whatever="@mdo">+ notice Add</button>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All notice
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>notice English</th>
                                <th>notice Bangla</th>
                              
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        @foreach($notice as $key=>$row)
                        <tbody>
                            <tr class="odd gradeX">
                                <td>{{$key+1}}</td>
                                <td>{{$row->notice_en}}</td>
                                <td>{{$row->notice_bn}}</td>
                              
                               	<td>
                                    @if($row->status==1)
                                    	<span class="label label-success">Active</span>
                                   	@else
                                    	<span class="label label-danger">Unactive</span>
                                	@endif
                                </td>
                                <td class="center">

                            @if($row->status==1)
                                <a class="btn btn-success" href="{{route('notice_unactive',$row->id)}}">
                                    <i class="glyphicon glyphicon-thumbs-down"></i>
                                </a>
                               
                                @else
                            
                                <a class="btn btn-danger" href="{{route('notice_active',$row->id)}}">
                                    <i class="glyphicon glyphicon-thumbs-up"></i>
                                 
                                </a>
                            @endif

                                	
                                	<button class="btn btn-danger" type="button" onclick="deletetag({{ $row->id }})">
                                         <i class="glyphicon glyphicon-trash icon-white"></i>

                                    </button>

                                    <form id="delete-form-{{$row->id}}" action="{{route('notice.delete',$row->id)}}"  method="PUT" style="display: none ; " >
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

       

            <form method="POST" action="{{route('notice.store')}}" enctype="multipart/form-data">
                @csrf

            

            <div class="form-group">
                <label>Notice English</label>
                <textarea class="form-control" rows="3" name="notice_en" id="notice_en" placeholder="Add notice english......." required></textarea>
            </div>

            <div class="form-group">
                <label>Notice Bangla</label>
                <textarea class="form-control" rows="3" name="notice_bn" id="notice_bn" placeholder="Add notice Bangla......." required></textarea>
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