

<?php
session_start();
include('Admin_header.php');
?>

<?php
             $conn = mysqli_connect("localhost", "root", "", "minor_project");
             $query = "SELECT company.c_name,company.c_id,company.c_email,company.c_contact,company.c_pname,company.c_pcontact,jobdetails.j_id,jobdetails.userid,jobdetails.j_title,jobdetails.skill,jobdetails.j_type FROM jobdetails INNER JOIN company  ON jobdetails.userid=company.c_id";
                    $count = 0;
                    $records = mysqli_query($conn, $query);
                    mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">STUDENT LIST</h1>
<div class="card card-body">
<div class="table-responsive">
<table id="employee_data" class="table table-striped table-bordered  table-hover " >
    <thead>
        <tr>
            <th>Index no</th>
            <th>Company name</th>
            <th>Job Title</th>
            <th>Job Type</th>
             <th>Job Applied Student</th>
             <th>Job Selected Student</th>   
   
        </tr>
    </thead>

    <?php
    while (($row = mysqli_fetch_array($records)) == true) {


        echo "<tr style='text-align: center;'>";
        echo "<td>" . ++$count . "</td>";
        echo "<td>" . $row['c_name'] . "</td>";
        echo "<td>" . $row['j_title'] . "</td>";
        echo "<td>" . $row['j_type'] . "</td>";
      ?>
        <td>
                        <form action="Admin_StudentList_Applied.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['c_id']; ?>" />
                            <input type="hidden" name="jid" value="<?php echo $row['j_id']; ?>" />
                            <button type="submit" name="apply" class="btn btn-success"><i class="fa-solid fa-eye"></i>&nbsp;View</button>
                        </form>
                    </td>
                    <td>
                        <form action="Admin_StudentList_Selected.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['c_id']; ?>" />
                            <input type="hidden" name="jid" value="<?php echo $row['j_id']; ?>" />
                            <button type="submit" name="apply" class="btn btn-success"><i class="fa-solid fa-eye"></i>&nbsp;View</button>
                        </form>
                    </td>
      <?php
  echo "</tr>";

    } ?>
</table>
</div>
</div>

<script>
    $(document).ready(function () {
        $('#employee_data').DataTable();
    });  
</script>


<?php
include('footer.php');
?>