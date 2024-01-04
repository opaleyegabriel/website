<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
    <div class="col-md-12 col-lg-12">
      <div class="col-md-12 ">
        <div class="row">
          <div class="col-md-12">
            <div class="card" data-aos="fade-up" data-aos-delay="800">
              <div class="card-body">

                <?php
                foreach ($this->viewtext as $key => $value) {
                  // code...
                  $contactheadertext =$value['contactheadertext'];
                  $contactsubtext =$value['contactsubtext'];
                  $bannerendtext =$value['bannerendtext'];
                }
                 ?>
                <div class="flex-wrap card-header d-flex justify-content-between align-items-center mb-2">
                  <div class="dropdown">
                    <div href="#" class="text-gray " id="" >
                      Change Contact Header Text
                    </div>
                  </div>
                </div>
                <form class="" action="<?php echo URL; ?>admincontactsettings/changecontactheadertext" method="post">
                  <input type="text" name="contactheadertext" value="<?php echo $contactheadertext;  ?>" class="form-control mb-4">
                  <input type="submit" name="" value="Change" class="btn btn-primary" >
                </form>
                <div class="flex-wrap card-header d-flex justify-content-between align-items-center mb-2">
                  <div class="dropdown">
                    <div href="#" class="text-gray " id="" >
                      Change Contact SubText
                    </div>
                  </div>
                </div>
                <form class="" action="<?php echo URL; ?>admincontactsettings/changecontactsubtext" method="post">
                  <input type="text" name="contactsubtext" value="<?php echo $contactsubtext; ?>" class="form-control mb-4">
                  <input type="submit" name="" value="Change" class="btn btn-primary" >
                </form>
                <div class="flex-wrap card-header d-flex justify-content-between align-items-center mb-2">
                  <div class="dropdown">
                    <div href="#" class="text-gray " id="" >
                      Add Phone Number
                    </div>
                  </div>
                </div>
                <form class="" action="<?php echo URL; ?>admincontactsettings/addphone" method="post">
                  <input type="number" name="phone" value="" placeholder="Enter Phone Number" class="form-control mb-4"/>
                  <input type="submit" name="" value="Add" class="btn btn-primary" >
                </form>
                <div class="flex-wrap card-header d-flex justify-content-between align-items-center mb-2">
                  <div class="dropdown">
                    <div href="#" class="text-gray " id="" >
                      Add Email Address
                    </div>
                  </div>
                </div>
                <form class="" action="<?php echo URL; ?>admincontactsettings/addemail" method="post">
                  <input type="email" name="phone" value="" placeholder="Enter Email Address" class="form-control mb-4"/>
                  <input type="submit" name="" value="Add" class="btn btn-primary" >
                </form>
                <div class="flex-wrap card-header d-flex justify-content-between align-items-center mb-2">
                  <div class="dropdown">
                    <div href="#" class="text-gray " id="" >
                      Add Address
                    </div>
                  </div>
                </div>
                <form class="" action="<?php echo URL; ?>admincontactsettings/addaddress" method="post">
                  <textarea  name="address" value="" class="form-control mb-4">Add Address</textarea>
                  <input type="submit" name="" value="Add" class="btn btn-primary" >
                </form>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

</div>
