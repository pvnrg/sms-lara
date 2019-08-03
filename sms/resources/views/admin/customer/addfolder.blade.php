@extends('layouts.backend')

@section('title','Add Customer Folder')

@section('pageTitle')
    <i class="icon-tint"></i>

    <span>Add Customer Folder</span>


    @endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="box bordered-box blue-border">
                    <div class="box-header blue-background">
                                                      <div class="title">
                                                          <i class="icon-circle-blank"></i>
                                                          Add Customer folder
                                                      </div>
    
                                   </div>
                    <div class="box-content ">
                          
                        <a href="javascript:history.back()"   title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                    <form name="folder_form" id="folder_form" method="POST" action="{{url('/admin/customer/addfolder/'.$customer->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="gorm-group">
                            <label>File Name: </label>
                            <input type="text" name="name" />
                        </div>
                        <div class="gorm-group">
                            <label>Choose file to Upload : </label>
                            <input type="file" name="document[]" multiple id="file" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf, image/*"/>
                        </div>
                        <br />
                        <button type="submit"  class="btn btn-primary">Submit</button>

                    </form>  
                    <br />
                    <br />
                   

                    @if(isset($customer->folders))
                    <div class="table-responsive">
                             <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th data-priority="1">File Name</th>   
                                <th data-priority="2">Date</th>   
                                <th data-priority="1">Action</th>                                               
                            </tr>
                            </thead>

                            @if(count($customer->folders) == 0)
                            <tr><td colspan='2'> No Files Found</td></tr> 
                            @endif
                            @foreach($customer->folders as $item)
                            <?php  $file = public_path()."/documents/".$item->customer_id."/".$item->path; ?> 
                            @if(File::exists($file))
                            <tr>
                                <td> @if(isset($item->name) && isset($item->path) )
                                       <a target="_blank" href="{{ url('/documents/'.$item->customer_id.'/'.$item->path) }}"> {{$item->name}} </a> 
                                    @else
                                         <a target="_blank" href="{{ url('/documents/'.$item->customer_id.'/'.$item->path) }}" class="input_fields_wrap"> {{$item->path}} </a>
                                    @endif
                                </td>
                                <td>{{$item->created_at->format('d-m-Y')}}</td>
                                <td>    
                                        {{--  <a href="{{ url('/admin/folder/rename/'.$item->id) }}" title="Rename Folder">
                                             <button class=" btn btn-primary btn-xs" >
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Rename
                                             </button>
                                         </a>  --}}

                                            <a target="_blank" href="{{ url('/documents/'.$item->customer_id.'/'.$item->path) }}" title="View">
                                             <button class=" btn btn-primary btn-xs" >
                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                             </button>
                                         </a>  

                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'url' => ['/admin/customer/deletefolder', $item->id],
                                            'style' => 'display:inline'
                                        ]) !!}
                                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-xs',
                                                'title' => 'Delete Folder',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                        {!! Form::close() !!}
                                 </td>
                               
                            </tr> 
                            @endif  
                            @endforeach
                        </table>
                        </div>
                    @endif

                    

                    </div>
                </div>
            </div>
        </div>
@endsection

@push('js')
<script>
    /*
$(document).ready(function() {
    var wrapper         = $("#"); //Fields wrapper
    var add_button      = $(".add_field_button").val(); //Add button ID
  
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        
        $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove();
    })
});
*/
</script>
@endpush



