@extends('layouts.admin_layouts')
@section('title','subcategory')
@section('admin_content')


<div id="page-wrapper">
	<br>
    <div class="row">
        <div class="col-lg-12">
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addsubcategory" data-whatever="@mdo">+ subCategory Add</button>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All subCategory
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>Category name</th>
                                <th>SubCategory english name</th>
                                <th>SubCategory name bangla</th>
                                
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        @foreach($subcategory as $key=>$row)
                        <tbody>
                            <tr class="odd gradeX">
                                <td>{{$key+1}}</td>
                                <td>{{$row->category->catname_en}} || {{$row->category->catname_bn}}</td>
                                

                                <td>{{$row->subcatname_bn}}</td>
                                <td>{{$row->subcatname_en}}</td>
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

                                    <form id="delete-form-{{$row->id}}" action="{{route('subcategory.delete',$row->id)}}"  method="PUT" style="display: none ; " >
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

       

            <form method="POST" action="{{route('subcategory.store')}}" enctype="multipart/form-data">
                @csrf

            <div class="form-group">
                <label>Category</label>
                    <select class="form-control" name="category_id">
                        <option> Select Category Name</option>
                    @foreach($category as $category)
                        <option value="{{$category->id}}">{{$category->catname_en}} || {{$category->catname_bn}}</option>
                    @endforeach
                </select>
            </div>   

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">SubCategory bangla name</label>
                    <input type="text" class="form-control" name="subcatname_bn" id="subcatname_bn" placeholder="Add bangla Subcategory" required>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">SubCategory English name:</label>
                    <input type="text" class="form-control" name="subcatname_en" id="subcatname_en" placeholder="Add English Subcategory" required>
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