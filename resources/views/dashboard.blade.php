<x-app-layout>
              

              
				
				
				<div class="page-body">
          <div class="grid grid-cols-12 gap-card-gap"> 
            <div class="col-span-6 ratio_109 4xl:col-span-4 lg:col-span-5 2lg:col-span-6 lg:-order-4 2md:col-span-12">
              <!-- Welcome Card -->
              <div class="card p-card-space before:!pt-0 bg-primary relative common-animate-main 4xl:h-[390px] xl:h-full gap-0 common-animate-main welcome-card-main h-[410px] "> 
                <div>
                  <div class="flex items-center gap-2 justify-between">
				  <span class="flex items-center gap-2 text-3xl font-semibold text-white 3sm:text-lg 5xl:text-2xl">
				  Hello : {{ auth()->user()->name }}
				  
				    <span>Role : <span>
                    @foreach(auth()->user()->roles as $role)
                        {{ $role->name }}
                    @endforeach 
                </span> </span>
				  <img class="w-[22px] h-[22px]" src="{{ asset ('back/images/waving-hand.png') }}" alt="waving-hand"></span>
                    <div class="dropdown">
                      <button class="before:absolute flex items-center justify-center cursor-pointer before:inset-0 before:bg-white before:opacity-[34%] before:rounded-full p-[5px]"> 
                        <svg class="w-[18px] h-[18px] stroke-white"> 
                          <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Setting"> </use>
                        </svg>
                      </button>
                      <div class="dropdown-menu !w-36 right-0 !top-8">
                        <ul> 
                          <li><a href="profile.html">Profile Setting  </a></li>
                          <li><a href="email.html">Message</a></li>
                          <li><a href="todo-app.html">Taskboard  </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="text-xs font-semibold text-content-white leading-[22px] max-w-[285px] mt-1 2md:line-clamp-2 sm:line-clamp-none">Welcome to the Govo family! we are glad that you are visite this dashboard.</p>
                  <button class="mt-6 sm:mt-4 rounded-5 py-[8px] px-4 bg-white text-xs font-bold text-title dark:bg-sidebar-dark2 hover:text-primary">What New!</button>
                </div>
                <div class="relative bg-img"> <img class="img-fluid welcome-img" src="https://admin.pixelstrap.com/govo/assets/images/svg/1.svg" alt="welcome-image"><img class="w-[28px] h-[28px] common-animate animate-ping top-[14px] 6xl:top-[30px] 4xl:top-[14px] absolute left-[10%] 2md:left-[24%] sm:left-[10%] animate__animated animate__infinite animate__shakeY animate__slower" src="https://admin.pixelstrap.com/govo/assets/images/svg/done.svg" alt="welcome-done-image"><img class="w-24 h-w-24 common-animate animate-ping top-[-10%] 6xl:top-[4%] 4xl:top-[-10%] absolute right-[2%] 2md:right-[17%] sm:right-[2%] left-unset  animate__animated animate__infinite animate__shakeY animate__slower" src="https://admin.pixelstrap.com/govo/assets/images/svg/rocket.svg" alt="welcome-rocket-image"></div>
              </div>
            </div>
			<!--
            <div class="col-span-6 4xl:col-span-8 lg:col-span-12 lg:-order-1">
              <div class="card"> 
                <div class="card-header transaction-history"> 
                  <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                    <h3 class="text-lg font-bold text-title leading-none">Transaction History</h3>
                    <div class="custom-select select-style-1"> 
                      <select class="capitalize">
                        <option>Yearly</option>
                        <option>Monthly</option>
                        <option>Weekly</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card-body"> 
                  <div class="overflow-auto custom-scroll">
                    <table class="table"> 
                      <thead> 
                        <tr> 
                          <th>Item Name</th>
                          <th>Date And Time</th>
                          <th>Amount</th>
                          <th>invoice no.</th>
                          <th>Status</th>
                          <th>payment</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="group">
                          <td class="min-w-[11.125rem]"> 
                            <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="../../assets/images/product/1.jpg" alt="Samsung TV"><a href="product.html">
                                <h4 class="text-xs font-semibold text-title group-hover:text-primary">Samsung TV</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span></a></div>
                          </td>
                          <td class="min-w-[7.5rem]"> 
                            <div> 
                              <h4 class="text-xs font-semibold text-title">Jan 25, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span>
                            </div>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-success">$251 USD</h4>
                          </td>
                          <td class="min-w-[6.5rem]"> 
                            <h4 class="text-xs font-semibold uppercase text-title">#px0101</h4>
                          </td>
                          <td class="min-w-[4.6875rem]"> 
                            <div class="progress-bar progress-sm max-w-[3.375rem]">
                              <div class="bg-success" style="width:50%"> </div>
                            </div>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-title">Paypal</h4>
                          </td>
                        </tr>
                        <tr class="group">
                          <td class="min-w-[11.125rem]"> 
                            <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="../../assets/images/product/2.jpg" alt="Spring Bed"><a href="product.html">
                                <h4 class="text-xs font-semibold text-title group-hover:text-primary">Spring Bed</h4><span class="block mt-1 font-semibold text-2xs text-content">Bought item</span></a></div>
                          </td>
                          <td class="min-w-[7.5rem]"> 
                            <div> 
                              <h4 class="text-xs font-semibold text-title">Feb 20, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Bought item</span>
                            </div>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-danger">$350 USD</h4>
                          </td>
                          <td class="min-w-[6.5rem]"> 
                            <h4 class="text-xs font-semibold uppercase text-title">#rf304f</h4>
                          </td>
                          <td class="min-w-[4.6875rem]"> 
                            <div class="progress-bar progress-sm max-w-[3.375rem]">
                              <div class="bg-danger" style="width:70%"> </div>
                            </div>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-title">Credit Card</h4>
                          </td>
                        </tr>
                        <tr class="group">
                          <td class="min-w-[11.125rem]"> 
                            <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="../../assets/images/product/3.jpg" alt="Long Dress"><a href="product.html">
                                <h4 class="text-xs font-semibold text-title group-hover:text-primary">Long Dress</h4><span class="block mt-1 font-semibold text-2xs text-content">Bought item</span></a></div>
                          </td>
                          <td class="min-w-[7.5rem]"> 
                            <div> 
                              <h4 class="text-xs font-semibold text-title">Feb 25, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Bought item</span>
                            </div>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-success">$240 USD</h4>
                          </td>
                          <td class="min-w-[6.5rem]"> 
                            <h4 class="text-xs font-semibold uppercase text-title">#dnj480</h4>
                          </td>
                          <td class="min-w-[4.6875rem]"> 
                            <div class="progress-bar progress-sm max-w-[3.375rem]">
                              <div class="bg-success" style="width:40%"> </div>
                            </div>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-title">Paypal</h4>
                          </td>
                        </tr>
                        <tr class="group">
                          <td class="min-w-[11.125rem]"> 
                            <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="../../assets/images/product/4.jpg" alt="Phillip Lightbulb"><a href="product.html">
                                <h4 class="text-xs font-semibold text-title group-hover:text-primary">Phillip Lightbulb</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span></a></div>
                          </td>
                          <td class="min-w-[7.5rem]"> 
                            <div> 
                              <h4 class="text-xs font-semibold text-title">March 27, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span>
                            </div>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-danger">$200 USD</h4>
                          </td>
                          <td class="min-w-[6.5rem]"> 
                            <h4 class="text-xs font-semibold uppercase text-title">#g189d0</h4>
                          </td>
                          <td class="min-w-[4.6875rem]"> 
                            <div class="progress-bar progress-sm max-w-[3.375rem]">
                              <div class="bg-danger" style="width:60%"> </div>
                            </div>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-title">Credit Card</h4>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-3 4xl:col-span-4 lg:col-span-12">
              <div class="grid grid-cols-2 gap-card-gap"> 
                <div class="col-span-2 lg:col-span-1 2md:col-span-2">
                  <div class="card transition duration-500 ease-in delay-400 hover:shadow-sm hover:-translate-y-1 hover:scale-45">
                    <div class="card-body"> 
                      <div> 
                        <div class="flex items-center justify-between">
                          <div>
                            <h3 class="text-lg font-bold leading-none text-title">Revenue</h3>
                            <h4 class="flex items-center mt-[12px] text-2xl 5xl:text-lg 4xl:text-base font-extrabold text-title gap-[7px]">$4,875<span class="flex items-center gap-1 text-3xs font-semibold text-success">36.28%
                                <svg class="w-[6px] h-[6px] -rotate-180 fill-success stroke-success"> 
                                  <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Fill-Arrow"> </use>
                                </svg></span></h4>
                          </div>
                          <div class="avatar-group -space-x-6 justify-center">
                            <div class="avatar w-12 h-12 5xl:w-11 5xl:h-11 border-[2px] border-white dark:border-border-dark hover:translate-y-[-5px] hover:transition-all hover:ease translate-y-0">
                              <div class="h-12"><img src="../../assets/images/avatar/9.jpg" alt="avatar"/></div>
                            </div>
                            <div class="avatar w-12 h-12 5xl:w-11 5xl:h-11 border-[2px] border-white dark:border-border-dark hover:translate-y-[-5px] hover:transition-all hover:ease translate-y-0">
                              <div class="h-12"><img src="../../assets/images/avatar/12.jpg" alt="avatar"/></div>
                            </div>
                            <div class="avatar placeholder w-12 h-12 5xl:w-11 5xl:h-11 border-[2px] bg-gray-light dark:bg-sidebar-dark2 border-white dark:border-border-dark hover:translate-y-[-5px] hover:transition-all hover:ease translate-y-0">
                              <div><span class="text-xs font-bold text-title">26+</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-[17px]" id="revenueChart"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-2 lg:col-span-1 2md:col-span-2">
                  <div class="card transition duration-500 ease-in delay-400 hover:shadow-sm hover:-translate-y-1 hover:scale-45">
                    <div class="card-header">
                      <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                        <h3 class="text-lg font-bold text-title leading-none">Earnings</h3>
                        <div class="dropdown on-hover-show">
                          <button class="flex rounded-full items-center justify-center p-[5px] bg-gray-light dark:bg-sidebar-dark2"> 
                            <svg class="w-[18px] h-[18px] stroke-title"> 
                              <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Setting"> </use>
                            </svg>
                          </button>
                          <div class="dropdown-menu">
                            <ul>
                              <li><a href="javascript:void(0)">Yearly</a></li>
                              <li><a href="javascript:void(0)">Monthly</a></li>
                              <li><a href="javascript:void(0)">Weekly</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body"> 
                      <div class="relative"> 
                        <div class="flex items-center justify-between">
                          <div class="flex-[0_1_50%]">
                            <div> 
                              <h4 class="flex items-center text-2xl  5xl:text-lg 4xl:text-base font-extrabold text-title gap-[7px]">$4,875</h4><span class="font-semibold text-4xs text-content">Total Expense</span>
                            </div>
                            <p class="line-clamp-3 3sm:line-clamp-2 mt-[18px] font-normal text-xs text-title">Profit is grow 45% more than last Month continue increasing</p>
                          </div>
                          <div id="earningChart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-6 4xl:col-span-8 lg:col-span-12 lg:-order-1">
              <div class="card">  
                <div class="card-header">
                  <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                    <h3 class="text-lg font-bold text-title leading-none">User Information</h3>
                    <div class="dropdown on-hover-show">
                      <button class="flex rounded-full items-center justify-center p-[5px] bg-gray-light dark:bg-sidebar-dark2"> 
                        <svg class="w-[18px] h-[18px] stroke-title"> 
                          <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Setting"> </use>
                        </svg>
                      </button>
                      <div class="dropdown-menu">
                        <ul>
                          <li><a href="javascript:void(0)">Completed</a></li>
                          <li><a href="javascript:void(0)">Pending</a></li>
                          <li><a href="javascript:void(0)">1 Day Ago</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body"> 
                  <div class="overflow-auto custom-scroll"> 
                    <table class="table"> 
                      <thead> 
                        <tr> 
                          <th>Name</th>
                          <th>Email Address</th>
                          <th>Status</th>
                          <th>Role</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="user-info">
                        <tr class="user-item group">
                          <td class="min-w-[210px]"> 
                            <div class="flex items-center gap-2">
                              <label class="checkbox w-[15px] h-[15px]">
                                <input type="checkbox"><span class="checkbox-indicator"><i data-feather="check"></i></span>
                              </label>
                              <div class="flex items-center gap-[9px]"><img class="sm:w-[40px] sm:h-[40px] 5xl:w-[43px] 5xl:h-[43px] w-[45px] h-[45px] rounded-full object-cover" src="../../assets/images/avatar/1.jpg" alt="Dmitriy Groshev"><a href="user-profile.html">
                                  <h4 class="text-xs font-semibold text-title group-hover:text-primary">Dmitriy Groshev</h4><span class="block mt-1 font-semibold text-2xs text-content">United Kingdom</span></a></div>
                            </div>
                          </td>
                          <td class="min-w-[120px]">
                            <div> <a class="text-xs font-semibold text-title" href="mail:tohello123@dribbble.com">hello123@dribbble.com</a></div>
                          </td>
                          <td class="min-w-[75px]"> 
                            <h4 class="text-xs font-semibold text-success">Invited</h4>
                          </td>
                          <td class="min-w-[140px]"> 
                            <h4 class="text-xs font-semibold text-title">Interface Designer</h4>
                          </td>
                          <td class="min-w-[50px] text-right"> 
                            <div class="dropdown on-hover-show inline-flex justify-end ">
                              <button class="group"> 
                                <svg class="w-[18px] h-[18px] stroke-title"> 
                                  <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Dote-h"> </use>
                                </svg>
                              </button>
                              <div class="dropdown-menu !right-0 !left-unset ">
                                <ul>
                                  <li class="group"> <a href="edit-profile.html">
                                      <svg class="group-hover:stroke-primary w-[18px] h-[18px] stroke-title"> 
                                        <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Edit-Square"> </use>
                                      </svg></a></li>
                                  <li class="group"> <a href="javascript:void(0)">
                                      <svg class="group-hover:stroke-primary remove-user w-[18px] h-[18px] stroke-title"> 
                                        <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Delete"> </use>
                                      </svg></a></li>
                                </ul>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="user-item group">
                          <td class="min-w-[210px]"> 
                            <div class="flex items-center gap-2">
                              <label class="checkbox w-[15px] h-[15px]">
                                <input type="checkbox" checked><span class="checkbox-indicator"><i data-feather="check"></i></span>
                              </label>
                              <div class="flex items-center gap-[9px]"><img class="sm:w-[40px] sm:h-[40px] 5xl:w-[43px] 5xl:h-[43px] w-[45px] h-[45px] rounded-full object-cover" src="../../assets/images/avatar/2.jpg" alt="Patrick Beverley"><a href="user-profile.html">
                                  <h4 class="text-xs font-semibold text-title group-hover:text-primary">Patrick Beverley</h4><span class="block mt-1 font-semibold text-2xs text-content">Australia</span></a></div>
                            </div>
                          </td>
                          <td class="min-w-[120px]">
                            <div> <a class="text-xs font-semibold text-title" href="mail:tobeverley.lac@gmail.com">beverley.lac@gmail.com</a></div>
                          </td>
                          <td class="min-w-[75px]"> 
                            <h4 class="text-xs font-semibold text-danger">Active</h4>
                          </td>
                          <td class="min-w-[140px]"> 
                            <h4 class="text-xs font-semibold text-title">Interface Designer</h4>
                          </td>
                          <td class="min-w-[50px] text-right"> 
                            <div class="dropdown on-hover-show inline-flex justify-end ">
                              <button class="group"> 
                                <svg class="w-[18px] h-[18px] stroke-title"> 
                                  <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Dote-h"> </use>
                                </svg>
                              </button>
                              <div class="dropdown-menu !right-0 !left-unset ">
                                <ul>
                                  <li class="group"> <a href="edit-profile.html">
                                      <svg class="group-hover:stroke-primary w-[18px] h-[18px] stroke-title"> 
                                        <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Edit-Square"> </use>
                                      </svg></a></li>
                                  <li class="group"> <a href="javascript:void(0)">
                                      <svg class="group-hover:stroke-primary remove-user w-[18px] h-[18px] stroke-title"> 
                                        <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Delete"> </use>
                                      </svg></a></li>
                                </ul>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="user-item group">
                          <td class="min-w-[210px]"> 
                            <div class="flex items-center gap-2">
                              <label class="checkbox w-[15px] h-[15px]">
                                <input type="checkbox"><span class="checkbox-indicator"><i data-feather="check"></i></span>
                              </label>
                              <div class="flex items-center gap-[9px]"><img class="sm:w-[40px] sm:h-[40px] 5xl:w-[43px] 5xl:h-[43px] w-[45px] h-[45px] rounded-full object-cover" src="../../assets/images/avatar/3.jpg" alt="Kevin Greem"><a href="user-profile.html">
                                  <h4 class="text-xs font-semibold text-title group-hover:text-primary">Kevin Greem</h4><span class="block mt-1 font-semibold text-2xs text-content">United Kingdom</span></a></div>
                            </div>
                          </td>
                          <td class="min-w-[120px]">
                            <div> <a class="text-xs font-semibold text-title" href="mail:togreen4502@gmail.com">green4502@gmail.com</a></div>
                          </td>
                          <td class="min-w-[75px]"> 
                            <h4 class="text-xs font-semibold text-success">Invited</h4>
                          </td>
                          <td class="min-w-[140px]"> 
                            <h4 class="text-xs font-semibold text-title">Project Manager</h4>
                          </td>
                          <td class="min-w-[50px] text-right"> 
                            <div class="dropdown on-hover-show inline-flex justify-end ">
                              <button class="group"> 
                                <svg class="w-[18px] h-[18px] stroke-title"> 
                                  <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Dote-h"> </use>
                                </svg>
                              </button>
                              <div class="dropdown-menu !right-0 !left-unset ">
                                <ul>
                                  <li class="group"> <a href="edit-profile.html">
                                      <svg class="group-hover:stroke-primary w-[18px] h-[18px] stroke-title"> 
                                        <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Edit-Square"> </use>
                                      </svg></a></li>
                                  <li class="group"> <a href="javascript:void(0)">
                                      <svg class="group-hover:stroke-primary remove-user w-[18px] h-[18px] stroke-title"> 
                                        <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Delete"> </use>
                                      </svg></a></li>
                                </ul>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="user-item group">
                          <td class="min-w-[210px]"> 
                            <div class="flex items-center gap-2">
                              <label class="checkbox w-[15px] h-[15px]">
                                <input type="checkbox"><span class="checkbox-indicator"><i data-feather="check"></i></span>
                              </label>
                              <div class="flex items-center gap-[9px]"><img class="sm:w-[40px] sm:h-[40px] 5xl:w-[43px] 5xl:h-[43px] w-[45px] h-[45px] rounded-full object-cover" src="../../assets/images/avatar/4.jpg" alt="William Barton"><a href="user-profile.html">
                                  <h4 class="text-xs font-semibold text-title group-hover:text-primary">William Barton</h4><span class="block mt-1 font-semibold text-2xs text-content">Netherlands</span></a></div>
                            </div>
                          </td>
                          <td class="min-w-[120px]">
                            <div> <a class="text-xs font-semibold text-title" href="mail:tobarton-will@gmail.com">barton-will@gmail.com</a></div>
                          </td>
                          <td class="min-w-[75px]"> 
                            <h4 class="text-xs font-semibold text-danger">Active</h4>
                          </td>
                          <td class="min-w-[140px]"> 
                            <h4 class="text-xs font-semibold text-title">Backend Engineer</h4>
                          </td>
                          <td class="min-w-[50px] text-right"> 
                            <div class="dropdown on-hover-show inline-flex justify-end top-open">
                              <button class="group"> 
                                <svg class="w-[18px] h-[18px] stroke-title"> 
                                  <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Dote-h"> </use>
                                </svg>
                              </button>
                              <div class="dropdown-menu !right-0 !left-unset ">
                                <ul>
                                  <li class="group"> <a href="edit-profile.html">
                                      <svg class="group-hover:stroke-primary w-[18px] h-[18px] stroke-title"> 
                                        <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Edit-Square"> </use>
                                      </svg></a></li>
                                  <li class="group"> <a href="javascript:void(0)">
                                      <svg class="group-hover:stroke-primary remove-user w-[18px] h-[18px] stroke-title"> 
                                        <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Delete"> </use>
                                      </svg></a></li>
                                </ul>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-3 4xl:col-span-4 lg:col-span-12"> 
              <div class="grid grid-cols-2 gap-card-gap">
                <div class="col-span-2 lg:col-span-1 2md:col-span-2">
                  <div class="card transition duration-500 ease-in delay-400 hover:shadow-sm hover:-translate-y-1 hover:scale-45">
                    <div class="card-header">
                      <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                        <h3 class="text-lg font-bold text-title leading-none">Inventory Cost</h3>
                        <div class="dropdown on-hover-show">
                          <button class="flex rounded-full items-center justify-center p-[5px] bg-gray-light dark:bg-sidebar-dark2"> 
                            <svg class="w-[18px] h-[18px] stroke-title"> 
                              <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Setting"> </use>
                            </svg>
                          </button>
                          <div class="dropdown-menu">
                            <ul>
                              <li><a href="javascript:void(0)">Yearly</a></li>
                              <li><a href="javascript:void(0)">Monthly</a></li>
                              <li><a href="javascript:void(0)">Weekly</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body"> 
                      <ul> 
                        <li class="py-[7px] px-[10px] bg-gray-light mt-[9px] first:mt-0 group dark:bg-sidebar-dark2"><a class="flex items-center justify-between" href="javascript:void(0)">
                            <div class="flex items-center gap-2"> <img class="w-10 h-10 scale-100 rounded-full group-hover:scale-105" src="../../assets/images/product/product-list/1.jpg" alt="Inventory Cost"/>
                              <div>
                                <h3 class="text-xs font-semibold text-title line-clamp-1">Inventory Cost</h3>
                                <h4 class="font-semibold text-2xs text-content line-clamp-1">It explains the ins and outs.</h4>
                              </div>
                            </div><span class="text-sm font-bold text-title">$2,400</span></a></li>
                        <li class="py-[7px] px-[10px] bg-gray-light mt-[9px] first:mt-0 group dark:bg-sidebar-dark2"><a class="flex items-center justify-between" href="javascript:void(0)">
                            <div class="flex items-center gap-2"> <img class="w-10 h-10 scale-100 rounded-full group-hover:scale-105" src="../../assets/images/product/product-list/2.jpg" alt="Eternal Cost"/>
                              <div>
                                <h3 class="text-xs font-semibold text-title line-clamp-1">Eternal Cost</h3>
                                <h4 class="font-semibold text-2xs text-content line-clamp-1">It explains the ins and outs.</h4>
                              </div>
                            </div><span class="text-sm font-bold text-title">$4,700</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-span-2 lg:col-span-1 2md:col-span-2">
                  <div class="card transition duration-500 ease-in delay-400 hover:shadow-sm hover:-translate-y-1 hover:scale-45">
                    <div class="card-header">
                      <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                        <h3 class="text-lg font-bold text-title leading-none">Advertising</h3>
                        <div class="dropdown on-hover-show">
                          <button class="flex rounded-full items-center justify-center p-[5px] bg-gray-light dark:bg-sidebar-dark2"> 
                            <svg class="w-[18px] h-[18px] stroke-title"> 
                              <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Setting"> </use>
                            </svg>
                          </button>
                          <div class="dropdown-menu">
                            <ul>
                              <li><a href="javascript:void(0)">Yearly</a></li>
                              <li><a href="javascript:void(0)">Monthly</a></li>
                              <li><a href="javascript:void(0)">Weekly</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul> 
                        <li class="py-[7px] px-[10px] bg-gray-light mt-[9px] first:mt-0 group dark:bg-sidebar-dark2"><a class="flex items-center justify-between" href="javascript:void(0)">
                            <div class="flex items-center gap-2"> <img class="w-10 h-10 scale-100 rounded-full group-hover:scale-105" src="../../assets/images/product/product-list/3.jpg" alt="Linkedin"/>
                              <div>
                                <h3 class="text-xs font-semibold text-title line-clamp-1">Linkedin</h3>
                                <h4 class="font-semibold text-2xs text-content line-clamp-1">It explains the ins and outs.</h4>
                              </div>
                            </div><span class="text-sm font-bold text-title">$3,460</span></a></li>
                        <li class="py-[7px] px-[10px] bg-gray-light mt-[9px] first:mt-0 group dark:bg-sidebar-dark2"><a class="flex items-center justify-between" href="javascript:void(0)">
                            <div class="flex items-center gap-2"> <img class="w-10 h-10 scale-100 rounded-full group-hover:scale-105" src="../../assets/images/product/product-list/4.jpg" alt="Facebook"/>
                              <div>
                                <h3 class="text-xs font-semibold text-title line-clamp-1">Facebook</h3>
                                <h4 class="font-semibold text-2xs text-content line-clamp-1">It explains the ins and outs.</h4>
                              </div>
                            </div><span class="text-sm font-bold text-title">$1,230</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-3 4xl:col-span-4 lg:col-span-6 lg:-order-1 2md:col-span-12">
              <div class="card">
                <div class="card-header">
                  <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                    <h3 class="text-lg font-bold text-title leading-none">Audit log</h3>
                    <div class="dropdown on-hover-show">
                      <button class="flex rounded-full items-center justify-center p-[5px] bg-gray-light dark:bg-sidebar-dark2"> 
                        <svg class="w-[18px] h-[18px] stroke-title"> 
                          <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Setting"> </use>
                        </svg>
                      </button>
                      <div class="dropdown-menu">
                        <ul>
                          <li><a href="javascript:void(0)">Yearly</a></li>
                          <li><a href="javascript:void(0)">Monthly</a></li>
                          <li><a href="javascript:void(0)">Weekly</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul> 
                    <li class="flex gap-3 group items-center justify-between relative first:mt-0 5xl:mt-[37px] lg:mt-[32px] mt-[38px] after:w-[3px] lg:after:h-[17px] after:h-[25px] after:absolute after:left-[17px] rtl:after:left-unset rtl:after:right-[17px] after:-bottom-[7px] after:bg-border-light after:translate-y-full last:after:hidden">
                      <div class="flex items-center gap-2">
                        <div class="flex items-center justify-center rounded-full p-2 group-hover:scale-105 scale-100 bg-success"><span class="sm:w-[18px] sm:h-[18px] w-[22px] h-[22px] flex items-center  rounded-full justify-center bg-white"><i class="w-[14px] h-[14px] stroke-success stroke-[4]" data-feather="check"> </i></span></div>
                        <div> 
                          <h3 class="text-xs font-semibold text-title line-clamp-1">Route P204_salesfores created</h3>
                          <h4 class="font-semibold text-2xs text-content line-clamp-1">Andre Sluczka</h4>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">2hr ago</span>
                    </li>
                    <li class="flex gap-3 group items-center justify-between relative first:mt-0 5xl:mt-[37px] lg:mt-[32px] mt-[38px] after:w-[3px] lg:after:h-[17px] after:h-[25px] after:absolute after:left-[17px] rtl:after:left-unset rtl:after:right-[17px] after:-bottom-[7px] after:bg-border-light after:translate-y-full last:after:hidden">
                      <div class="flex items-center gap-2">
                        <div class="flex items-center justify-center rounded-full p-2 group-hover:scale-105 scale-100 bg-warning"><span class="sm:w-[18px] sm:h-[18px] w-[22px] h-[22px] flex items-center  rounded-full justify-center bg-white"><i class="w-[14px] h-[14px] stroke-warning stroke-[4]" data-feather="alert-circle"> </i></span></div>
                        <div> 
                          <h3 class="text-xs font-semibold text-title line-clamp-1">R304_salesforece undeployed</h3>
                          <h4 class="font-semibold text-2xs text-content line-clamp-1">Fabian Beliza</h4>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">4hr ago</span>
                    </li>
                    <li class="flex gap-3 group items-center justify-between relative first:mt-0 5xl:mt-[37px] lg:mt-[32px] mt-[38px] after:w-[3px] lg:after:h-[17px] after:h-[25px] after:absolute after:left-[17px] rtl:after:left-unset rtl:after:right-[17px] after:-bottom-[7px] after:bg-border-light after:translate-y-full last:after:hidden">
                      <div class="flex items-center gap-2">
                        <div class="flex items-center justify-center rounded-full p-2 group-hover:scale-105 scale-100 bg-danger"><span class="sm:w-[18px] sm:h-[18px] w-[22px] h-[22px] flex items-center  rounded-full justify-center bg-white"><i class="w-[14px] h-[14px] stroke-danger stroke-[4]" data-feather="x"> </i></span></div>
                        <div> 
                          <h3 class="text-xs font-semibold text-title line-clamp-1">R304_salesforece failed</h3>
                          <h4 class="font-semibold text-2xs text-content line-clamp-1">Michael Ganatra</h4>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">10 Jun</span>
                    </li>
                    <li class="flex gap-3 group items-center justify-between relative first:mt-0 5xl:mt-[37px] lg:mt-[32px] mt-[38px] after:w-[3px] lg:after:h-[17px] after:h-[25px] after:absolute after:left-[17px] rtl:after:left-unset rtl:after:right-[17px] after:-bottom-[7px] after:bg-border-light after:translate-y-full last:after:hidden">
                      <div class="flex items-center gap-2">
                        <div class="flex items-center justify-center rounded-full p-2 group-hover:scale-105 scale-100 bg-success"><span class="sm:w-[18px] sm:h-[18px] w-[22px] h-[22px] flex items-center  rounded-full justify-center bg-white"><i class="w-[14px] h-[14px] stroke-success stroke-[4]" data-feather="check"> </i></span></div>
                        <div> 
                          <h3 class="text-xs font-semibold text-title line-clamp-1">New environment DEV created</h3>
                          <h4 class="font-semibold text-2xs text-content line-clamp-1">Wade Warren</h4>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">22 Oct</span>
                    </li>
                    <li class="flex gap-3 group items-center justify-between relative first:mt-0 5xl:mt-[37px] lg:mt-[32px] mt-[38px] after:w-[3px] lg:after:h-[17px] after:h-[25px] after:absolute after:left-[17px] rtl:after:left-unset rtl:after:right-[17px] after:-bottom-[7px] after:bg-border-light after:translate-y-full last:after:hidden">
                      <div class="flex items-center gap-2">
                        <div class="flex items-center justify-center rounded-full p-2 group-hover:scale-105 scale-100 bg-success"><span class="sm:w-[18px] sm:h-[18px] w-[22px] h-[22px] flex items-center  rounded-full justify-center bg-white"><i class="w-[14px] h-[14px] stroke-success stroke-[4]" data-feather="check"> </i></span></div>
                        <div> 
                          <h3 class="text-xs font-semibold text-title line-clamp-1">Project salesforce created</h3>
                          <h4 class="font-semibold text-2xs text-content line-clamp-1">Bessie Cooper</h4>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">10 July</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-span-3 4xl:col-span-4 lg:-order-2 lg:col-span-7 2lg:col-span-6 2md:col-span-12">
              <div class="card"> 
                <div class="card-header">
                  <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                    <h3 class="text-lg font-bold text-title leading-none">News &amp; Update</h3>
                  </div>
                </div>
                <div class="card-body">  
                  <ul> 
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="rounded-5 overflow-hidden w-[60px] 5xl:w-[59px] lg:w-[51px] 2sm:w-[48px]"><img class="w-full h-auto object-cover" src="../../assets/images/news/1.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="blog-grid.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Google project apply review</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">Today’s news headlines..</span>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">2hr ago</span>
                    </li>
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="rounded-5 overflow-hidden w-[60px] 5xl:w-[59px] lg:w-[51px] 2sm:w-[48px]"><img class="w-full h-auto object-cover" src="../../assets/images/news/2.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="blog-grid.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Business logo create</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">check out the latest...</span>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">4hr ago</span>
                    </li>
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="rounded-5 overflow-hidden w-[60px] 5xl:w-[59px] lg:w-[51px] 2sm:w-[48px]"><img class="w-full h-auto object-cover" src="../../assets/images/news/3.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="blog-grid.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Business project research</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">News in english: get...</span>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">10 Jun</span>
                    </li>
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="rounded-5 overflow-hidden w-[60px] 5xl:w-[59px] lg:w-[51px] 2sm:w-[48px]"><img class="w-full h-auto object-cover" src="../../assets/images/news/4.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="blog-grid.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Recruitment in it Department</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">Technology and...</span>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">22 Jun</span>
                    </li>
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="rounded-5 overflow-hidden w-[60px] 5xl:w-[59px] lg:w-[51px] 2sm:w-[48px]"><img class="w-full h-auto object-cover" src="../../assets/images/news/5.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="blog-grid.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Business project research</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">Contributions private...</span>
                        </div>
                      </div><span class="min-w-fit badge bg-gray-light text-3xs text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">10 July</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-span-9 4xl:col-span-8 lg:col-span-12">
              <div class="card"> 
                <div class="card-header">
                  <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                    <h3 class="text-lg font-bold text-title leading-none">Users Positions</h3>
                    <div class="flex">
                      <button class="py-2 px-3 text-3xs font-semibold rounded-none text-title bg-gray-light dark:bg-sidebar-dark2 dark:border-border-dark  active:bg-primary active:text-white  dark:hover:bg-primary  dark:focus:bg-primary focus:text-white focus:bg-primary ">Yearly</button>
                      <button class="py-2 px-3 text-3xs font-semibold rounded-none text-title bg-gray-light dark:bg-sidebar-dark2 dark:border-border-dark  active:bg-primary active:text-white  dark:hover:bg-primary  dark:focus:bg-primary focus:text-white focus:bg-primary ">Monthly</button>
                      <button class="py-2 px-3 text-3xs font-semibold rounded-none text-white bg-primary active:bg-primary active:text-white  dark:hover:bg-primary  dark:focus:bg-primary focus:text-white focus:bg-primary ">Weekly</button>
                    </div>
                  </div>
                </div>
                <div class="card-body"> 
                  <div class="grid grid-cols-12">  
                    <div class="col-span-2 xl:col-span-3 2md:col-span-12"> 
                      <ul class="flex flex-col gap-[14px] 2md:gap-[8px] 2md:flex-row 2md:flex-wrap">
                        <li>
                          <button class="flex items-center gap-2 justify-start w-full text-xs font-semibold 2md:py-[7px] 2md:px-[7px] py-[9px] px-4 bg-gray-light dark:bg-sidebar-dark2"><span class="w-[10px] bg-primary h-[10px] rounded-[2px]"></span><span class="text-xs font-semibold text-left line-clamp-1 ">Rephrase Words</span></button>
                        </li>
                        <li>
                          <button class="flex items-center gap-2 justify-start w-full text-xs font-semibold 2md:py-[7px] 2md:px-[7px] py-[9px] px-4 bg-gray-light dark:bg-sidebar-dark2"><span class="w-[10px] bg-danger h-[10px] rounded-[2px]"></span><span class="text-xs font-semibold text-left line-clamp-1 ">Presentation</span></button>
                        </li>
                        <li>
                          <button class="flex items-center gap-2 justify-start w-full text-xs font-semibold 2md:py-[7px] 2md:px-[7px] py-[9px] px-4 bg-gray-light dark:bg-sidebar-dark2"><span class="w-[10px] bg-title h-[10px] rounded-[2px]"></span><span class="text-xs font-semibold text-left line-clamp-1 ">Fill the Gap</span></button>
                        </li>
                        <li>
                          <button class="flex items-center gap-2 justify-start w-full text-xs font-semibold 2md:py-[7px] 2md:px-[7px] py-[9px] px-4 bg-gray-light dark:bg-sidebar-dark2"><span class="w-[10px] bg-warning h-[10px] rounded-[2px]"></span><span class="text-xs font-semibold text-left line-clamp-1 ">Drag and Drop</span></button>
                        </li>
                        <li>
                          <button class="flex items-center gap-2 justify-start w-full text-xs font-semibold 2md:py-[7px] 2md:px-[7px] py-[9px] px-4 bg-gray-light dark:bg-sidebar-dark2"><span class="w-[10px] bg-primary h-[10px] rounded-[2px]"></span><span class="text-xs font-semibold text-left line-clamp-1 ">Quizz</span></button>
                        </li>
                        <li>
                          <button class="flex items-center gap-2 justify-start w-full text-xs font-semibold 2md:py-[7px] 2md:px-[7px] py-[9px] px-4 bg-gray-light dark:bg-sidebar-dark2"><span class="w-[10px] bg-danger h-[10px] rounded-[2px]"></span><span class="text-xs font-semibold text-left line-clamp-1 ">Introduction</span></button>
                        </li>
                      </ul>
                    </div>
                    <div class="col-span-10 xl:col-span-9 2md:col-span-12"> 
                      <div class="custom-data-label apex-custom-text 2md:-mt-[12px] ml-[-40px] 2md:ml-0" id="userPosition"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-3 4xl:col-span-4 lg:col-span-12"> 
              <div class="card"> 
                <div class="card-header"> 
                  <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                    <h3 class="text-lg font-bold text-title leading-none">Sell Overview</h3>
                    <div class="dropdown on-hover-show">
                      <button class="flex rounded-full items-center justify-center p-[5px] bg-gray-light dark:bg-sidebar-dark2"> 
                        <svg class="w-[18px] h-[18px] stroke-title"> 
                          <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Setting"> </use>
                        </svg>
                      </button>
                      <div class="dropdown-menu">
                        <ul>
                          <li><a href="javascript:void(0)">Yearly</a></li>
                          <li><a href="javascript:void(0)">Monthly</a></li>
                          <li><a href="javascript:void(0)">Weekly</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="apex-custom-tooltip apex-tooltip-style1 mb-[-15px]" id="SellOverview"></div>
                </div>
              </div>
            </div>
            <div class="col-span-6 4xl:col-span-8 lg:col-span-12">
              <div class="card"> 
                <div class="card-header">
                  <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                    <h3 class="text-lg font-bold text-title leading-none">Open Invoices</h3>
                    <div class="dropdown on-hover-show">
                      <button class="flex rounded-full items-center justify-center p-[5px] bg-gray-light dark:bg-sidebar-dark2"> 
                        <svg class="w-[18px] h-[18px] stroke-title"> 
                          <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Setting"> </use>
                        </svg>
                      </button>
                      <div class="dropdown-menu">
                        <ul>
                          <li><a href="javascript:void(0)">Yearly</a></li>
                          <li><a href="javascript:void(0)">Monthly</a></li>
                          <li><a href="javascript:void(0)">Weekly</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body"> 
                  <div class="overflow-auto custom-scroll">
                    <table class="table equal-space">
                      <thead> 
                        <tr> 
                          <th>Name</th>
                          <th>Date</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="group">
                          <td class="min-w-[11.125rem]"> <a class="flex items-center gap-[.5625rem]" href="invoice.html"><img class="2sm:w-[2.375rem] 2sm:h-[2.375rem] w-10 h-10 rounded-full object-cover " src="../../assets/images/avatar/1.jpg" alt="Andy Groshev">
                              <div>
                                <h4 class="text-xs font-semibold text-title group-hover:text-primary">Andy Groshev</h4>
                              </div></a></td>
                          <td class="min-w-[7.5rem]"> 
                            <h4 class="text-xs font-semibold text-content group-hover:text-primary">25 Jan 2023</h4>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">$2.588.00</h4>
                          </td>
                          <td class="min-w-[5.3125rem]"> 
                            <h4 class="text-xs font-semibold capitalize text-success">Paid</h4>
                          </td>
                          <td class="min-w-[6.25rem] max-w-[6.25rem]"> 
                            <div class="custom-select select-style-1">
                              <select>
                                <option value="">Copy</option>
                                <option value="">Before Due</option>
                                <option value="">Past Due</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                        <tr class="group">
                          <td class="min-w-[11.125rem]"> <a class="flex items-center gap-[.5625rem]" href="invoice.html"><img class="2sm:w-[2.375rem] 2sm:h-[2.375rem] w-10 h-10 rounded-full object-cover " src="../../assets/images/avatar/2.jpg" alt="Patrick Press">
                              <div>
                                <h4 class="text-xs font-semibold text-title group-hover:text-primary">Patrick Press</h4>
                              </div></a></td>
                          <td class="min-w-[7.5rem]"> 
                            <h4 class="text-xs font-semibold text-content group-hover:text-primary">20 Feb 2023</h4>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">$4.800.00</h4>
                          </td>
                          <td class="min-w-[5.3125rem]"> 
                            <h4 class="text-xs font-semibold capitalize text-danger">Past Due</h4>
                          </td>
                          <td class="min-w-[6.25rem] max-w-[6.25rem]"> 
                            <div class="custom-select select-style-1">
                              <select>
                                <option value="">Copy</option>
                                <option value="">Before Due</option>
                                <option value="">Past Due</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                        <tr class="group">
                          <td class="min-w-[11.125rem]"> <a class="flex items-center gap-[.5625rem]" href="invoice.html"><img class="2sm:w-[2.375rem] 2sm:h-[2.375rem] w-10 h-10 rounded-full object-cover " src="../../assets/images/avatar/3.jpg" alt="Kevin Greem">
                              <div>
                                <h4 class="text-xs font-semibold text-title group-hover:text-primary">Kevin Greem</h4>
                              </div></a></td>
                          <td class="min-w-[7.5rem]"> 
                            <h4 class="text-xs font-semibold text-content group-hover:text-primary">26 Feb 2023</h4>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">$4.678.00</h4>
                          </td>
                          <td class="min-w-[5.3125rem]"> 
                            <h4 class="text-xs font-semibold capitalize text-success">Paid</h4>
                          </td>
                          <td class="min-w-[6.25rem] max-w-[6.25rem]"> 
                            <div class="custom-select select-style-1">
                              <select>
                                <option value="">Copy</option>
                                <option value="">Before Due</option>
                                <option value="">Past Due</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                        <tr class="group">
                          <td class="min-w-[11.125rem]"> <a class="flex items-center gap-[.5625rem]" href="invoice.html"><img class="2sm:w-[2.375rem] 2sm:h-[2.375rem] w-10 h-10 rounded-full object-cover " src="../../assets/images/avatar/4.jpg" alt="Arocca Barton">
                              <div>
                                <h4 class="text-xs font-semibold text-title group-hover:text-primary">Arocca Barton</h4>
                              </div></a></td>
                          <td class="min-w-[7.5rem]"> 
                            <h4 class="text-xs font-semibold text-content group-hover:text-primary">10 March 2023</h4>
                          </td>
                          <td class="min-w-[6.25rem]"> 
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">$2.450.00</h4>
                          </td>
                          <td class="min-w-[5.3125rem]"> 
                            <h4 class="text-xs font-semibold capitalize text-title">Private</h4>
                          </td>
                          <td class="min-w-[6.25rem] max-w-[6.25rem]"> 
                            <div class="custom-select select-style-1">
                              <select>
                                <option value="">Copy</option>
                                <option value="">Before Due</option>
                                <option value="">Past Due</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-3 4xl:col-span-4 lg:col-span-6 lg:-order-1 2md:col-span-12">
              <div class="card"> 
                <div class="card-header"> 
                  <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                    <h3 class="text-lg font-bold text-title leading-none">Notification</h3>
                    <div class="dropdown on-hover-show">
                      <button class="flex rounded-full items-center justify-center p-[5px] bg-gray-light dark:bg-sidebar-dark2"> 
                        <svg class="w-[18px] h-[18px] stroke-title"> 
                          <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Setting"> </use>
                        </svg>
                      </button>
                      <div class="dropdown-menu">
                        <ul>
                          <li><a href="javascript:void(0)">Yearly</a></li>
                          <li><a href="javascript:void(0)">Monthly</a></li>
                          <li><a href="javascript:void(0)">Weekly</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body"> 
                  <ul>
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="overflow-hidden rounded-full object-cover sm:min-w-[38px]"><img class="object-cover w-10 h-10 min-w-10" src="../../assets/images/avatar/12.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="email.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Dmitriy Groshev</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">Cody fisher create task on ERP management system</span>
                        </div>
                      </div><span class="min-w-fit badge text-3xs bg-gray-light text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">2hr ago</span>
                    </li>
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="overflow-hidden rounded-full object-cover sm:min-w-[38px]"><img class="object-cover w-10 h-10 min-w-10" src="../../assets/images/avatar/13.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="email.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Kristin watson</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">Kristin watson payment gateway needed on sellmokam</span>
                        </div>
                      </div><span class="min-w-fit badge text-3xs bg-gray-light text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">4hr ago</span>
                    </li>
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="overflow-hidden rounded-full object-cover sm:min-w-[38px]"><img class="object-cover w-10 h-10 min-w-10" src="../../assets/images/avatar/14.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="email.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Janis Evans</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">Jacob jones generate invoice on E-Commerce</span>
                        </div>
                      </div><span class="min-w-fit badge text-3xs bg-gray-light text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">10 Jun</span>
                    </li>
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="overflow-hidden rounded-full object-cover sm:min-w-[38px]"><img class="object-cover w-10 h-10 min-w-10" src="../../assets/images/avatar/15.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="email.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Mukrani Pabelo</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">Esther howard sent new logo on burger bro</span>
                        </div>
                      </div><span class="min-w-fit badge text-3xs bg-gray-light text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">22 Jun</span>
                    </li>
                    <li class="group flex items-center group justify-between gap-3 first:pt-0 last:pb-0 first:border-none py-[13px] border-t border-border-light dark:border-border-dark dark:border-t"> 
                      <div class="flex items-center gap-[10px] flex-[1_1_0]">
                        <div class="overflow-hidden rounded-full object-cover sm:min-w-[38px]"><img class="object-cover w-10 h-10 min-w-10" src="../../assets/images/avatar/16.jpg" alt="event"/></div>
                        <div class="flex-1"> <a href="email.html">
                            <h4 class="transition-all text-xs font-semibold text-title line-clamp-1 group-hover:text-primary">Josephin Water</h4></a><span class="text-2xs font-semibold text-content line-clamp-1 mt-[4px]">Esther howard comment on QHI Media Project</span>
                        </div>
                      </div><span class="min-w-fit badge text-3xs bg-gray-light text-title py-[7px] px-[13px] dark:bg-sidebar-dark2">10 July</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>
        </div>
 
</x-app-layout>
