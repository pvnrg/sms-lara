<script src="{!! asset('front-end/js/modernizr.js') !!}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="{!! asset('front-end/js/popper.min.js') !!}" ></script>
<script src="{!! asset('front-end/js/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('front-end/js/custom.js') !!}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
<script>
$(document).ready(function(e){
    
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        jQuery.ajax({
            type: 'POST',
            url: '{{url("/employess/upload_image")}}',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(msg){
              if(msg.success)
              {
              
                document.getElementById('image_data').src = "{{url('/user/')}}"+msg.user.profile_image;

              }
            }
        });
    });
    
    //file type validation
    $("#upload").change(function() {
        var file = this.files[0];
        var validExtensions = ['image/jpeg','image/jpg','image/png']; //array of valid extensions
        var fileName = file.type;
      
        if ($.inArray(fileName, validExtensions) == -1){
           swal("Invalid file type");
          
        }
        else
        {
            $("#fupForm").submit();
        }
          
       
    });

});
</script>

@yield('footerExtra')
