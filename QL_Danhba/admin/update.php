<?php
    include("menu.php");
    
?>
<div class="admin">
        <div class="container">
            <h2>Sửa cán bộ</h2><br>
			<?php
				$id =$_GET['id'];
				$sql = " SELECT *FROM tbl_canbo WHERE id=$id";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)==1){
					while($rows =mysqli_fetch_assoc($result))
				{
					
					$name =$rows['full_name'];
					$chucvu = $rows['chucvu'];
					$didong = $rows['didong'];
					$email = $rows['email'];
					$donvi = $rows['id_donvi'];
				}
				}
				else
				{
					header("location:".SITEURL.'admin/index.php');
				}
			?>
           
            <form action=" " method ="POST">
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Họ và tên</label>
                </div>
                <div class="col-3">
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                </div>
            </div><br>
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Chức vụ</label>
                </div>
                <div class="col-3">
                    <input type="text" name="chucvu" class="form-control" value="<?php echo $chucvu; ?>" >
                </div>
            </div><br>
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Đơn vị</label>
                </div>
                <div class="col-3">
                    <input type="text" name="address" class="form-control" value="<?php echo $donvi; ?>">
                </div>
            </div><br>
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Email</label>
                </div>
                <div class="col-3">
                    <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" >
                </div>
            </div><br>
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Di động</label>
                </div>
                <div class="col-3">
                    <input type="text" name="phone_number" class="form-control" value="<?php echo $didong; ?>">
                </div>
            </div><br>
            <div class="d-grid gap-2 col-5 ">
				
                <button type="submit" name="btnUpdate" class="btn btn-primary">Sửa</button>
            </div>
            </form>
        </div>
    </div>

<?php
    include("footer.php");
?>

<?php
	if(isset($_POST['btnUpdate']))
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$chucvu = $_POST['chucvu'];
		$donvi = $_POST['address'];
		$email = $_POST['email'];
		$didong = $_POST['phone_number'];
		
		$sql = "UPDATE tbl_canbo SET 
				full_name = '$name',
				chucvu = '$chucvu',
				didong = '$didong',
				email = '$email',
				id_donvi = '$donvi'
				WHERE id ='$id' ";
		$result = mysqli_query($conn, $sql) ;
		if($result==TRUE)
		{
			header("location:".SITEURL.'admin/index.php');
		}
		else
		{	
			echo " Failed to Update";
			header("location:".SITEURL.'admin/update.php');
		}
	}
 ?>
