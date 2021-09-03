@extends("layouts.admin.app")

<!-- BEGIN: Page Main-->
@section("content")

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Customer</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('/admin')}}">Admin</a>
                                </li>
                                <li class="breadcrumb-item active">Create User Admin
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- Input Fields -->
                    <div class="row">
                        <div class="col s12">
                            <div id="input-fields" class="card card-tabs">
                                <div class="card-content">

                                    <div id="view-input-fields">
                                        <div class="row">

                                            <div class="col s12">

                                                <br>
                                                <form class="login-row" method="post"
                                                      action="{{route('admin.customers.update',$edit->id)}}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="col s12">
                                                        <div class="input-field col s12">
                                                            <input id="name" type="text"  value="{{$edit->name}}" @error('name') is-invalid
                                                                   @enderror name="name" required>
                                                            <label for="name"> English Name <span
                                                                    style="color:red">*</span></label>
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                              <strong style="color: #ff4081">{{ $message }}</strong>
                                                             </span>
                                                            @enderror
                                                        </div>
                                                        <div class="input-field col s12">


                                                            <input id="email" type="email"
                                                                   class="form-control @error('email') is-invalid @enderror" value="{{$edit->email}}"
                                                                   name="email"  required
                                                                   autocomplete="email">
                                                            <label for="name"> Email <span
                                                                    style="color:red">*</span></label>
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                                   </span>
                                                            @enderror

                                                        </div>

                                                        <div class="input-field col s12">


                                                            <input id="phone_number" type="text"
                                                                   class="form-control @error('phone_number') is-invalid @enderror" value="{{$edit->phone_number}}"
                                                                   name="phone_number"  required
                                                                   autocomplete="email">
                                                            <label for="name"> Phone number <span
                                                                    style="color:red">*</span></label>
                                                            @error('phone_number')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                                   </span>
                                                            @enderror

                                                        </div>

                                                        <div class="input-field col s12">


                                                            <input id="address" type="text"
                                                                   class="form-control @error('address') is-invalid @enderror" value="{{$edit->address}}"
                                                                   name="address"  required
                                                               >
                                                            <label for="name"> Address <span
                                                                    style="color:red">*</span></label>
                                                            @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                                   </span>
                                                            @enderror


                                                        </div>
                                                        <div class="input-field col s12 ">
                                                            <select class="icons" name="employee_id" id="employee_id">
                                                                @php
                                                                    $employee_customer=\App\Models\Shop\Employee_customer::where('customer_id',$edit->id)->first();
                                                                @endphp
                                                                @foreach($employees as $value)
                                                                    <option value="{{$value->id}}"

                                                                            @if($value->id==$employee_customer->employee_id) selected="selected"
                                                                            @endif
                                                                            class="circle">{{$value->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <label>Employees <span
                                                                    style="color:red">*</span></label>
                                                        </div> <div class="input-field col s12">
                                                            <input id="password" type="password"
                                                                   class="form-control @error('password') is-invalid @enderror"
                                                                   name="password" required autocomplete="new-password">
                                                            <label for="name"> Password <span
                                                                    style="color:red">*</span></label>
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>

                                                        <div class="input-field col s12 ">
                                                            <select class="icons" name="employee_id" id="employee_id">
                                                                @php
                                                                    $employee_customer=\App\Models\Shop\Employee_customer::where('customer_id',$edit->id)->first();
                                                                @endphp
                                                                @foreach($employees as $value)
                                                                    <option value="{{$value->id}}"

                                                                            @if($value->id==$employee_customer->employee_id) selected="selected"
                                                                            @endif
                                                                            class="circle">{{$value->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <label>Employees <span
                                                                    style="color:red">*</span></label>
                                                        </div>
                                                    </div>


                                                    <div class="col s12">
                                                        <label for="first_name"> Status <span style="color:red">*</span></label>
                                                    </div>

                                                    <div class="input-field col s12">

                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="status" type="radio"
                                                                       checked
                                                                       value="1"/>
                                                                <span>Enable</span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label>
                                                                <input class="with-gap" name="status" type="radio"
                                                                       value="0"/>
                                                                <span>Disable</span>
                                                            </label>

                                                        </p>

                                                    </div>


                                                    <div class="col s12">
                                                        <div class="col s12 display-flex justify-content-end mt-3">
                                                            <button type="submit" class="btn indigo">
                                                                Save changes
                                                            </button>

                                                            <button type="button" class="btn btn-light">Cancel</button>
                                                        </div>
                                                    </div>

                                                </form>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

@endsection
