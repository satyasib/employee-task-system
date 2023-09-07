<x-app-layout>
  
<div class="page-body">
         
		 
		 <div class="grid grid-cols-12 gap-4 add-product card">
            <div class="col-span-12 md:col-span-12">
              <div> 
                <h5 class="text-title font-semibold mb-3">Create Sub category </h5>
                <form class="flex flex-col gap-4 m-0 sm:gap-3 theme-form">
               
         
                 
                  <div class="grid grid-cols-12 gap-5 sm:gap-3"> 
				  
				  	<div class="col-span-6 2md:col-span-6 sm:col-span-12">
                      <label for="catslug">Category</label>
                      <select class="form-select block w-full px-3 text-xs font-normal text-content3 bg-white bg-clip-padding bg-no-repeat border border-border-light rounded-5 transition ease-in-out m-0 min-w-[150px] py-[9px] dark:border-border-dark dark:bg-sidebar-dark2" id="tax" aria-label="Default select example">
                        <option selected="">Choose Tax</option>
                        <option value="1">2% </option>
                        <option value="2">3%</option>
                      </select>

                    </div>
                    <div class="col-span-6 2md:col-span-6 sm:col-span-12">
                      <label for="subcatname">Sub category Name</label>
                      <input type="text" id="subcatname" value="subcategory" required="">

                    </div>
                    <div class="col-span-6 2md:col-span-6 sm:col-span-12">
                      <label for="subcatslug">Sub category Slug</label>
                      <input type="text" id="subcatslug" value="slug" required="">

                    </div> 

				
                  </div>
                
                  <div class="flex flex-wrap gap-2 items-center justify-end"> <a class="btn btn-success py-1 text-white text-xs flex gap-2 items-center" href="javascript:void(0)">Save</a><a class="btn btn-secondary py-1 text-white text-xs flex gap-2 items-center" href="javascript:void(0)">Cancel </a></div>
                </form>
              </div>
            </div>
         
          </div>
		 
		 
        </div>
</x-app-layout>
