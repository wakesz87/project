 <!--Bootstrap4  Modal -->
 <div class="modal fade" id="addModal">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">

             <!-- Modal Header -->
             <div class="modal-header">
                 <h4 class="modal-title">Új vásárló felvétele</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>

             <!-- Modal body -->
             <div class="modal-body px-5">
                 <form action="" method="post" id="form-data"></form>
                 <div class="form-group">
                     <input type="text" name="fullName" placeholder="Teljes Név" class="form-control" required>
                 </div>

                 <div class="form-group">
                     <input type="email" name="email" placeholder="E-mail cím" class="form-control" required>
                 </div>

                 <div class="form-group">
                     <input type="password" name="password" placeholder="Jelszó" class="form-control" required>
                 </div>

                 <div class="form-group">
                     <input type="number" name="taxNumber" placeholder="Adószám" class="form-control" required>
                 </div>

                 <div class="form-group">
                     <input type="text" name="deliveryAddress" placeholder="Szállítási Cím" class="form-control" required>
                 </div>

                 <div class="form-group">
                     <input type="text" name="billingAdress" placeholder="Számlázási Cím" class="form-control" required>
                 </div>

                 <!-- Button -->
                 <div class="form-group">
                     <input type="submit" name="insert" class="btn btn-success btn-block" id="insert"  value= "Felvét" >
                 </div>

             </div>

         </div>
     </div>
 </div>