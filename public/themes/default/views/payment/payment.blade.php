@extends('layout.coralfront')

@section('content')

        <div class="col-md-8">

            <div class="navigation">

                <!-- Buttons -->
                <ul class="buttons nav nav-tabs" id="myTab">
                    <li class="col-md-4 col-xs-12 padding-bottom-none padding-top-none"><a href="{{ URL::to('payment') }}" class="btn"> 1. Shipping Details</a></li>
                    <li class="active col-md-4 col-xs-12 padding-bottom-none padding-top-none"><a href="#" class="btn ">2. Payment</a></li>
                    <li  class="col-md-4 col-xs-12 padding-bottom-none padding-top-none"><a href="{{ URL::to('payment/confirm') }}" class="btn ">3. Confirmation</a></li>
                </ul>
                <!-- /Buttons -->

                <div class="tab-content innerAll inner-2x" style="background-color: #FFF">
                    <div class="tab-pane active" id="two">
                        <div class="box-generic bg-primary padding-none">
                            <div class="innerAll half pull-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-times "></i></a></div>
                            <h4 class="text-white strong margin-none innerAll pull-left"><i class="fa fa-credit-card innerR"></i> XXXX XXXX XXXX XXXX 1209</h4>
                            <div class="clearfix"></div>
                        </div>
                        <div class="box-generic padding-none">
                            <div class="pull-right btn-group btn-group-sm innerAll half">
                                <a href="#" class="btn btn-default"><i class="fa fa-check "></i> Make Primary</a>
                                <a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="strong margin-none innerAll pull-left"><i class="fa fa-credit-card innerR"></i> XXXX XXXX XXXX XXXX 1209</h4>
                            <div class="clearfix"></div>
                        </div>
                        <div class="box-generic padding-none">
                            <h5 class="strong innerAll border-bottom margin-none bg-gray">Add New Card</h5>
                            <div class="innerAll inner-2x">
                                <form action="checkout_confirmation.html?lang=en">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Card Number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Card Number">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="exampleInputPassword1">Expiry Date</label>
                                                <div class="row margin-none">
                                                    <div class="col-xs-6 padding-none">
                                                        <select class="form-control selectpicker">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6 padding-none">
                                                        <select class="form-control selectpicker">
                                                            <option>2013</option>
                                                            <option>2014</option>
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                            <option>2017</option>
                                                            <option>2018</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="exampleInputPassword1">Security Code <i class="fa fa-question-circle"></i></label>
                                                <input type="password" class="form-control" placeholder="CVV / CVV2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cardholder Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name on Card">
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Make a Payment </button>
                                    </div>
                                </form>
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