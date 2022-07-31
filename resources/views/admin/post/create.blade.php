@extends('layouts.admin_layouts')
@section('title','create post')
@section('admin_content')


<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Add new post
                </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row">

                                <div class="form-group col-lg-6">
                                    <label>Title bangla</label>
                                    <input type="text" class="form-control" placeholder="Title bangla" name="title_bn">       
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Title English</label>
                                    <input type="text" class="form-control" placeholder="Title English" name="title_en">
                                </div>

                            </div>

                          <div class="row">

                            <div class="form-group col-lg-6">
                                <label>Category</label>
                                   <select class="form-control" name="category_id">
                                        <option selected="" disabled="">Choose category</option>    @foreach($category as $category)
                                        <option value="{{$category->id}}">{{$category->catname_en}} || {{$category->catname_bn}}
                                        </option>
                                            @endforeach
                                </select>  
                            </div>

                          <div class="form-group col-lg-6">
                            <label>Subcategory</label>
                                <select class="form-control" name="subcategory_id" id="subcategory_id">
                                    <option selected="" disabled="" id="">
                                    Subcategorychoose</option>    
                                </select>
                           
                        </div>


                        </div>



                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>District</label>
                                       <select class="form-control" name="district_id">
                                            <option selected="" disabled="">Choose District</option>
                                            
                                        @foreach($district as $district)
                                            <option value="{{$district->id}}">{{$district->district_en}} || {{$district->district_bn}}
                                            </option>
                                        @endforeach
                                    </select>
                                   
                                </div>
                                  <div class="form-group col-lg-6">
                                    <label>Subdistrict</label>
                                       <select class="form-control" name="subdistrict_id" id="subdistrict_id">
                                            <option selected="" disabled="" id="">Sub district choose</option>
                                       </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Tags bangla</label>
                                    <input type="text" class="form-control" placeholder="Tags bangla" name="tags_bn">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Title English</label>
                                    <input type="text" class="form-control" placeholder="Title English" name="tags_en">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image">
                            </div>

                             <div class="form-group">
                                <label>Details Bangla</label>
                                <textarea class="form-control" rows="3" name="details_bn" placeholder="details bangla......."></textarea>
                            </div>

                            <div class="form-group">
                                <label>Details English</label>
                                <textarea class="form-control" rows="3" name="details_en" placeholder="details english......."></textarea>
                            </div>

                           <h4>extra option</h4>
                          <hr>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="headline" value="1">Headline
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="first_section" value="1">First section
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="first_section_thumbnail" value="1">First section thumbnail
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="big_thumbnail">Big thumbnail
                                    </label>
                                </div>    
                         <hr>

                         <h4>status</h4>

                         <div class="checkbox">
                            <label>
                                <input type="checkbox" name="status" value="1">Publish
                            </label>
                        </div>

                            <button type="reset" class="btn btn-success">Reset post</button>
                            <button type="submit" class="btn btn-danger">Save post</button>

                        </form>


                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
        </div>



    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">

  $(document).ready(function(){


    $('select[name="category_id"]').on('change',function(){
        var category_id=$(this).val();

        if(category_id){
            $.ajax({
                url:"{{url('/post/get/subcategory')}}/"+category_id,
                type:"GET",
                dataType:"json",
                success:function(data){
                    // console.log(data);
                    $("#subcategory_id").empty();
                    $.each(data,function(key,value){
                        $("#subcategory_id").append('<option value="'+value.id+'">'+value.subcatname_en+ ' || ' +value.subcatname_bn+' </option>');

                    })
                },

            });

            }else{
             alert('danger');  
            }
        
    });

  });
   

</script>



<script type="text/javascript">

  $(document).ready(function(){


    $('select[name="district_id"]').on('change',function(){
        var district_id=$(this).val();

        if(district_id){
            $.ajax({
                url:"{{url('/post/get/subdistrict')}}/"+district_id,
                type:"GET",
                dataType:"json",
                success:function(data){
                    console.log(data);
                    $("#subdistrict_id").empty();
                    $.each(data,function(key,value){
                        $("#subdistrict_id").append('<option value="'+value.id+'">'+value.subdisname_en+ ' || ' +value.subdisname_bn+' </option>');

                    })
                },

            });

            }else{
             alert('danger');  
            }
        
    });

  });
   

</script>











@endsection