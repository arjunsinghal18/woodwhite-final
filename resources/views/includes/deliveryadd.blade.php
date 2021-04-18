@if(session('userlogedin') != '')
<div class="deladd">
<legend style="color:#ffffff;">Delivery Address</legend>
<!-- <hr> -->
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" class="form-control form-feild" id="checkout_firstname" placeholder="First Name*" value="@php echo ((isset($deliveryadd[0]->full_name))?''.$deliveryadd[0]->full_name:'') @endphp" required>
        </div>        
    </div>
    <div class="col-md-6">
    <div class="form-group">
        <input type="text" class="form-control form-feild" id="checkout_lastname" placeholder="Last Name*" value="@php echo ((isset($deliveryadd[0]->full_name))?''.$deliveryadd[0]->full_name:'') @endphp" required>
    </div>
    </div>
</div>

<div class="form-group">
    <input type="email" class="form-control form-feild" id="checkout_email" placeholder="Email*" required value="@php echo ((isset($deliveryadd[0]->email))?''.$deliveryadd[0]->email:'') @endphp">
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" class="form-control form-feild" accept="[0-9]" id="checkout_contact"  placeholder="Contact No.*" required value="@php echo ((isset($deliveryadd[0]->contact))?''.$deliveryadd[0]->contact:'') @endphp">
        </div>        
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" class="form-control form-feild" accept="[0-9]" id="checkout_contact"  placeholder="Alt. Contact No." required value="@php echo ((isset($deliveryadd[0]->contact))?''.$deliveryadd[0]->contact:'') @endphp">
        </div>
    </div>
</div>

<div class="form-group">
    <input type="text" class="form-control form-feild" id="checkout_add1" placeholder="Address Line 1*" required value="@php echo ((isset($deliveryadd[0]->addressline1))?''.$deliveryadd[0]->addressline1:'') @endphp">
</div>

<div class="form-group">
    <input type="text" class="form-control form-feild" id="checkout_pincode" placeholder="City*" required value="@php echo ((isset($deliveryadd[0]->pincode))?''.$deliveryadd[0]->pincode:'') @endphp">
</div>

<div class="form-group">
    <input type="text" class="form-control form-feild" id="checkout_add2" placeholder="Address Line 2" required value="@php echo ((isset($deliveryadd[0]->addressline2))?''.$deliveryadd[0]->addressline2:'') @endphp">
</div>

<div class="form-group">
    <input type="text" class="form-control form-feild" id="checkout_pincode" placeholder="Pincode*" required value="@php echo ((isset($deliveryadd[0]->pincode))?''.$deliveryadd[0]->pincode:'') @endphp">
</div>
<div class="form-group">
<select name="state" id="state" placeholder="asdf" onchange="chan(this)" class="form-control form-feild">
<option value="">---State*---</option>
<option class="form-feild" value="Andhra Pradesh">Andhra Pradesh</option>
<option class="form-feild" value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option class="form-feild" value="Arunachal Pradesh">Arunachal Pradesh</option>
<option class="form-feild" value="Assam">Assam</option>
<option class="form-feild" value="Bihar">Bihar</option>
<option class="form-feild" value="Chandigarh">Chandigarh</option>
<option class="form-feild" value="Chhattisgarh">Chhattisgarh</option>
<option class="form-feild" value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option class="form-feild" value="Daman and Diu">Daman and Diu</option>
<option class="form-feild" value="Delhi">Delhi</option>
<option class="form-feild" value="Lakshadweep">Lakshadweep</option>
<option class="form-feild" value="Puducherry">Puducherry</option>
<option class="form-feild" value="Goa">Goa</option>
<option class="form-feild" value="Gujarat">Gujarat</option>
<option class="form-feild" value="Haryana">Haryana</option>
<option class="form-feild" value="Himachal Pradesh">Himachal Pradesh</option>
<option class="form-feild" value="Jammu and Kashmir">Jammu and Kashmir</option>
<option class="form-feild" value="Jharkhand">Jharkhand</option>
<option class="form-feild" value="Karnataka">Karnataka</option>
<option class="form-feild" value="Kerala">Kerala</option>
<option class="form-feild" value="Madhya Pradesh">Madhya Pradesh</option>
<option class="form-feild" value="Maharashtra">Maharashtra</option>
<option class="form-feild" value="Manipur">Manipur</option>
<option class="form-feild" value="Meghalaya">Meghalaya</option>
<option class="form-feild" value="Mizoram">Mizoram</option>
<option class="form-feild" value="Nagaland">Nagaland</option>
<option class="form-feild" value="Odisha">Odisha</option>
<option class="form-feild" value="Punjab">Punjab</option>
<option class="form-feild" value="Rajasthan">Rajasthan</option>
<option class="form-feild" value="Sikkim">Sikkim</option>
<option class="form-feild" value="Tamil Nadu">Tamil Nadu</option>
<option class="form-feild" value="Telangana">Telangana</option>
<option class="form-feild" value="Tripura">Tripura</option>
<option class="form-feild" value="Uttar Pradesh">Uttar Pradesh</option>
<option class="form-feild" value="Uttarakhand">Uttarakhand</option>
<option class="form-feild" value="West Bengal">West Bengal</option>
</select>
    <!-- <input type="text" class="form-control form-feild" id="checkout_state" placeholder="State*" required value="@php echo ((isset($deliveryadd[0]->state))?''.$deliveryadd[0]->state:'') @endphp"> -->
</div>
<div class="form-group">
<!-- <input type="submit" value="submit"> -->
    <input type="submit" class="btn" id="checkout_sub" value="submit" style="background-color:#3E2715;">
</div>
</div>
@else
<div class="loginfirst deladd">
    <legend>Please Login First</legend>
    <br>
    <center>
        <a href="http://localhost:8000/login/google" class="tn google"><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
        <a href="http://localhost:8000/login/facebook" class="tn facebook"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
        </center>
</div>
@endif
<script>

function chan(thi){
    var value = $(thi).val();
    // alert(value);
    if(value == ''){
        $('select.form-feild').css('color','#ffffff');
    }else{
        $('select.form-feild').css('color','rgb(0, 0, 0)');
    }
}

// $('#state').on('change',function(){
//     alert(this.val());
//     alert('asdf');
// });

</script>
