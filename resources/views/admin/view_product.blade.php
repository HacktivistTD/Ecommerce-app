<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style type="text/css">

        .div_deg{

            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px ;




        }

        .table_deg{

            border: 2px solid greenyellow;
        }


        th{

            background-color:skyblue ;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;

          }

        td{


            border: 1px solid skyblue;
            text-align: center;

        }

    </style>
  </head>
  <body>
  @include('admin.header')


  @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


          <div class="div_deg">

          <table class="table_deg">
            <tr>
                <th>Product Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity </th>
                <th>Image </th>
            </tr>

                          @foreach($product as $products)

            <tr>
                <td>{{$product -> $products}}</td>
                <td>{{$product -> $description}}</td>
                <td>{{$product -> $category}}</td>
                <td>{{$product -> $price}}</td>
                <td>{{$product -> $quantity}}</td>
                <td>
                    <img height="120" width="120" src="products/{{$products->image}}">
                </td>
            </tr>

                         @endforeach


          </table>
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





