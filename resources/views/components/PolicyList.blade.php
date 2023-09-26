<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1 id="policyName"></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">This Pages</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="mt-5">
    <div class="container my-5">
        <div class="row">
            <div id="policy" class="col-12">

            </div>
        </div>
    </div>
</div>


<script>
    async function PolicyList(){
        let searchParams= new URLSearchParams(window.location.search);
        let name=searchParams.get('name');

        if(name==="about"){
            $("#policyName").text("About Us");
        }
        if(name==="refund"){
            $("#policyName").text("Refund Policy");
        }
        if(name==="terms"){
            $("#policyName").text("Terms and Condition");
        }
        if(name==="how to buy"){
            $("#policyName").text("How to Buy?");
        }
        if(name==="contact"){
            $("#policyName").text("Contact Us");
        }
        if(name==="complain"){
            $("#policyName").text("How to Complain Us?");
        }


        let res=await axios.get("/PolicyByType/"+name);
        $("#policy").empty();

        let des=res.data['des'];
        $("#policy").html(des);

    }
</script>
