
    <?php

    include "com_header.php";
    ?>
   
        

        <div>
            <section class="main-content ">
                
                <h1 class=" text-center mb-4 text-gray-800">Job Post</h1>
                    <form method="post" action="JobApplicationFormdb.php">
                        <div class="mt-5 row d-flex justify-content-center">

                            <div class="profile-card rounded-1g shadow p-4 p-xl-5 mb-4 text-center">

                                <div class="text-left mb-4">

                                    <div class="form-group p-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text ">
                                                    <span class="fa fa-user mr-2 text-primary"></span>Job Title
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter Job Title"
                                                name="txttitle">
                                        </div>
                                    </div>

                                    <div class="form-group p-1">
                                        <div class="input-group">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text ">
                                                    <span class="fas fa-laptop-code mr-2 text-primary"></span>Skill
                                                </span>
                                            </div>
                                            <input type="text" placeholder="Enter Require Skill" name="txtskill"
                                                class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group p-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend ">
                                                <span class="input-group-text">
                                                    <span class="fa-solid fa-user-graduate mr-2 text-primary"></span> Job Require
                                                    degree
                                                </span>
                                            </div>
                                            <select name="degree" class="form-control">
                                                <option disabled="disabled" selected="selected">Choose Option</option>
                                                <option value="BCA">BCA</option>
                                                <option value="MCA">MCA</option>
                                                <option value="Bscit">Bscit</option>
                                                <option value="Mscit">Mscit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group p-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend ">
                                                <span class="input-group-text ">
                                                    <span class="fa fa-dot-circle mr-2 text-primary "></span>Discription
                                                </span>
                                            </div>
                                            <textarea type="text" rows="4" cols="50" name="txtdis"
                                                class="form-control"> </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group p-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa-solid fa-money-bill mr-2  text-primary"></i>Salary
                                                </span>
                                            </div>
                                            <input type="number" placeholder="Enter salary" name="txtsal"
                                                class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group p-1">
                                        <div class="input-group">
                                            <input type="submit" name="btnJadd" value="Add Job Details"
                                                class="form-control btn-primary">
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </form>
                
            </section>
        </div>

    

    <?php
    include "footer.php";
    ?>
</body>

</html>