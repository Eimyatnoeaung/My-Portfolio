@extends("layout.layout") @section("content")
<div class="container">
    <h2 class="grey-text mt-4">Welcome from My Pizza Project</h2>
    <!-- Material form register -->
    <div class="card mt-4">

        <h5 class="card-header indigo white-text text-center py-4">
            <strong>Pizza Order Form</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" action="#!">


                <!-- user name -->
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

                <!-- Order button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Order</button>

                <!-- Social register -->
                <p>or sign up with:</p>

                <a type="button" class="btn-floating btn-fb btn-sm">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a type="button" class="btn-floating btn-tw btn-sm">
                    <i class="fab fa-twitter"></i>
                </a>
                <a type="button" class="btn-floating btn-li btn-sm">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a type="button" class="btn-floating btn-git btn-sm">
                    <i class="fab fa-github"></i>
                </a>

                <hr>

                <!-- Terms of service -->
                <p>By clicking
                    <em>Sign up</em> you agree to our
                    <a href="" target="_blank">terms of service</a>

            </form>
            <!-- Form -->

        </div>

    </div>
    <!-- Material form register -->
</div>
@endsection
