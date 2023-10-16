<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                <div class="product-image">

                    <div class="product_img_box">
                        <img id="product_img" class="w-100" src="assets/images/product_img1.jpg" alt="product_img">
                    </div>
                    <div class="row p-2">
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img1" src="assets/images/product_small_img1.jpg" alt="" srcset="">
                        </a>
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img2" src="assets/images/product_small_img1.jpg" alt="" srcset="">
                        </a>
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img3" src="assets/images/product_small_img1.jpg" alt="" srcset="">
                        </a>
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img4" src="assets/images/product_small_img1.jpg" alt="" srcset="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 id="p_title" class="product_title"></h4>
                        <h1 id="p_price" class="price"></h1>
                        <div class="pr_desc">
                            <p id="p_des"></p>
                        </div>
                        <div class="product_sort_info">
                            <ul>
                                <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li>
                                <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                            </ul>
                        </div>
                        <div>
                            <label class="form-lable">Color</label>
                            <select class="form-select" name="color" id="p_color">

                            </select>
                        </div>
                        <div>
                            <label class="form-lable">Size</label>
                            <select class="form-select" name="size" id="p_size">

                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="cart_extra">
                        <div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input id="p_qty" type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="cart_btn">
                            <button onclick="AddToCart()" class="btn btn-fill-out btn-addtocart" type="button">
                            <i class="icon-basket-loaded"></i> Add to cart</button>
                            <a onclick="AddToWishList()" class="add_wishlist"><i class="icon-heart"></i></a>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="large_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-style3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description"
                                role="tab" aria-controls="Description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                href="#Additional-info" role="tab" aria-controls="Additional-info"
                                aria-selected="false">Additional info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews"
                                role="tab" aria-controls="Reviews" aria-selected="false">Reviews (2)</a>
                        </li>
                    </ul>
                    <div class="tab-content shop_info_tab">
                        <div class="tab-pane fade show active" id="Description" role="tabpanel"
                            aria-labelledby="Description-tab">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old. Vivamus
                                bibendum magna Lorem ipsum dolor sit amet, consectetur adipiscing elit.Contrary to
                                popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                expedita distinctio.</p>
                        </div>
                        <div class="tab-pane fade" id="Additional-info" role="tabpanel"
                            aria-labelledby="Additional-info-tab">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Capacity</td>
                                        <td>5 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Black, Brown, Red,</td>
                                    </tr>
                                    <tr>
                                        <td>Water Resistant</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Artificial Leather</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                            <div class="comments">
                                <h5 class="product_tab_title">2 Review For <span>Blue Dress For Woman</span></h5>
                                <ul class="list_none comment_list mt-4">
                                    <li>
                                        <div class="comment_img">
                                            <img src="assets/images/user1.jpg" alt="user1">
                                        </div>
                                        <div class="comment_block">
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                            </div>
                                            <p class="customer_meta">
                                                <span class="review_author">Alea Brooks</span>
                                                <span class="comment-date">March 5, 2018</span>
                                            </p>
                                            <div class="description">
                                                <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean
                                                    sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                                    nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment_img">
                                            <img src="assets/images/user2.jpg" alt="user2">
                                        </div>
                                        <div class="comment_block">
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <p class="customer_meta">
                                                <span class="review_author">Grace Wong</span>
                                                <span class="comment-date">June 17, 2018</span>
                                            </p>
                                            <div class="description">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution
                                                of letters</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="review_form field_form">
                                <h5>Add a review</h5>
                                <form class="row mt-3">
                                    <div class="form-group col-12 mb-3">
                                        <div class="star_rating">
                                            <span data-value="1"><i class="far fa-star"></i></span>
                                            <span data-value="2"><i class="far fa-star"></i></span>
                                            <span data-value="3"><i class="far fa-star"></i></span>
                                            <span data-value="4"><i class="far fa-star"></i></span>
                                            <span data-value="5"><i class="far fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input required="required" placeholder="Enter Name *" class="form-control"
                                            name="name" type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input required="required" placeholder="Enter Email *" class="form-control"
                                            name="email" type="email">
                                    </div>

                                    <div class="form-group col-12 mb-3">
                                        <button type="submit" class="btn btn-fill-out" name="submit"
                                            value="Submit">Submit Review</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

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

    let searchParams= new URLSearchParams(window.location.search);
    let id=searchParams.get('id');


    async function ProductDetails() {
        let res=await axios.get("/ProductDetailsById/"+id);
        let details=res.data['data'];

        document.getElementById('product_img').src=details[0]['img1'];
        document.getElementById('img1').src=details[0]['img1'];
        document.getElementById('img2').src=details[0]['img2'];
        document.getElementById('img3').src=details[0]['img3'];
        document.getElementById('img4').src=details[0]['img4'];

        document.getElementById('p_title').innerText=details[0]['product']['title'];
        document.getElementById('p_price').innerText=`$ ${details[0]['product']['price']}`;
        document.getElementById('p_des').innerText=details[0]['des'];

        //Size and Color
        let size=details[0]['size'].split(',');
        let color=details[0]['color'].split(',');

        let sizeOption=`<option value="">Choose Size</option>`;
        $("#p_size").append(sizeOption);
        size.forEach((item)=>{
            let option=`<option value='${item}'>${item}</option>`;
            $("#p_size").append(option);
        });

        let colorOption=`<option value="">Choose Color</option>`;
        $("#p_color").append(colorOption);
        color.forEach((item)=>{
            let option=`<option value='${item}'>${item}</option>`;
            $("#p_color").append(option);
        });

        $("#img1").on('click', function(){
            $("#product_img").attr('src', details[0]['img1']);
        });

        $("#img2").on('click', function(){
            $("#product_img").attr('src', details[0]['img2']);
        });

        $("#img3").on('click', function(){
            $("#product_img").attr('src', details[0]['img3']);
        });

        $("#img4").on('click', function(){
            $("#product_img").attr('src', details[0]['img4']);
        });

    }

    async function AddToCart(){

        try{
            let p_size=$("#p_size").val();
            let p_color=$("#p_color").val();
            let p_qty=$("#p_qty").val();

            if(p_color.length===0){
                alert('Product Color Required!');
            }else if(p_size.length===0){
                alert('Product Size Required!');
            }else if(p_qty < 1){
                alert('Product Quantity Required!');
            }else{
                $(".preloader").delay(80).fadeIn(90).removeClass('loaded');
                let res=await axios.post("/CreateCartList",{
                    "product_id" : id,
                    "color" : p_color,
                    "size" : p_size,
                    "qty" : p_qty
                });

                $(".preloader").delay(80).fadeOut(90).addClass('loaded');

                if(res.status===200){
                    alert("Request Success");
                }
            }
        }
        catch(e){
            if(e.response.status === 404){
                sessionStorage.setItem('last_location', window.location.href);
                window.location.href="/login";
            }
        }
    }

    async function AddToWishList(){

        try{
            $(".preloader").delay(80).fadeIn(90).removeClass('loaded');
            let res=await axios.get("/CreateWishList/"+id);
            $(".preloader").delay(80).fadeOut(90).addClass('loaded');

            if(res.status===200){
                alert("Request Success");
            }
        }
        catch(e){
            if(e.response.status === 404){
                console.log(e.response);
                sessionStorage.setItem('last_location', window.location.href);
                window.location.href="/login";

            }
        }
    }

</script>
