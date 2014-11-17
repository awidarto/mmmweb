@extends('layout.coralfront')

@section('content')

        <div class="col-md-8">

            <div class="navigation">

                <!-- Buttons -->
                <ul class="buttons nav nav-tabs" id="myTab">
                    <li class="col-md-4 col-xs-12 padding-bottom-none padding-top-none"><a href="{{ URL::to('payment')}}" class="btn"> 1. Shipping Details</a></li>
                    <li class="col-md-4 col-xs-12 padding-bottom-none padding-top-none"><a href="{{ URL::to('payment/payment')}}" class="btn ">2. Payment</a></li>
                    <li  class="active col-md-4 col-xs-12 padding-bottom-none padding-top-none"><a href="#" class="btn ">3. Confirmation</a></li>
                </ul>
                <!-- /Buttons -->

                <div class="tab-content innerAll inner-2x" style="background-color: #FFF">
                    <div class="tab-pane active" id="three">
                        <div class="text-center">
                            <div class="innerAll inner-2x">
                                <h3 class="innerT">Thank you for your Order!</h3>
                                <p>You will receive an email with the order summary and upon delivery you will be notified by email.</p>
                                <i class="fa fa-check faded fa-10x"></i>
                            </div>
                        </div>
                    </div>
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