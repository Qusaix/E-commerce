@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Update Product</h2>
<div class="row">
    <div class="col-12" style="margin-left:3%; margin-right:3%;">
        <div class="card">
           <div class="btn-group">
            
  
</div>
             <div class="card-content">
                <div class="card">
                    <div class="card-header">
                        @if($errors->any())
                        <div class="alert alert-danger" role="alert"> There is Someting Wrong
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif
                        <ul class="card-actions">
                            <li>
                                <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="card-action" data-action="content_toggle"></button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <form class="form-horizontal m-t-sm" action="{{route('dashboard.featured.update',$featured->id)}}" method="post" enctype="multipart/form-data" >
                            @csrf 
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            {{-- <label for="mega-skills">Products</label>
                                            <select class="form-control" id="mega-skills" name="product">
                                                @foreach ($products as $product )
                                                <option value={{$product->id}}>{{$product->Title}} ${{$product->price}}</option>
                                                @endforeach                                                
                          
                                            </select> --}}
                                            <label for="mega-lastname">New Price</label>
                                            <input class="form-control input-lg" type="text" id="mega-lastname" name="new_price" placeholder="Incert The Price" value={{$featured->product_name}}  readonly >
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="mega-lastname">New Price</label>
                                            <input class="form-control input-lg" type="text" id="mega-lastname" name="new_price" placeholder="Incert The Price" value={{$featured->new_price}}  >
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                              
                                <div class="col-sm-5">
                                    {{-- <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <label class="file-upload btn btn-primary">
                                                        Browse for file ... <input name="image" type="file" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <label class="css-input switch switch-sm switch-default">
                                            @if($featured->featured == "1")
                                            <input type="checkbox" id="login1-remember-me" name="featured" checked><span></span>Featured?
                                            @else
                                            <input type="checkbox" id="login1-remember-me" name="featured"><span></span>Featured?

                                            @endif
                                            </label>
                                    </div>
                                  
                                
                                  
                                
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-xs-12">
                                    <button class="btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- .card -->
                <!-- End Mega Form -->
            </div>
            <!-- .container-fluid -->
            <!-- End Page Content -->

        </main>

    </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>




@endsection