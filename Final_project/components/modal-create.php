<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title">Add new users</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <div class="input-group mb-3">
                         <i id="basic-addon1" class="input-group-text bi bi-person"></i>
                         <input type="text" name="username" class="form-control" placeholder="Username..." aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                         <i id="basic-addon1" class="input-group-text bi bi-envelope"></i>
                         <input type="email" name="email" class="form-control" placeholder="Email..." aria-label="Email" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                         <i id="basic-addon1" class="input-group-text bi bi-lock"></i>
                         <input type="password" name="password" class="form-control" placeholder="Password..." aria-label="Password" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                         <i id="basic-addon1" class="input-group-text bi bi-lock"></i>
                         <input type="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password confirmation..." aria-label="Password confirmation" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                         <label class="input-group-text" for="inputGroupSelect01">Role</label>
                         <select name="role" class="form-select" id="inputGroupSelect01">
                              <option value="USER">USER</option>
                              <option value="ADMIN">ADMIN</option>
                         </select>
                    </div>

               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Users</button>
               </div>
          </div>
     </form>
</div>