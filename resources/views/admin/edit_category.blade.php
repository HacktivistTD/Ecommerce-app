<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @include('admin.css')
    <style type="text/css">
            .div_deg{
                      display:flex;
                      justify-content: center;
                      align-items: center;
                      margin: 60px;




            }

</style>

  </head>
  <body>
  @include('admin.header')

  @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

                  <div class=" div_deg">
                             <h1>
                                Update category

                             </h1>
                  </div>
                             <form   action="{{url('update_category'),$data-> id}}" method="post" >
                                @csrf

                                             <input type="text" name="category" value="{{$data->category_name}}">
                                             <input class="btn btn-primary" type="submit" value="Update Category">


                             </form>


                  </div>


          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('endor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
