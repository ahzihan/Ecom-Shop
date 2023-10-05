<div class="section small_pt pb_70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
            	<div class="heading_s1 text-center">
                	<h2>Exclusive Products</h2>
                </div>
            </div>
		</div>
        <div class="row">
        	<div class="col-12">
            	<div class="tab-style1">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">

                        <li class="nav-item" id="popularID">
                            <a class="nav-link active" id="arrival-tab" data-bs-toggle="tab" href="#popular" role="tab" aria-controls="arrival" aria-selected="false">Popular</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link new" id="arrival-tab" data-bs-toggle="tab" href="#new" role="tab" aria-controls="arrival" aria-selected="false">New</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link top" id="sellers-tab" data-bs-toggle="tab" href="#top" role="tab" aria-controls="sellers" aria-selected="false">Top</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link special" id="featured-tab" data-bs-toggle="tab" href="#special" role="tab" aria-controls="featured" aria-selected="false">Special</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link trending" id="special-tab" data-bs-toggle="tab" href="#trending" role="tab" aria-controls="special" aria-selected="true">Trending</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                	<div class="tab-pane active fade show" id="popular" role="tabpanel" aria-labelledby="arrival-tab">
                        <div id="PopularItem" class="row shop_container">

                        </div>
                    </div>

                    <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="arrival-tab">
                        <div id="NewItem" class="row shop_container">

                        </div>
                    </div>

                    <div class="tab-pane fade" id="top" role="tabpanel" aria-labelledby="sellers-tab">
                        <div id="TopItem" class="row shop_container">

                        </div>
                    </div>

                    <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="featured-tab">
                        <div id="SpecialItem" class="row shop_container">

                        </div>
                    </div>

                    <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="special-tab">
                        <div id="TrendingItem" class="row shop_container">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>


    async function ExclesiveItems(remark,ID) {
        let res=await axios.get(`/ListProductByRemark/${remark}`);
        $(`#${ID}`).empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem=`<div class="col-lg-3 col-md-4 col-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="/details?id=${item['id']}">
                                        <img src="${item['image']}" alt="product_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="/details?id=${item['id']}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="/details?id=${item['id']}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title">
                                        <a href="/details?id=${item['id']}">${item['title']}</a></h6>
                                    <div class="product_price">
                                        <span class="price">$ ${item['price']}</span>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:${item['star']}%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
            $(`#${ID}`).append(EachItem);
        })
    }


</script>
