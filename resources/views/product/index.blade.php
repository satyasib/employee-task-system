<x-app-layout>
  
<div class="page-body">
         
		 
		 <div class="grid grid-cols-12 gap-4 add-product card">
            <div class="col-span-12 md:col-span-12">
              <div> 
                <h5 class="text-title font-semibold mb-3">Create Product </h5>
                <form class="flex flex-col gap-4 m-0 sm:gap-3 theme-form">
               
         
                 
                  <div class="grid grid-cols-12 gap-5 sm:gap-3"> 
				  
				   <div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="pname">Product Name</label>
                      <input type="text" id="pname" value="name" required="">

                    </div>
					 <div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="pslug">Product Slug</label>
                      <input type="text" id="pslug" value="slug" required="">

                    </div>
					 <div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="psku">Product Sku</label>
                      <input type="text" id="psku" value="sku" required="">

                    </div>
				  
				  
				  	<div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="catslug">Category</label>
                      <select class="form-select block w-full px-3 text-xs font-normal text-content3 bg-white bg-clip-padding bg-no-repeat border border-border-light rounded-5 transition ease-in-out m-0 min-w-[150px] py-[9px] dark:border-border-dark dark:bg-sidebar-dark2" id="tax" aria-label="Default select example">
                        <option selected="">Choose Category</option>
                        <option value="1">2% </option>
                        <option value="2">3%</option>
                      </select>

                    </div>
						<div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="catslug">Sub Category</label>
                      <select class="form-select block w-full px-3 text-xs font-normal text-content3 bg-white bg-clip-padding bg-no-repeat border border-border-light rounded-5 transition ease-in-out m-0 min-w-[150px] py-[9px] dark:border-border-dark dark:bg-sidebar-dark2" id="tax" aria-label="Default select example">
                        <option selected="">Choose Sub Category</option>
                        <option value="1">2% </option>
                        <option value="2">3%</option>
                      </select>

                    </div>
						<div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="catslug">Product Type</label>
                      <select class="form-select block w-full px-3 text-xs font-normal text-content3 bg-white bg-clip-padding bg-no-repeat border border-border-light rounded-5 transition ease-in-out m-0 min-w-[150px] py-[9px] dark:border-border-dark dark:bg-sidebar-dark2" id="tax" aria-label="Default select example">
                        <option selected="">Choose type</option>
                        <option value="1">Single product </option>
                        <option value="2">Multiple Product</option>
                      </select>

                    </div>
                  <div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="pname">Product price</label>
                      <input type="text" id="pname" value="Price" required="">

                    </div>
					 <div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="pslug">Product Offer Price</label>
                      <input type="text" id="pslug" value="Offer Price" required="">

                    </div>
					 <div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="psku">Product Stock Quantity</label>
                      <input type="text" id="psku" value="Stock Quantity" required="">

                    </div>
					
					<div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="catslug">Product tax</label>
                      <select class="form-select block w-full px-3 text-xs font-normal text-content3 bg-white bg-clip-padding bg-no-repeat border border-border-light rounded-5 transition ease-in-out m-0 min-w-[150px] py-[9px] dark:border-border-dark dark:bg-sidebar-dark2" id="tax" aria-label="Default select example">
                        <option selected="">Choose tax</option>
                        <option value="1">2% </option>
                        <option value="2">3%</option>
                      </select>

                    </div>
						<div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="catslug">Product Feature</label>
                      <select class="form-select block w-full px-3 text-xs font-normal text-content3 bg-white bg-clip-padding bg-no-repeat border border-border-light rounded-5 transition ease-in-out m-0 min-w-[150px] py-[9px] dark:border-border-dark dark:bg-sidebar-dark2" id="tax" aria-label="Default select example">
                        <option selected="">Choose Feature</option>
                        <option value="1">2% </option>
                        <option value="2">3%</option>
                      </select>

                    </div>
						<div class="col-span-4 2md:col-span-12 sm:col-span-12">
                      <label for="catslug">Product Badges</label>
                      <select class="form-select block w-full px-3 text-xs font-normal text-content3 bg-white bg-clip-padding bg-no-repeat border border-border-light rounded-5 transition ease-in-out m-0 min-w-[150px] py-[9px] dark:border-border-dark dark:bg-sidebar-dark2" id="tax" aria-label="Default select example">
                        <option selected="">Choose Badges</option>
                        <option value="1">Single product </option>
                        <option value="2">Multiple Product</option>
                      </select>

                    </div>
					
					<div class="col-span-12 2md:col-span-12 sm:col-span-12">
				  <div>
                    <label for="productImage">Product Images</label>
                    <input class="cursor-pointer show-preview" type="file" id="productImage">
                  </div>
                  
                    </div> 

				
                  </div>
                
                  <div class="flex flex-wrap gap-2 items-center justify-end"> <a class="btn btn-success py-1 text-white text-xs flex gap-2 items-center" href="javascript:void(0)">Save</a><a class="btn btn-secondary py-1 text-white text-xs flex gap-2 items-center" href="javascript:void(0)">Cancel </a></div>
                </form>
              </div>
            </div>
         
          </div>
		 
		 
        </div>
</x-app-layout>
