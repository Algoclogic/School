<!-- 
	Step 4 confirmation before submitting form
 -->

 <div id="step4" class="p-m tab-pane">
	
	@include('school.steps.formHeader')
	                     	
    <div class="row text-center m-t-lg m-b-lg">
        <div class="col-lg-12">
        	<div class="hpanel hblue">
        		<div class="panel-heading">
                    <div class="m-b-md tred">
                		<span>* Bank Details ( Where the students will submit their fee ):</span>
                	</div>
                </div>
                <div class="panel-body">
                    <i class="pe-7s-check fa-5x text-muted"></i>
                    <p class="small m-t-md">
                        <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                    </p>
        
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve">
                        Approve this form
                    </div>
                </div>    
    		</div>
    	</div>	
        <div class="text-right m-t-xs">
            <a class="btn btn-default prev" href="#">Previous</a>
            <a class="btn btn-default next" href="#">Next</a>
            <a class="btn btn-success submitWizard" href="#">Submit</a>
        </div>
    </div>
</div>