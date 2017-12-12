<!-- 
	Step 2 registration for filling 9th - 10th streams
 -->

 <div id="step2" class="p-m tab-pane">
	  
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
                    <div class="hpanel hviolet" style="">
                        <div class="panel-heading b">
                            <span class="tblue">9TH CLASS</span>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                    
                                <div class="col-lg-3">
                                    <div class="col-md-12">
                                        <span class="tblue">Main Subjects</span>
                                    </div>
                                    <select id="select-district" class="form-control selectize" name="" onChange="" multiple>
                                        @foreach($subject_9th as $key => $value)
                                        <option value="{{ $key}}" >{{ strtoupper($value)}}</option>
                                        @endforeach
                                    </select>
                                 
                                </div> 


                                <div class="col-lg-3">
                                    <div class="col-md-12">
                                        <span class="tblue">Optional Subjects</span>
                                    </div>
                                    <select id="select-district" class="form-control selectize" name="" onChange="" multiple>
                                        @foreach($optional_9th as $key => $value)
                                        <option value="{{ $key}}" >{{ strtoupper($value)}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="col-lg-3">
                                    <div class="col-md-12">
                                        <span class="tblue">Vocational Subjects</span>
                                    </div>
                                    <select id="select-district" class="form-control selectize" name="" onChange="" multiple>
                                        @foreach($vocational_9th as $key => $value)
                                        <option value="{{ $key}}" >{{ strtoupper($value)}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="form-inline">
                                          <label for="usr" class="tblue">Intake Capacity</label>
                                          <input type="text" class="form-control" id="usr">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-inline">
                                          <label for="usr" class="tblue">Total Fee</label>
                                          <input type="text" class="form-control" id="usr">
                                        </div>         
                                    </div>
                                </div>    
                            </div> 
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="tblue">Total:-</span> 

                                </div>
                                <div class="col-md-3">
                                     <span class="tblue">Total:-</span>           
                                </div>
                                <div class="col-md-3">
                                    <span class="tblue">Total:-</span>
                                </div>
                            </div>   
                        </div>
                    </div>

                    <div class="hpanel hviolet" style="">
                        <div class="panel-heading b">
                            <span class="tblue">10TH CLASS</span>
                        </div>
                        <div class="panel-body">
                        
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <div class="col-md-12">
                                        <span class="tblue">Main Subjects</span>
                                    </div>
                                    <select id="select-district" class="form-control selectize" name="" onChange="" multiple>
                                        @foreach($subject_10th as $key => $value)
                                        <option value="{{ $key}}" >{{ strtoupper($value)}}</option>
                                        @endforeach
                                    </select>
                                </div> 

                                <div class="col-lg-3">
                                     <div class="col-md-12">
                                        <span class="tblue">Optional Subjects</span>
                                    </div>
                                    <select id="select-district" class="form-control selectize" name="" onChange="" multiple>
                                        @foreach($optional_10th as $key => $value)
                                        <option value="{{ $key}}" >{{ strtoupper($value)}}</option>
                                        @endforeach
                                    </select>
                                                              
                                </div> 

                                <div class="col-lg-3">
                                    <div class="col-md-12">
                                        <span class="tblue">Vocational Subjects</span>
                                    </div>
                                    <select id="select-district" class="form-control selectize" name="" onChange="" multiple>
                                        @foreach($vocational_10th as $key => $value)
                                        <option value="{{ $key}}" >{{ strtoupper($value)}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="col-lg-3">
                                    <div class="row">
                                    <div class= 'col-md-12'>
                                        <div class="form-inline">
                                          <label for="usr" class="tblue">Intake Capacity</label>
                                          <input type="text" class="form-control" id="usr">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-inline ">
                                          <label for="usr" class="tblue">Total Fee</label>
                                          <input type="text" class="form-control" id="usr">
                                        </div>         
                                    </div>
                                </div>
                                </div>    
                            </div> 

                            <div class="row">
                                <div class="col-md-3">
                                    <span class="tblue">Total:-</span> 
                                    
                                </div>
                                <div class="col-md-3">
                                     <span class="tblue">Total:-</span>           
                                </div>
                                <div class="col-md-3">
                                    <span class="tblue">Total:-</span>
                                </div>
                            </div>
                        </div>
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