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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Customer Action </span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('/admin')}}">admin</a>
                                </li>
                                <li class="breadcrumb-item active">Create Customer Action
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
                                                      action="{{route('admin.customer_actions.update',$customer->id)}}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="col s12">
                                                        <div class="input-field col s12 ">
                                                            <select class="icons" name="action" id="action">
                                                                @foreach($actions as $value)
                                                                    <option  value="{{$value->name}}"
                                                                             class="circle"> {{$value->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <label>Actions <span style="color:red" >*</span></label>
                                                        </div>
                                                        <div class="col s12">
                                                            <div class="form-group">
                                                                <label for="description">Record <span style="color:red" >*</span>
                                                                </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">

                                                                    <textarea class="form-control ckeditor" @error('record') is-invalid @enderror  name="record" id="record" rows="5" placeholder="record">
                                                                    </textarea>
                                                                @error('record')
                                                                <span class="invalid-feedback" role="alert">
                                                              <strong style="color: #ff4081">{{ $message }}</strong>
                                                             </span>
                                                                @enderror
                                                            </div>
                                                        </div>

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
