@extends('layouts.admin_layouts')
@section('title','Post')
@section('admin_content')


<div id="page-wrapper">
	<br>
    <div class="row">
        <div class="col-lg-12">
             <div class="panel-heading">
                <button type="button" class="btn btn-danger"><a href="{{route('post.create')}}">+ Add new post</a></button>
            </div>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Post
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>Category</th>
                                <th>subCat</th>
                                <th>District</th>
                                <th>subDist</th>
                                <th>User</th>
                                <th>title</th>
                                <th>image</th>
                                <th>Tags</th>
                                
                               
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        @foreach($post as $key=>$row)
                        <tbody>
                            <tr class="odd gradeX">
                                <td>{{$key+1}}</td>
                                <td>{{$row->category->catname_en}} || {{$row->category->catname_bn}}</td>
                                <td>{{$row->subcategory->subcatname_en}} || {{$row->subcategory->subcatname_bn}}</td>

                                <td>{{$row->district->district_en}} || {{$row->district->district_bn}}</td>

                                <td>{{$row->subdistrict->subdisname_bn}} || {{$row->subdistrict->subdisname_en}}</td>

                                
                                <td>{{$row->user->name}}</td>

                                <td>{{$row->title_bn}} || {{$row->title_en}}</td>
                                <td><img src="{{ asset($row->image)}}"style="width:250px;height:150px;"></td>
                                {{-- <td>{{$row->details_bn}} || {{$row->details_en}}</td> --}}
                                <td>{{$row->tags_en}} || {{$row->tags_bn}}</td>
                                
                               	<td>
                                    @if($row->status==1)
                                    	<span class="label label-success">Active</span>
                                   	@else
                                    	<span class="label label-danger">Unactive</span>
                                	@endif
                                </td>

                                <td class="center">

                                    <a class="btn btn-warning" href="{{route('post.edit',$row->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                     
                                    </a>
                                    
                                    <button class="btn btn-danger" type="button" onclick="deletetag({{ $row->id }})">
                                         <i class="glyphicon glyphicon-trash icon-white"></i>

                                    </button>

                                    <form id="delete-form-{{$row->id}}" action="{{route('post.delete',$row->id)}}"  method="PUT" style="display: none ; " >
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