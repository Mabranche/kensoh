@extends('layouts.master')
@section('title', __('Tableau de bord'))

@section('content')
<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Votre Tableau de bord</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html.htm">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->
	<!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-image">
                                <img src="/assets/frontend/images/logos/17.png" alt="" class="img-fluid">
                            </div>
                            <div class="profile-detail">
                                <h5>Fashion Store</h5>
                                <h6>750 followers | 10 review</h6>
                                <h6>mark.enderess@mail.com</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#dashboard">dashboard</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#products">products</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#orders">orders</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#profile">profile</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#settings">settings</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-bs-target="#logout" href="">logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="faq-content tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="counter-section">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="/assets/frontend/images/icon/dashboard/order.png" class="img-fluid">
                                            <div>
                                                <h3>25</h3>
                                                <h5>total products</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="/assets/frontend/images/icon/dashboard/sale.png" class="img-fluid">
                                            <div>
                                                <h3>12500</h3>
                                                <h5>total sales</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="/assets/frontend/images/icon/dashboard/homework.png" class="img-fluid">
                                            <div>
                                                <h3>50</h3>
                                                <h5>order pending</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="chart-order"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card dashboard-table">
                                        <div class="card-body">
                                            <h3>trending products</h3>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">image</th>
                                                        <th scope="col">product name</th>
                                                        <th scope="col">price</th>
                                                        <th scope="col">sales</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><img src="/assets/frontend/images/dashboard/product/1.jpg" class="blur-up lazyloaded"></th>
                                                        <td>neck velvet dress</td>
                                                        <td>$205</td>
                                                        <td>1000</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/assets/frontend/images/dashboard/product/9.jpg" class="blur-up lazyloaded"></th>
                                                        <td>belted trench coat</td>
                                                        <td>$350</td>
                                                        <td>800</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/assets/frontend/images/pro3/34.jpg" class="blur-up lazyloaded"></th>
                                                        <td>man print tee</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card dashboard-table">
                                        <div class="card-body">
                                            <h3>recent orders</h3>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">order id</th>
                                                        <th scope="col">product details</th>
                                                        <th scope="col">status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#21515</th>
                                                        <td>neck velvet dress</td>
                                                        <td>confrimed</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#78153</th>
                                                        <td>belted trench coat</td>
                                                        <td>shipped</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#51512</th>
                                                        <td>man print tee</td>
                                                        <td>pending</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#78153</th>
                                                        <td>belted trench coat</td>
                                                        <td>shipped</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#51512</th>
                                                        <td>man print tee</td>
                                                        <td>pending</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="products">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-md">
                                            <div class="top-sec">
                                                <h3>all products</h3>
                                                <a href="#" class="btn btn-sm btn-solid">add product</a>
                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">image</th>
                                                        <th scope="col">product name</th>
                                                        <th scope="col">category</th>
                                                        <th scope="col">price</th>
                                                        <th scope="col">stock</th>
                                                        <th scope="col">sales</th>
                                                        <th scope="col">edit/delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><img src="/assets/frontend/images/dashboard/product/1.jpg" class="blur-up lazyloaded"></th>
                                                        <td>neck velvet dress</td>
                                                        <td>women clothes</td>
                                                        <td>$205</td>
                                                        <td>1000</td>
                                                        <td>2000</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/assets/frontend/images/dashboard/product/9.jpg" class="blur-up lazyloaded"></th>
                                                        <td>belted trench coat</td>
                                                        <td>women clothes</td>
                                                        <td>$350</td>
                                                        <td>800</td>
                                                        <td>350</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/assets/frontend/images/pro3/34.jpg" class="blur-up lazyloaded"></th>
                                                        <td>men print tee</td>
                                                        <td>men clothes</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                        <td>150</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/assets/frontend/images/pro3/1.jpg" class="blur-up lazyloaded"></th>
                                                        <td>woman print tee</td>
                                                        <td>women clothes</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                        <td>150</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/assets/frontend/images/pro3/27.jpg" class="blur-up lazyloaded"></th>
                                                        <td>men print tee</td>
                                                        <td>men clothes</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                        <td>150</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/assets/frontend/images/pro3/36.jpg" class="blur-up lazyloaded"></th>
                                                        <td>men print tee</td>
                                                        <td>men clothes</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                        <td>150</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-sm">
                                            <div class="top-sec">
                                                <h3>orders</h3>
                                                <a href="#" class="btn btn-sm btn-solid">add product</a>
                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">order id</th>
                                                        <th scope="col">product details</th>
                                                        <th scope="col">status</th>
                                                        <th scope="col">price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#125021</th>
                                                        <td>neck velvet dress</td>
                                                        <td>shipped</td>
                                                        <td>$205</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#521214</th>
                                                        <td>belted trench coat</td>
                                                        <td>shipped</td>
                                                        <td>$350</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#521021</th>
                                                        <td>men print tee</td>
                                                        <td>pending</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#245021</th>
                                                        <td>woman print tee</td>
                                                        <td>shipped</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#122141</th>
                                                        <td>men print tee</td>
                                                        <td>canceled</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#125015</th>
                                                        <td>men print tee</td>
                                                        <td>pending</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#245021</th>
                                                        <td>woman print tee</td>
                                                        <td>shipped</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#122141</th>
                                                        <td>men print tee</td>
                                                        <td>canceled</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#125015</th>
                                                        <td>men print tee</td>
                                                        <td>pending</td>
                                                        <td>$150</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mt-0">
                                        <div class="card-body">
                                            <div class="dashboard-box">
                                                <div class="dashboard-title">
                                                    <h4>profile</h4>
                                                    <span data-toggle="modal" data-bs-target="#edit-profile">edit</span>
                                                </div>
                                                <div class="dashboard-detail">
                                                    <ul>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>company name</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>Fashion Store</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>email address</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>mark.enderess@mail.com</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Country / Region</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>Downers Grove, IL</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Year Established</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>2018</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Total Employees</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>101 - 200 People</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>category</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>clothing</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>street address</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>549 Sulphur Springs Road</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>city/state</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>Downers Grove, IL</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>zip</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>60515</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mt-0">
                                        <div class="card-body">
                                            <div class="dashboard-box">
                                                <div class="dashboard-title">
                                                    <h4>settings</h4>
                                                </div>
                                                <div class="dashboard-detail">
                                                    <div class="account-setting">
                                                        <h5>Notifications</h5>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                                                                    <label class="form-check-label" for="exampleRadios1">
                                                                        Allow Desktop Notifications
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                                    <label class="form-check-label" for="exampleRadios2">
                                                                        Enable Notifications
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                                    <label class="form-check-label" for="exampleRadios3">
                                                                        Get notification for my own activity
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                                                    <label class="form-check-label" for="exampleRadios4">
                                                                        DND
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-setting">
                                                        <h5>deactivate account</h5>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios4" value="option4" checked="">
                                                                    <label class="form-check-label" for="exampleRadios4">
                                                                        I have a privacy concern
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios5" value="option5">
                                                                    <label class="form-check-label" for="exampleRadios5">
                                                                        This is temporary
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios6" value="option6">
                                                                    <label class="form-check-label" for="exampleRadios6">
                                                                        other
                                                                    </label>
                                                                </div>
                                                                <button type="button" class="btn btn-solid btn-xs">Deactivate
                                                                    Account</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-setting">
                                                        <h5>Delete account</h5>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios3" id="exampleRadios7" value="option7" checked="">
                                                                    <label class="form-check-label" for="exampleRadios7">
                                                                        No longer usable
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios3" id="exampleRadios8" value="option8">
                                                                    <label class="form-check-label" for="exampleRadios8">
                                                                        Want to switch on other account
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios3" id="exampleRadios9" value="option9">
                                                                    <label class="form-check-label" for="exampleRadios9">
                                                                        other
                                                                    </label>
                                                                </div>
                                                                <button type="button" class="btn btn-solid btn-xs">Delete Account</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  dashboard section end -->

@endsection