<div class="container-fluid">

    <div class="row">
        <div class="col-md-3 p-2">
            <label class="form-label">Customer Name</label>
            <input type="text" id="cus_name" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Customer Address</label>
            <input type="text" id="cus_add" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Customer City</label>
            <input type="text" id="cus_city" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Customer State</label>
            <input type="text" id="cus_state" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Customer Post Code</label>
            <input type="text" id="cus_postcode" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Customer Country</label>
            <input type="text" id="cus_country" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Customer Phone</label>
            <input type="text" id="cus_phone" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Customer Fax</label>
            <input type="text" id="cus_fax" class="form-control form-control-sm"/>
        </div>

    </div>

    <hr/>

    <div class="row">

        <div class="col-md-3 p-2">
            <label class="form-label">Shipping Name</label>
            <input type="text" id="ship_name" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Shipping Address</label>
            <input type="text" id="ship_add" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Shipping City</label>
            <input type="text" id="ship_city" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Shipping State</label>
            <input type="text" id="ship_state" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Shipping Post Code</label>
            <input type="text" id="ship_postcode" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Shipping Country</label>
            <input type="text" id="ship_country" class="form-control form-control-sm"/>
        </div>

        <div class="col-md-3 p-2">
            <label class="form-label">Shipping Phone</label>
            <input type="text" id="ship_phone" class="form-control form-control-sm"/>
        </div>

    </div>

    <hr/>



    <div class="row">
        <div class="col-md-3">
            <button onclick="ProfileCreate()" class="btn btn-danger">Save Change</button>
        </div>
    </div>


</div>


<script>


    async function ProfileCreate(){

       let cus_name= $('#cus_name').val();
       let cus_add= $('#cus_add').val();
       let cus_city= $('#cus_city').val();
       let cus_state= $('#cus_state').val();
       let cus_postcode= $('#cus_postcode').val();
       let cus_phone= $('#cus_phone').val();
       let cus_country= $('#cus_country').val();
       let cus_fax= $('#cus_fax').val();
       let ship_name= $('#ship_name').val();
       let ship_add= $('#ship_add').val();
       let ship_city= $('#ship_city').val();
       let ship_state= $('#ship_state').val();
       let ship_postcode= $('#ship_postcode').val();
       let ship_country= $('#ship_country').val();
       let ship_phone= $('#ship_phone').val();

       let postBody={
           "cus_name": cus_name,
           "cus_add": cus_add,
           "cus_city": cus_city,
           "cus_state": cus_state,
           "cus_postcode": cus_postcode,
           "cus_country": cus_country,
           "cus_phone": cus_phone,
           "cus_fax": cus_fax,
           "ship_name": ship_name,
           "ship_add": ship_add,
           "ship_city":ship_city,
           "ship_state": ship_state,
           "ship_postcode": ship_postcode,
           "ship_country": ship_country,
           "ship_phone": ship_phone
       }


        $(".preloader").delay(90).fadeIn(100).removeClass('loaded');
        let res = await axios.post("/CreateProfile",postBody);
        $(".preloader").delay(90).fadeOut(100).addClass('loaded');

        if(res.data['msg']==="success"){
            alert("Request Successful");
        }
        else{
            alert("Request Fail");
        }

    }

      async function ProfileDetails() {

          let res = await axios.get("/ReadProfile");
          if (res.data['data'] !== null) {

              $('#cus_name').val( res.data['data']['cus_name']);
              $('#cus_add').val( res.data['data']['cus_add']);
              $('#cus_city').val( res.data['data']['cus_city']);
              $('#cus_state').val( res.data['data']['cus_state']);
              $('#cus_postcode').val( res.data['data']['cus_postcode']);
              $('#cus_phone').val( res.data['data']['cus_phone']);
              $('#cus_country').val( res.data['data']['cus_country']);
              $('#cus_fax').val( res.data['data']['cus_fax']);
              $('#ship_name').val( res.data['data']['ship_name']);
              $('#ship_add').val( res.data['data']['ship_add']);
              $('#ship_city').val( res.data['data']['ship_city']);
              $('#ship_state').val( res.data['data']['ship_state']);
              $('#ship_postcode').val( res.data['data']['ship_postcode']);
              $('#ship_country').val( res.data['data']['ship_country']);
              $('#ship_phone').val( res.data['data']['ship_phone']);

          }

      }



</script>
