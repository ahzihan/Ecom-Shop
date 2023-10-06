<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1> Wish List</h1>
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
	<div class="container my-5">
        <div id="list" class="row">

        </div>
    </div>
</div>


<script>
    async function WishList(){

        let res=await axios.get(`/ProductWishList`);
        $("#list").empty();

        res.data['data'].forEach((item,i)=>{
            let EachItem=`<div class="col-lg-3 col-md-4 col-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="/details?id=${item['product']['id']}">
                                        <img src="${item['product']['image']}" alt="product_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="/details?id=${item['product']['id']}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="/details?id=${item['product']['id']}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title">
                                        <a href="/details?id=${item['product']['id']}">${item['product']['title']}</a></h6>
                                    <div class="product_price">
                                        <span class="price">$ ${item['product']['price']}</span>
                                    </div>
                                    <div class="rating_wrap d-flex justify-content-between">
                                        <div class="rating">
                                            <div class="product_rate" style="width:${item['product']['star']}%"></div>
                                        </div>
                                        <div>
                                            <button class="btn btn-danger btn-xs remove" data-id="${item['product_id']}">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;

            $("#list").append(EachItem);
        })

        $(".remove").on('click', function(){
            let id=$(this).data('id');
            RemoveWishList(id);
        })
    }


    async function RemoveWishList(id){

        $(".preloader").delay(80).fadeOut(100).addClass('loaded');
        let res=await axios.get("/RemoveWishList/"+id);
        $(".preloader").delay(80).fadeIn(90).addClass('loaded');

        if(res.status===200){
            $(".preloader").delay(80).fadeOut(100).addClass('loaded');
            await WishList();
        }else{
            alert("Requist Fail!");
        }
    }
</script>
