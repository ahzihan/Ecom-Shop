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
                                            <button class="btn btn-line-fill btn-sm" type="submit">Proceed To CheckOut</button>
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
                            <input type="text" name="quantity" value="${item['qty']}" title="Qty" class="qty" size="4">
                            <input type="button" value="+" class="plus">
                            </div></td>
                            <td class="product-subtotal" data-title="Total">$ <span class="subtotal">${item['price']}</span></td>
                            <td class="product-remove" data-title="Remove"><a class="remove" data-id="${item['product']['id']}" ><i class="ti-close"></i></a></td>
                        </tr>`;

            $("#cartList").append(EachItem);
        });

        await CartTotal(res.data['data']);


        $(".plus").on('click',function(){
            if($(this).prev().val()){
                $(this).prev().val(+$(this).prev().val()+1);
            }
        });

        $(".minus").on('click',function(){
            if($(this).next().val() > 1){
                if($(this).next().val() > 1) $(this).next().val(+$(this).next().val()-1);
            }
        });


        $(".remove").on('click', function(){
            let id=$(this).data('id');
            RemoveCartList(id);
        });


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
</script>
