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
                                    
                                    &nbsp;&nbsp;&nbsp;
                                    



                                </div>
                            </div>
                        </div>            
						
						
						
							
						<div class="row">
						
						 
                            <div class="col-md-6 col-xl-4">
                               
								<div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Users</div>
                                            <div class="widget-subheading">{{$user}}</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>
                                                
                                                                                                                                                
                                                
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Menu</div>
                                            <div class="widget-subheading">{{$menu}}</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>
                                                                                                 
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                 <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Order</div>
                                            <div class="widget-subheading">{{$orders}}</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>
                                                                                                 
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
						
						
						
						 
						
						
						
						
                       
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Trading</div>
                                                <div class="widget-subheading"></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success">
                                                                                          
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              
                       
                            
                        </div>
                
                
                
                
                 <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Recent Customers Transactions
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        
                                        
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">   
                                            <tr>
                                                
                                                <th>DATE</th>
                                                <th class="text-center">REFERENCE NO</th>
                                                <th class="text-center">TYPE</th>
                                                <th class="text-center">CURRENCY</th>
                                                <th class="text-center">AMOUNT</th>
                                                <th class="text-center">NARRATION</th>
                                                <th class="text-center">RBANK</th>
                                                <th class="text-center">REMAIL</th>
                                                <th class="text-center">SENDER</th>
                                                <th class="text-center">RECEIVER A/C</th>
                                                <th class="text-center">NOTE</th>
                                                <th class="text-center">STATUS</th>
                                            </tr>
                                             
                                            
				
				</table>                                         -->
                                      
                  
                
                
                         
                            </div>
                        </div>
                    </div>
                    </div>						
						
                    
                    
@endsection