<?php
session_start();
include('po_header.php');
?>



<div class="row" style="margin: 30px 70px;">
    <div class="col mt-5">
        <hr>
        <h5 class="mb-3 text-center">Import Student Details</h5>
        <hr>
        <form action="po_import.php" method="POST" enctype="multipart/form-data">
            <div class="card card-body shadow">
                <form action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
                <span class="drop-title">Drop files here</span>                                
                    <label for="images" class="drop-container">
             
                        <input type="file" name="file" id="file" class="mt-4" required>
                        <div class="col d-flex justify-content-center">
                        <button type="submit"  id="submit"  name="Import" class="btn0 mb-3"><i class="fa-solid fa-upload mr-2"></i>Upload</button>
                        </div>
                    </label>
                  
                   
                </form>
            </div>
        </form>
    </div>
</div>





<?php
include('footer.php');
?>