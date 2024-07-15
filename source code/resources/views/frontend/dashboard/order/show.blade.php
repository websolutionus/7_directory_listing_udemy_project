@extends('frontend.layouts.master')

@section('contents')
    <section id="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('frontend.dashboard.sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="dashboard_content">
                        <div class="my_listing">
                            <h4 style="justify-content: space-between">Order Details
                            </h4>
                            <div class="section-body">
                                <div class="invoice">
                                    <div class="invoice-print" id="invoice-print">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="invoice-title">
                                                    <h2>Invoice</h2>
                                                    <div class="invoice-number">Order #{{ $order->order_id }}</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <address>
                                                            <strong>Billed To:</strong><br>
                                                            {{ $order->user->name }}<br>
                                                            {{ $order->user->email }}<br>

                                                        </address>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <address>
                                                            <strong>Payment Method:</strong><br>
                                                            {{ $order->payment_method }}<br>
                                                            transaction id : {{ $order->transaction_id }}<br>
                                                        </address>
                                                    </div>
                                                    <div class="col-md-6" style="text-align: right">
                                                        <address>
                                                            <strong>Order Date:</strong><br>
                                                            {{ date('F d, Y', strtotime($order->purchase_date)) }}<br><br>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="section-title">Order Summary</div>
                                                <p class="section-lead">All items here cannot be deleted.</p>
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover table-md">
                                                        <tr>
                                                            <th data-width="40">#</th>
                                                            <th>Item</th>
                                                            <th class="text-center">Price</th>
                                                            <th class="text-center">Paid in </th>
                                                            <th class="text-right">Totals</th>
                                                        </tr>

                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{ $order->package->name }}</td>
                                                            <td class="text-center">{{ $order->base_amount }}
                                                                {{ $order->base_currency }}</td>
                                                            <td class="text-center">{{ $order->paid_amount }}
                                                                {{ $order->paid_currency }}</td>
                                                            <td class="text-right" style="text-align: right;">{{ $order->base_amount }}
                                                                {{ $order->base_currency }}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-lg-8 d-print-none">
                                                    </div>
                                                    <div class="col-lg-4 text-right">
                                                        <hr class="mt-2 mb-2">
                                                        <div class="invoice-detail-item" style="text-align: right;">
                                                            <div class="invoice-detail-name">Total</div>
                                                            <div class="invoice-detail-value invoice-detail-value-lg">
                                                                {{ $order->base_amount }} {{ $order->base_currency }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-md-right">
                                        <div class="float-lg-left mb-lg-0 mb-3">

                                        </div>
                                        <button class="btn btn-warning btn-icon icon-left"
                                            onclick="printPageArea('invoice-print')"><i class="fas fa-print"></i>
                                            Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function printPageArea(areaId) {
            var printContent = document.getElementById(areaId).innerHTML;
            var originalContent = document.body.innerHTML;

            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
    </script>
@endpush
