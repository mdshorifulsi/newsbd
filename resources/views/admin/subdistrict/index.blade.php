@extends('layouts.admin_layouts')
@section('title','subdistrict')
@section('admin_content')


<div id="page-wrapper">
	<br>
    <div class="row">
        <div class="col-lg-12">
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addsubcategory" data-whatever="@mdo">+ subdistrict Add</button>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All subdistrict
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>District name</th>
                                <th>SubDistrict english name</th>
                                <th>SubDistrict name bangla</th>
                                
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        @foreach($subdistrict as $key=>$row)
                        <tbody>
                            <tr class="odd gradeX">
                                <td>{{$key+1}}</td>
                                <td>{{$row->district->district_en}} || {{$row->district->district_bn}}</td>
                                

                                <td>{{$row->subdisname_bn}}</td>
                                <td>{{$row->subdisname_en}}</td>
                               	<td>
                                    @if($row->status==1)
                                    	<span class="label label-success">Active</span>
                                   	@else
                                    	<span class="label label-danger">Unactive</span>
                                	@endif
                                </td>
                                <td>
                                    <button class="btn btn-danger" type="button" onclick="deletetag({{ $row->id }})">
                                         <i class="glyphicon glyphicon-trash icon-white"></i>

                                    </button>

                                    <form id="delete-form-{{$row->id}}" action="{{route('subdistrict.delete',$row->id)}}"  method="PUT" style="display: none ; " >
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



    <div class="modal fade" id="addsubcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="modal-body">

       

            <form method="POST" action="{{route('subdistrict.store')}}" enctype="multipart/form-data">
                @csrf

            <div class="form-group">
                <label>District</label>
                    <select class="form-control" name="district_id">
                        <option> Select District Name</option>
                    @foreach($district as $district)
                        <option value="{{$district->id}}">{{$district->district_en}} || {{$district->district_bn}}</option>
                    @endforeach
                </select>
            </div>   

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Sub district bangla name</label>
                    <input type="text" class="form-control" name="subdisname_bn" id="subdisname_bn" placeholder="Add bangla Subcategory" required>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Sub District English name:</label>
                    <input type="text" class="form-control" name="subdisname_en" id="subdisname_en" placeholder="Add English Sub District" required>
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