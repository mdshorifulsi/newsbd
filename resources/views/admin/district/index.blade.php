@extends('layouts.admin_layouts')
@section('title','District')
@section('admin_content')


<div id="page-wrapper">
	<br>
    <div class="row">
        <div class="col-lg-12">
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addcategory" data-whatever="@mdo">+ District Add</button>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All District
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>District name bangla</th>
                                <th>District name english</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        @foreach($district as $key=>$row)
                        <tbody>
                            <tr class="odd gradeX">
                                <td>{{$key+1}}</td>
                                <td>{{$row->district_bn}}</td>
                                <td>{{$row->district_en}}</td>
                               	<td>
                                    @if($row->status==1)
                                    	<span class="label label-success">Active</span>
                                   	@else
                                    	<span class="label label-danger">Unactive</span>
                                	@endif
                                </td>
                                <td class="center">
                                	
                                	<button class="btn btn-danger" type="button" onclick="deletetag({{ $row->id }})">
                                         <i class="glyphicon glyphicon-trash icon-white"></i>

                                    </button>

                                    <form id="delete-form-{{$row->id}}" action="{{route('district.delete',$row->id)}}"  method="PUT" style="display: none ; " >
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


  <!-- Category Add -->



    <div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="modal-body">

       

            <form method="POST" action="{{route('district.store')}}" enctype="multipart/form-data">
                @csrf

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">District bangla name</label>
                    <input type="text" class="form-control" name="district_bn" id="district_bn" placeholder="Add Bangla district" required>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">District English name:</label>
                    <input type="text" class="form-control" name="district_en" id="district_en" placeholder="Add English District" required>
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



 <!-- Category Edit -->



    <div class="modal fade" id="editcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="modal-body">

        	
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Category bangla name</label>

                    <input type="text" class="form-control" name="catname_bn" id="e_catname_bn" placeholder="Add bangla category" >
                    <input type="hidden" class="form-control" name="id" id="catname_bn_id" >
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Category English name:</label>
                    <input type="text" class="form-control" name="catname_en" id="e_catname_en" placeholder="Add Englishcategory" >
                    <input type="hidden" class="form-control" name="id" id="catname_en_id">
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