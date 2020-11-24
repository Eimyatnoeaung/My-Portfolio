@extends("layout.layout") @section("content")
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">User Name</th>
                <th scope="col">Pizza Name</th>
                <th scope="col">Topping</th>
                <th scope="col">Sauce</th>
                <th scope="col">Price</th>
                <th scope="col">Order Complete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pizzas as $pizza)
            <tr>
                <th scope="row">{{ $pizza->id }}</th>
                <th scope="row">{{ $pizza->username }}</th>
                <th scope="row">{{ $pizza['pizza_name'] }}</th>
                <th scope="row">{{ $pizza['topping'] }}</th>
                <th scope="row">{{ $pizza['sauce'] }}</th>
                <th scope="row">{{ $pizza['price'] }}$</th>
                {{-- array method can use only this method ..... $pizza['pizza_name']  --}}
                {{-- object format can use both method ..... $pizza['pizza_name']   and  $pizza->pizza_name  --}}
                <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalLoginForm">Edit Order</button></td>
                <td><button class="btn btn-sm btn-success">Order Complete</button></td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mt-4">
                        <input type="text" id="materialRegisterFormEmail" class="form-control">
                        <label for="materialRegisterFormEmail">User Name</label>
                    </div>

                    <div class="md-form mt-4">
                        <input type="text" id="materialRegisterFormEmail" class="form-control">
                        <label for="materialRegisterFormEmail">Pizza Name</label>
                    </div>
                    <div class="md-form mt-4">
                        <input type="text" id="materialRegisterFormEmail" class="form-control">
                        <label for="materialRegisterFormEmail">Topping</label>
                    </div>
                    <div class="md-form mt-4">
                        <input type="text" id="materialRegisterFormEmail" class="form-control">
                        <label for="materialRegisterFormEmail">Sauce</label>
                    </div>
                    <div class="md-form mt-4">
                        <input type="text" id="materialRegisterFormEmail" class="form-control">
                        <label for="materialRegisterFormEmail">Price</label>
                    </div>


                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn indigo white-text">Update</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
