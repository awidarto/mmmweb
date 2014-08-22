@extends('layout.front')


@section('content')

<h3>{{$title}}</h3>
    <div class="box" style="padding:20px;">
        <div class="box-container">
          <div class="row-fluid">
            <div class="col-md-6">
              <h1>
                <a href="https://twitter.com/tahirtaous">
                Logo here
                </a>
              </h1>
            </div>
            <div class="col-md-6 text-right">
              <h1>INVOICE</h1>
              <h1><small>Invoice #001</small></h1>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span5">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4>From: <a href="#">Your Name</a></h4>
                </div>
                <div class="panel-body">
                  <p>
                    Address <br>
                    details <br>
                    more <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="span5 offset2 text-right">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4>To : <a href="#">Client Name</a></h4>
                </div>
                <div class="panel-body">
                  <p>
                    Address <br>
                    details <br>
                    more <br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- / end client details section -->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  <h4>Service</h4>
                </th>
                <th>
                  <h4>Description</h4>
                </th>
                <th>
                  <h4>Hrs/Qty</h4>
                </th>
                <th>
                  <h4>Rate/Price</h4>
                </th>
                <th>
                  <h4>Sub Total</h4>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Article</td>
                <td><a href="#">Title of your article here</a></td>
                <td class="text-right">-</td>
                <td class="text-right">$200.00</td>
                <td class="text-right">$200.00</td>
              </tr>
              <tr>
                <td>Template Design</td>
                <td><a href="#">Details of project here</a></td>
                <td class="text-right">10</td>
                <td class="text-right">75.00</td>
                <td class="text-right">$750.00</td>
              </tr>
              <tr>
                <td>Development</td>
                <td><a href="#">WordPress Blogging theme</a></td>
                <td class="text-right">5</td>
                <td class="text-right">50.00</td>
                <td class="text-right">$250.00</td>
              </tr>
            </tbody>
          </table>
          <div class="row-fluid text-right">
            <div class="span2 offset8">
              <p>
                <strong>
                Sub Total : <br>
                TAX : <br>
                Total : <br>
                </strong>
              </p>
            </div>
            <div class="span2">
              <strong>
              $1200.00 <br>
              N/A <br>
              $1200.00 <br>
              </strong>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span5">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4>Bank details</h4>
                </div>
                <div class="panel-body">
                  <p>Your Name</p>
                  <p>Bank Name</p>
                  <p>SWIFT : --------</p>
                  <p>Account Number : --------</p>
                  <p>IBAN : --------</p>
                </div>
              </div>
            </div>
            <div class="span7">
              <div class="span7">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h4>Contact Details</h4>
                  </div>
                  <div class="panel-body">
                    <p>
                      Email : you@example.com <br><br>
                      Mobile : -------- <br> <br>
                      Twitter : <a href="https://twitter.com/tahirtaous">@TahirTaous</a>
                    </p>
                    <h4>Payment should be made by Bank Transfer</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
{{ HTML::script('js/bootstrap-editable/js/bootstrap-editable.min.js') }}

{{ HTML::script('js/wysihtml5-0.3.0.min.js') }}
{{ HTML::script('js/parser_rules/advanced.js') }}

<script type="text/javascript">


$(document).ready(function() {

    $('#name').keyup(function(){
        var title = $('#name').val();
        var slug = string_to_slug(title);
        $('#permalink').val(slug);
    });

});

</script>

@stop