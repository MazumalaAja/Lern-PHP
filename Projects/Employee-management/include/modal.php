<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" class="modal-content">
               <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add new employee</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <div>
                         <div class="mb-3">
                              <label class="form-label" for="username">Username</label>
                              <input name="username" id="username" required type="text" class="form-control" placeholder="Enter employee's name...">
                         </div>
                         <div class="mb-3">
                              <label class="form-label" for="address">Address</label>
                              <input name="address" required id="address" type="text" class="form-control" placeholder="Enter employee's address...">
                         </div>
                         <div class="mb-3">
                              <label class="form-label" for="salary">Salary</label>
                              <input name="salary" required id="salary" type="number" class="form-control" placeholder="Enter employee's salary...">
                         </div>
                    </div>
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button name="add" type="submit" class="btn btn-primary">Add Data</button>
               </div>
          </form>
     </div>
</div>