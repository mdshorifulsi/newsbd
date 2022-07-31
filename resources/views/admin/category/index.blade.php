@extends('layouts.admin_layouts')
@section('title','category')
@section('admin_content')


<div id="page-wrapper">
	<br>
    <div class="row">
        <div class="col-lg-12">
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addcategory" data-whatever="@mdo">+ Category Add</button>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Category
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>Category name bangla</th>
                                <th>Category name english</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        @foreach($category as $key=>$row)
                        <tbody>
                            <tr class="odd gradeX">
                                <td>{{$key+1}}</td>
                                <td>{{$row->catname_bn}}</td>
                                <td>{{$row->catname_en}}</td>
                               	
                                <td class="center">
                                    <a href="#" class="btn btn-warning edit" data-id="{{$row->id}}" data-toggle="modal" data-target="#editcategory" data-whatever="@mdo">

                                    <i class="glyphicon glyphicon-edit icon-white" ></i>
                                             
                                    </a>

                                    
                            
                                	
                                	<button class="btn btn-danger" type="button" onclick="deletetag({{ $row->id }})">
                                         <i class="glyphicon glyphicon-trash icon-white"></i>

                                    </button>

                                    <form id="delete-form-{{$row->id}}" action="{{route('category.delete',$row->id)}}"  method="PUT" style="display: none ; " >
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

       

            <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                @csrf

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Category name bangla</label>
                    <input type="text" class="form-control" name="catname_bn" id="catname_bn" placeholder="Add bangla category" required>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Category name English</label>
                    <input type="text" class="form-control" name="catname_en" id="catname_en" placeholder="Add English category" required>
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

            
            <form method="POST" action="{{route('category.update')}}" enctype="multipart/form-data">
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">
    $('body').on('click','.edit',function(){
        let cat_id=$(this).data('id');
        // alert(cat_id);

        $.get("category/edit/"+cat_id,function(data){
            // console.log(data);

            $('#e_catname_bn').val(data.catname_bn);
            $('#catname_bn_id').val(data.id);

             $('#e_catname_en').val(data.catname_en);
            $('#catname_en_id').val(data.id);

            
        });

    });

</script>



@endsection