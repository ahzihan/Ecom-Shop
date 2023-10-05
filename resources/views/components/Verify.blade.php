<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Verification</h3>
                        </div>
                            <div class="form-group mb-3">
                                <input id="code" type="text" required="" class="form-control" name="otp" placeholder="Verification Code">
                            </div>
                            <div class="form-group mb-3">
                                <button onclick="Verify()" type="submit" class="btn btn-fill-out btn-block" name="verify">Confirm</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    async function Verify(){

        let code = $("#code").val();
        let email = sessionStorage.getItem('email');

        if(code.length===0){
            alert('Verification code is required.');
        }else{

            $(".preloader").delay(80).fadeIn(90).removeClass('loaded');
            let res = await axios.get("/VerifyLogin/"+email+"/"+code);
            if(res.status===200){
                if(sessionStorage.getItem('last_location')){
                    window.location.href=sessionStorage.getItem('last_location');
                }else{
                    window.location.href="/";
                }
            }else{
                $(".preloader").delay(80).fadeOut(90).addClass('loaded');
                alert("Something Went Wrong!");
            }
        }
    }
</script>
