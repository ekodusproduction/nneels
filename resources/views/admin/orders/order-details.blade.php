@extends('admin.index')
@section('title', 'Order Details')

@section('custom-style')
  <style>
    .header-color{
        border-radius: 10px;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        color: black;
        background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
        margin-bottom: 0px;
    }

    .header-nav{
        border-top: 1px solid #424242;
        border-bottom: 1px solid #424242;
        padding-top: 20px;
        padding-left: 20px;
    }
    .header-nav h6{
        color:black;
    }
    .product-name{
        width:200px;
        word-wrap: wrap break-word;
        font-size:15px;
        line-height: 25px;
    }

    .product-price, .sub-total, .shipping-charge, .sub-total-value, .shipping-charge-value{
        font-size:16px;
    }

    .order-summary, .shipping-address, .update-product-status{
        background-color: #fbfbfb;
        color: #3f3e3e;
        padding: 20px 5px 10px 10px;
        border-radius: 10px;
        outline: 1px dashed #838181;
    }
    .order-summary p{
        margin-bottom:4px;
    }

    .order-details-thead{
        font-weight: bolder;
        text-transform: uppercase;
        font-size: 15px;
        padding: 0.75rem 1.25rem;
        color: #232323;
        border-top: 1px solid #cfcfcf;
        border-bottom: 1px solid #cfcfcf !important;
    } 

    .cart-section .cart-table thead tr th {
        font-weight: bolder;
        text-transform: uppercase;
        font-size: 15px;
        padding: 0.75rem 1.25rem;
        color: #232323;
        border-top: 1px solid #232323;
        border-bottom: 1px solid #2c2c2c !important;
    }

    .table tbody tr td {
        padding: 10px;
        border-bottom: none !important;
        color: #7e7e7e;
    }

    .table tfoot tr.table-order:last-child td {
        padding: 20px 15px;
    }

  </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-color">Orders ID  :  <span style="color:rgb(102, 3, 102);">#{{$order_id}}</span></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="table-responsive">
                                <table class="table cart-section cart-table">
                                    <thead class="order-details-thead">
                                        <tr>
                                            <th colspan="2">Items</th>
                                        </tr>
                                    </thead>
                                    <tbody id="order-items">
                                        @foreach ($get_order_details as $item)
                                            <tr class="table-order">
                                                <td>
                                                    <a href="javascript:void(0)">
                                                        <img src="{{asset($item->product->main_image)}}" class="img-fluid" style="height:100px;border-radius:10px;" alt="" >
                                                    </a>
                                                </td>
                                                <td>
                                                    <p>Product Name</p>
                                                    <h5 class="product-name">{{$item->product->name}}</h5>
                                                </td>
                                                <td>
                                                    <p>Quantity</p>
                                                    <h5 class="product-quantity">{{$item->product_qty}}</h5>
                                                </td>
                                                <td>
                                                    <p>Price</p>
                                                    <h5 class="product-price">${{$item->amount * $item->product_qty}} <span style="font-size:14px;font-weight:500;">(each ${{$item->amount}} ) </span></h5>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="table-order" style="border-bottom: 1px solid white !important;">
                                            <td colspan="3">
                                                <h5 class="sub-total mb-0 mt-2">Subtotal :</h5>
                                            </td>
                                            <td>
                                                <h4 id="sub-total" class="sub-total-value mb-0 mt-2">$00.00</h4>
                                            </td>
                                        </tr>

                                        <tr class="table-order">
                                            <td colspan="3">
                                                <h5 class="shipping-charge">Shipping <span style="font-size:12px;">(Free shipping on orders above $195) </span> :</h5>
                                            </td>
                                            <td>
                                                <h4 id="shipping-charge" class="shipping-charge-value">$00.00</h4>
                                            </td>
                                        </tr>

                                        <tr class="table-order">
                                            <td colspan="3">
                                                <h4 class="theme-color fw-bold mb-0">Total Price :</h4>
                                            </td>
                                            <td>
                                                <h4 id="total_amount" class="mb-0">$00.00</h4>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="order-summary">
                                <h5>Order Summary : </h5>
                                <p>Order ID : {{$get_order_details[0]->order_id}}</p>
                                <p>Order Date : {{\Carbon\Carbon::parse($get_order_details[0]->created_at)->format('M d, Y')}}</p>
                                <p id="order-summary-total">Total Amount : $0</p>
                            </div> 

                            <div class="shipping-address mt-4">
                                <h5>Shipping Address : </h5>
                                <p>{{$shipping_details->address_1}}, {{$shipping_details->address_2}}, {{$shipping_details->town_or_city}}, {{$shipping_details->province}}, {{$shipping_details->country}} - {{$shipping_details->zip_code}}</p>
                            </div>

                            <div class="update-product-status mt-4">
                                <h5>Update Product Delivery Status : </h5>
                                <select name="updateProductDeliveryStatus" id="update-product-delivery-status" class="form-control">
                                    <option value="" disabled selected> -- Select status --</option>
                                    <option value="processed">Order Processed</option>
                                    <option value="dispatched">Order Dispatched</option>
                                    <option value="delivered">Order Delivered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Get the necessary elements
        const subTotalElement = document.getElementById('sub-total');
        const shippingChargeElement = document.getElementById('shipping-charge');
        const totalAmountElement = document.getElementById('total_amount');
        const orderSummaryTotalElement = document.getElementById('order-summary-total');

        // console.log('subTotalElement:', subTotalElement);
        // console.log('shippingChargeElement:', shippingChargeElement);
        // console.log('totalAmountElement:', totalAmountElement);

        // Check if these elements exist
        if (!subTotalElement || !shippingChargeElement || !totalAmountElement) {
            console.error('One or more of the required elements are missing.');
            return;
        }

        // Get all product rows
        const rows = document.querySelectorAll('#order-items .table-order');

        if (rows.length === 0) {
            console.error('No product rows found.');
            return;
        }

        let subTotal = 0;

        rows.forEach(row => {
            const quantityElement = row.querySelector('.product-quantity');
            const priceElement = row.querySelector('.product-price');

            if (!quantityElement || !priceElement) {
                console.error('Quantity or Price element missing in a row.');
                return;
            }

            const quantity = parseInt(quantityElement.textContent.trim());
            const pricePerUnit = parseFloat(priceElement.textContent.split(' ')[0].replace('$', '').trim());

            if (isNaN(quantity) || isNaN(pricePerUnit)) {
                console.error('Invalid quantity or price values.');
                return;
            }

            subTotal += pricePerUnit;
        });

        // Calculate shipping charge
        let shippingCharge = 0;
        const country = 'United States'; // Replace this with the actual country variable
        const totalCartAmount = subTotal;

        if (country === 'United States') {
            if (totalCartAmount > 195) {
                shippingCharge = 0;
            } else if (totalCartAmount <= 195 && totalCartAmount >= 75) {
                shippingCharge = 14;
            } else if (totalCartAmount < 75) {
                shippingCharge = 12;
            }
        } else {
            if (totalCartAmount <= 195 && totalCartAmount >= 75) {
                shippingCharge = 14;
            } else if (totalCartAmount < 75) {
                shippingCharge = 12;
            }
        }

        // Calculate total amount
        const totalAmount = subTotal + shippingCharge;

        // Update the HTML
        subTotalElement.textContent = `$${subTotal.toFixed(2)}`;
        shippingChargeElement.textContent = `$${shippingCharge.toFixed(2)}`;
        totalAmountElement.textContent = `$${totalAmount.toFixed(2)}`;
        orderSummaryTotalElement.textContent = `Total Amount :$${totalAmount.toFixed(2)}`;
    });
</script>
@endsection
