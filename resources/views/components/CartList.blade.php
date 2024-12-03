<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Card List</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">This Pages</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive shop_cart_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody id="cartList">

                        </tbody>
                        <tfoot>
                        	<tr>
                            	<td colspan="6" class="px-0">
                                	<div class="row g-0 align-items-center">
                                    	<div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                            <div class="coupon field_form input-group">
                                                <p><strong>Total = $<span id="total"></span></strong></p>
                                            </div>
                                    	</div>
                                        <div class="col-lg-8 col-md-6  text-start  text-md-end">
                                            <button onclick="CheckOut()" class="btn btn-line-fill btn-sm" type="submit">Proceed To CheckOut</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    async function CartList(){

        let res=await axios.get(`/CartList`);
        $("#cartList").empty();

        res.data['data'].forEach((item,i)=>{
            let EachItem=`<tr>
                            <td class="product-thumbnail"><a href="/details?id=${item['product']['id']}"><img src="${item['product']['image']}" alt="product1"></a></td>
                            <td class="product-name" data-title="Product"><a href="/details?id=${item['product']['id']}">${item['product']['title']}</a></td>
                            <td class="product-price" data-title="Price">$ <span class="unit-price">${item['product']['price']}</span></td>
                            <td class="product-quantity" data-title="Quantity"><div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input type="text" data-unitprice="${item['product']['price']}" name="quantity" value="${item['qty']}" title="Qty" class="qty" size="4">
                            <input type="button" value="+" class="plus">
                            </div></td>
                            <td class="product-subtotal" data-title="Total">$ <span class="subtotal">${item['price']}</span></td>
                            <td class="product-remove" data-title="Remove"><a class="remove" data-id="${item['product']['id']}" ><i class="ti-close"></i></a></td>
                        </tr>`;

            $("#cartList").append(EachItem);
        });

        await CartTotal(res.data['data']);


        // Event listeners for plus and minus buttons
        $(document).on("click", ".plus", function () {
            let inputElement = $(this).siblings(".qty");
            incrementQuantity(inputElement);
        });

        $(document).on("click", ".minus", function () {
            let inputElement = $(this).siblings(".qty");
            decrementQuantity(inputElement);
        });


        $(".remove").on('click', function(){
            let id=$(this).data('id');
            RemoveCartList(id);
        });


    }

    function incrementQuantity(inputElement) {
        let currentValue = parseInt(inputElement.val());
        inputElement.val(currentValue + 1);
        updateSubtotal(inputElement);
        updateTotal();
    }

    // Function to decrement quantity
    function decrementQuantity(inputElement) {
        let currentValue = parseInt(inputElement.val());
        if (currentValue > 1) {
            inputElement.val(currentValue - 1);
            updateSubtotal(inputElement);
            updateTotal();
        }
    }

    // Function to update subtotal based on quantity
    function updateSubtotal(inputElement) {
        let quantity = parseInt(inputElement.val());
        let unitPrice = parseFloat(inputElement.data("unitprice"));
        let subtotal = quantity * unitPrice;
        let parentRow = inputElement.closest("tr");
        parentRow.find(".subtotal").text(subtotal.toFixed(2));
    }



    // Function to update total amount
    function updateTotal() {
        let total = 0;
        $('.subtotal').each(function() {
            total += parseFloat($(this).text());
        });
        $('#total').text(total.toFixed(2));
    }



    async function CartTotal(data){
        let Total=0;
        data.forEach((item,i)=>{
            Total=Total+parseFloat(item['price']);
        });
        $("#total").text(Total);
    }

    async function RemoveCartList(id){

        $(".preloader").delay(80).fadeOut(100).addClass('loaded');
        let res=await axios.get("/DeleteCartList/"+id);
        $(".preloader").delay(80).fadeIn(90).addClass('loaded');

        if(res.status===200){
            $(".preloader").delay(80).fadeOut(100).addClass('loaded');
            await CartList();
        }else{
            alert("Requist Fail!");
        }
    }

    async function CheckOut(){

        $(".preloader").delay(80).fadeIn(100).removeClass('loaded');
        $("#paymentList").empty();

        let res=await axios.get(`/InvoiceCreate`);

        $(".preloader").delay(80).fadeOut(100).addClass('loaded');

        if(res.status===200){
            $("#paymentMethodModal").modal('show');

                res.data['data'][0]['paymentMethod'].forEach((item,i)=>{
                let EachItem=`<tr>
                            <td><img class="w-25" src="${item['logo']}" alt="method-logo"></td>
                            <td><p>${item['name']}</p></td>
                            <td><a class="btn btn-fill-out" href="${item['redirectGatewayURL']}">Pay</a></td>
                    </tr>`;

                $("#paymentList").append(EachItem);
            });
        }else{
            alert("Request Fail!");
        }

    }
</script>
