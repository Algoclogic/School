<!-- 
	Step 1 registration for filling bank details
 -->
<div id="step1" class="p-m tab-pane active">

	@include('school.steps.formHeader')
	                                	
    <div class="row">
        <div class="col-lg-12">
        	<div class="hpanel hblue">
        		<div class="panel-heading">
                    <div class="m-b-md tred">
                		<span>* Bank Details ( Where the students will submit their fee ):</span>
                	</div>
                </div>	
        		<div class="panel-body">
                    <div class="form-group col-lg-6">
                        <label>Name of bank</label>
                        <input type="" value="" id="" class="form-control" name="bank_name" placeholder="bank name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Branch</label>
                        <input type="" value="" id="" class="form-control" name="branch_name" placeholder="branch name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>16-Digit Bank A/c No.</label>
                        <input type="text" value="" id="" class="form-control" name="account_number" placeholder="16 digit account no" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>In Favour of</label>
                        <input type="" value="" id="" class="form-control" name="in_favour" placeholder="in favour of" required>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="text-right m-t-xs">
        <a class="btn btn-default prev" href="#">Previous</a>
        <a class="btn btn-default next" href="#">Next</a>
    </div>
</div>