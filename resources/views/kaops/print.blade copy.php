@extends('layouts.main')

@section('title', 'Dashboard Kaops')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('kaops') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    <div class="panel invoice-panel">
        <div class="panel-heading">
            <span class="panel-title">
                <span class="glyphicon glyphicon-print"></span> Printable Invoice</span>
        </div>

        <div class="panel-body p20" id="invoice-item">
            <div class="row mb30 center">
                <img style="width: 300px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
            </div>
            <div class="row" id="invoice-info">
                {{-- <div class="col-md-4">
                    <div class="panel panel-alt">
                        <div class="panel-heading">
                            <span class="panel-title"> <i class="fa fa-user"></i> Bill To: </span>
                            <div class="panel-btns pull-right ml10">
                                <span class="panel-title-sm"> Edit</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <address>
                                <strong>Cannon Camera</strong>
                                <br> 151 Sandy Ave, Suite 200
                                <br> San Jose, CA 91503
                                <br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-alt">
                        <div class="panel-heading">
                            <span class="panel-title"> <i class="fa fa-location-arrow"></i> Ship To:</span>
                            <div class="panel-btns pull-right ml10">
                                <span class="panel-title-sm"> Edit</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <address>
                                <strong>Amazon, Inc.</strong>
                                <br> 795 Folsom Ave, Suite 600
                                <br> San Francisco, CA 94107
                                <br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-alt">
                        <div class="panel-heading">
                            <span class="panel-title"> <i class="fa fa-info"></i> Invoice Details: </span>
                            <div class="panel-btns pull-right ml10"> </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li> <b>Invoice #:</b> 58126332</li>
                                <li> <b>Invoice Date:</b> 10 Oct 2013</li>
                                <li> <b>Due Date:</b> 21 Dec 2013</li>
                                <li> <b>Terms:</b> Ten Forty</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row" id="invoice-table">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th>Description</th>
                                <th style="width: 135px;">#</th>
                                <th>Rate</th>
                                <th class="text-right pr10">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>3</b>
                                </td>
                                <td>Net Code Revamp</td>
                                <td>Worked on Design and Structure (per hour)</td>
                                <td>16</td>
                                <td>$35.00</td>
                                <td class="text-right pr10">$560.00</td>
                            </tr>
                            <tr>
                                <td><b>1</b>
                                </td>
                                <td>Developer Newsletter </td>
                                <td>Year Subscription X2</td>
                                <td>2</td>
                                <td>$12.99</td>
                                <td class="text-right pr10">$25.98</td>
                            </tr>
                            <tr>
                                <td><b>3</b>
                                </td>
                                <td>Admin Dashboard</td>
                                <td>Design and implemention(per hour)</td>
                                <td>16</td>
                                <td>$35.00</td>
                                <td class="text-right pr10">$560.00</td>
                            </tr>
                            <tr>
                                <td><b>3</b>
                                </td>
                                <td>Web Development</td>
                                <td>Worked on Design and Structure (per hour)</td>
                                <td>23</td>
                                <td>$30.00</td>
                                <td class="text-right pr10">$690.00</td>
                            </tr>
                            <tr>
                                <td><b>1</b>
                                </td>
                                <td>Developer Newsletter </td>
                                <td>Year Subscription X2</td>
                                <td>2</td>
                                <td>$12.99</td>
                                <td class="text-right pr10">$25.98</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" id="invoice-footer">
                <div class="col-md-12">
                    <div class="pull-left mt20 fs15 text-primary"> Thank you for your business.</div>
                    <div class="pull-right">
                        <table class="table" id="invoice-summary">
                            <thead>
                                <tr>
                                    <th><b>Sub Total:</b>
                                    </th>
                                    <th>$1375.98</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Payments</b>
                                    </td>
                                    <td>(-)0.00</td>
                                </tr>
                                <tr>
                                    <td><b>Total</b>
                                    </td>
                                    <td>$230.00</td>
                                </tr>
                                <tr>
                                    <td><b>Balance Due:</b>
                                    </td>
                                    <td>$1375.98</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                    <div class="invoice-buttons">
                        <a href="javascript:window.print()" class="btn mx-auto p8 w100" id="login">Print Invoice</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
