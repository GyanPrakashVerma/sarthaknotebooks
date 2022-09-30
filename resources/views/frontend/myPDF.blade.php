@extends('frontend.include.main')
@section('content')

 <!-- Bootstrap css -->
 <link href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/css/bootstrap.css?v=2.0" rel="stylesheet"
 type="text/css" />
 
<link href="{{ asset('assets/css/ui.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
<style>

   #GFG .invoice-head td {
        padding: 0 8px;
    }

   #GFG .container {
        padding: 30px;
        /* display: none; */
        width: 80%;
         border:1px solid ;
        /* border-radius: 20px; */ 
        margin-top: 3rem!important;
        margin-bottom: 3rem!important;
    }
.well{
    background:rgb(190 187 187 / 41%);
    padding: 40px;
    border-radius: 10px;
    margin-bottom:2rem;
}
   #GFG .invoice-body {
        background-color: transparent;
    }

   #GFG .invoice-thank {
        margin-top: 60px;
        padding: 5px;
    }

   #GFG address {
        margin-top: 15px;
    }
</style>

@php
    $amount=0;
    $amount1=0;
@endphp
<section class="">
    <div class="container mt-3 ">
        <div class="row float-left">
            <div class="col-md-10">
        <input type="button" class=" text-light bg-success" value="click" onclick="printDiv()">
        </div></div>
        </div>
</section>
<section id="GFG">
 <div class="container m-auto"  >
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('assets/images/logo.svg') }}"
              style="width: 50%;"  class="img-rounded logo">
            <address>
                <strong>{{env('company_name')}}</strong><br>

                35, Lajpat Nagar<br>
                Gurugram, Haryana-122001 (India)
            </address>
        </div>
        <div class="col-md-6 well float-end">
            <table class="invoice-head">
                <tbody>
                    <tr>
                        <td class="pull-right"><strong>Customer #</strong></td>
                        <td>{{Auth::user()->id}}</td>
                    </tr>
                    <tr>
                        <td class="pull-right"><strong>Invoice #</strong></td>
                        <td>2340</td>
                    </tr>
                    <tr>
                        <td class="pull-right"><strong>Date:</strong></td>
                        {{-- @php
                        $date = \App\Models\OrderItem ::where('id',$inv->order_id)->first();
                    @endphp --}}
                        <td>{{$b->created_at->format('d/M/Y')}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="span8">
            <h2>Invoice</h2>
        </div>
    </div>
    <div class="row" style="overflow-x: scroll;">
        <div class="span8 well invoice-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inv as $invv)
                    <tr>
                        <td>{{$invv->p_name}}</td>
                        <td>{{$invv->description}}</td>
                        <td>{{$invv->quantity}}</td>
                        @php
                        $amount1 +=$invv->p_price * $invv->quantity;
                        @endphp
                        <td>Rs.{{$amount1}}</td>
                    </tr>
                    @php
                        $amount1 +=$invv->p_price * $invv->quantity;
                        $amount +=$invv->p_price;
                    @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                        <td><strong>Total: Rs.{{$amount}}</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center well invoice-thank">
            <h5 style="text-align:center;">Thank You!</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <strong>Phone:</strong>+91-124-111111
        </div>
        <div class="col-md-4">
            <strong>Email:</strong> <a href=">silkvastralay@gmail.com">silkvastralay@gmail.com</a>
        </div>
        <div class="col-md-4">
            <strong>Website:</strong> <a href="http://SilkVastralay.in">http://SilkVastralay.in</a>
        </div>
    </div>
</div>

</section>

@endsection
<script>
    function printDiv() {
      var divContents = document.getElementById("GFG").innerHTML;
      var a = window.open('', '', 'height=1000, width=900');
    //   a.document.write('<html>');
    //   a.document.write('<body >');
      a.document.write(divContents);
    //   a.document.write('</body></html>');
      a.document.close();
      a.print();
    }
  </script>