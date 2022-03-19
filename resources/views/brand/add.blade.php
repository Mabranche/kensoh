@extends('layouts.App')
@section('title','Creation marque')

@section('content')
<div class="page-body">

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Add brand
                        <small>Kensoh Administraion </small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Brand </li>
                    <li class="breadcrumb-item active">Add brand </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5> Add brand</h5>
                </div>
                <div class="card-body">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <form class="needs-validation user-add" novalidate="" method="post" action="{{route('brand.store')}}">
@csrf
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Name</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" id="validationCustom0" type="text" required="" name= 'name' >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> State</label>
                                    <div class="col-xl-8 col-md-7">
                                        <select class="form-select" aria-label="Default select example" name='state'>

                                            <option value="1">publiee</option>
                                            <option value="2">non publiee</option>

                                          </select>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>

                    </div>
                    <div class="pull-right">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

</div>

@endsection
