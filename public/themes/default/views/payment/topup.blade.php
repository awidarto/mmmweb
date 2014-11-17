@extends('layout.coralfront')

@section('content')

        <div class="col-md-8">

            <div class="navigation">

                <!-- Buttons -->
                <ul class="buttons nav nav-tabs" id="myTab">
                    <li class="active col-md-4 col-xs-12 padding-bottom-none padding-top-none"><a href="#" class="btn"> 1. Shipping Details</a></li>
                    <li class="col-md-4 col-xs-12 padding-bottom-none padding-top-none"><a href="{{ URL::to('payment/payment') }}" class="btn ">2. Payment</a></li>
                    <li  class="col-md-4 col-xs-12 padding-bottom-none padding-top-none"><a href="{{ URL::to('payment/confirm') }}" class="btn ">3. Confirmation</a></li>
                </ul>
                <!-- /Buttons -->

                <div class="tab-content innerAll inner-2x" style="background-color: #FFF">
                    <div class="tab-pane active" id="one">
                        <div class="innerAll inner-2x">
                            <form action="" class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-3 control-label">First Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-3 control-label">Last Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-3 control-label">Address</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                                        <div class="separator"></div>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-3 control-label">Country</label>
                                    <div class="col-sm-6">
                                        <select class="selectpicker">
                                            <option>Choose</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-3 control-label">Other Message</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="checkbox">
                                            <label class="checkbox-custom">
                                                <i class="fa fa-fw fa-square-o"></i>
                                                <input type="checkbox" class="checkbox" checked="checked"> Billing same as delivery
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <a href="checkout_payment.html?lang=en" class="btn btn-primary">Contine to Payment <i class="fa fa-fw fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /tab one content  -->
                </div>
                <!-- /tab-content -->
            </div>

        </div>
        <div class="col-md-4">
            <div class="box-generic padding-none">
                <h4 class="innerAll border-bottom margin-none">Need Help?</h4>
                <div class="innerAll inner-2x">
                    <div class="lead innerAll text-center">
                        <i class="fa fa-5x text-faded fa-phone"></i>
                        <div class="separator"></div>
                        <p class="lead strong">Call us! <span class="text-primary">Toll Free</span></p>
                        1-800-MY-SHOP
                    </div>
                </div>
            </div>
        </div>


@stop