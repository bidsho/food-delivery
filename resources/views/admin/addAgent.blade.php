@extends('layouts.admin')
@section('content')


<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class='fas fa-comments-dollar' style='font-size:28px;color:orange'></i>&nbsp;
                                    </div>
p

                                    &nbsp;&nbsp;&nbsp;
                                    <div class="alert">
                                      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                      <strong>Hello!</strong> This is a Restricted Area only for Admin
                                    </div>



                                </div>
                            </div>
                        </div>            
						
						
						
						  
  
  
    
  <!-- One "tab" for each step in the form: -->
<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                             
        <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
            <span><i class='fas fa-key' style='font-size:24px;color:orange'></i>Agent</span>
        </a>
    </li> 
</ul>  
                        
                        
         <div class="tab-content">

                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Please ensure all fields are completed</h5>
                                    
                                    &nbsp;   
                                    @if(Session::has('suc'))
                                    <div class="bg-primary text-light" role="alert">
                                    {{Session::get('suc')}}
                                    @endif
                                
                                </div>                                 
  	<form class="login100-form validate-form" action="{{ url('/admin/saveAgent/')}}" method="post" enctype="multipart/form-data">
      @csrf
        
  	    
			<div class="tab"><h1><strong style="color: brown; font-weight: 700;">Agent Information</h1></strong>
					 
					  <div class="position-relative form-group">
						 
						<input  type="text" name="name" placeholder="Enter Name"  class="form-control" required=""/>
					</div>
					

  </div>
		
					<div class="container-login100-form-btn p-t-10">
				 
						<button class="mt-2 btn btn-primary" style="width:320px;" type="submit" name="submit"  >Next</button>
				 
					</div>
  
 
</form>

</div></div></div></div>
  


  
	 						
						
     

        
                    
@endsection