<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="table-responsive">
               <table class="table">
                   <thead>
                   <tr>
                       <th>No</th>
                       <th>Payable</th>
                       <th>Shipping</th>
                       <th>Delivery</th>
                       <th>Payment</th>
                       <th>More</th>
                   </tr>
                   </thead>
                   <tbody id="OrderList">

                   </tbody>
               </table>
           </div>
        </div>
    </div>
</div>

<div class="modal fade" id="InvoiceProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-6" id="exampleModalLabel">Product List</h4>
                <div class="product-remove" data-title="Remove"><a data-bs-dismiss="modal" class="remove" data-id="1"><i class="ti-close"></i></a></div>
            </div>
            <div class="modal-body">

                <table class="table">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody id="productList">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>

    async function OrderListRequest() {
        let res= await axios.get("/InvoiceList");
        let json=res.data

        $("#OrderList").empty();

        if(json.length!==0){
            json.forEach((item,i)=>{
                let rows=`<tr>
                       <td>${item['id']}</td>
                       <td>$ ${item['payable']} </td>
                       <td>${item['ship_details']}</td>
                       <td>${item['delivery_status']}</td>
                       <td>${item['payment_status']}</td>
                       <td><button data-id=${item['id']} class="btn view btn-danger btn-sm">View</button></td>
                   </tr>`

                $("#OrderList").append(rows);
            })


            $(".view").on('click',function () {
                    let id=$(this).data('id');
                    InvoiceProductList(id);
            })
        }
    }

   async function InvoiceProductList(id) {

       $(".preloader").delay(90).fadeIn(100).removeClass('loaded');
       let res= await axios.get("/InvoiceProductList/"+id);
       $("#InvoiceProductModal").modal('show');
       $(".preloader").delay(90).fadeOut(100).addClass('loaded');

       $("#productList").empty();

       res.data.forEach((item,i)=>{
           let rows=`<tr>
                       <td>${item['product']['title']}</td>
                        <td>${item['qty']}</td>
                       <td>$ ${item['sale_price']}</td>
                   </tr>`
           $("#productList").append(rows);
       });
   }

</script>