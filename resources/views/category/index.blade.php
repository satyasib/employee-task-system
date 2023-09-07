<x-app-layout>
  
<div class="page-body">
         
		 
		 <div class="grid grid-cols-12 gap-4 add-product card">
            <div class="col-span-12 md:col-span-12">
              <div> 
                <h5 class="text-title font-semibold mb-3">Create Category </h5>
                <form class="flex flex-col gap-4 m-0 sm:gap-3 theme-form">
               
         
                 
                  <div class="grid grid-cols-12 gap-5 sm:gap-3"> 
                    <div class="col-span-6 2md:col-span-6 sm:col-span-12">
                      <label for="catname">Category Name</label>
                      <input type="text" id="catname" value="Women's Latest Bags" required="">

                    </div>
                    <div class="col-span-6 2md:col-span-6 sm:col-span-12">
                      <label for="catslug">Category Slug</label>
                      <input type="text" id="catslug" value="slug" required="">

                    </div>
                  </div>
                
                  <div class="flex flex-wrap gap-2 items-center justify-end"> <a class="btn btn-success py-1 text-white text-xs flex gap-2 items-center" href="javascript:void(0)">Save</a><a class="btn btn-secondary py-1 text-white text-xs flex gap-2 items-center" href="javascript:void(0)">Cancel </a></div>
                </form>
              </div>
            </div>
         
          </div>
		 
		 
        </div>
</x-app-layout>
