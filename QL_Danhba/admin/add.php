<?php
    include("menu.php");
    
?>

    <div class="admin">
        <div class="container">
            <h2>Thêm cán bộ</h2><br>
           
            <form action=" " method ="POST">
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Họ và tên</label>
                </div>
                <div class="col-3">
                    <input type="text" name="name" class="form-control" >
                </div>
            </div><br>
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Chức vụ</label>
                </div>
                <div class="col-3">
                    <input type="text" name="chucvu" class="form-control" >
                </div>
            </div><br>
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Đơn vị</label>
                </div>
                <div class="col-3">
                    <input type="text" name="address" class="form-control" >
                </div>
            </div><br>
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Email</label>
                </div>
                <div class="col-3">
                    <input type="text" name="email" class="form-control" >
                </div>
            </div><br>
            <div class="row g-3 align-items-center">
                <div class="col-2">
                    <label  class="col-form-label">Di động</label>
                </div>
                <div class="col-3">
                    <input type="text" name="phone_number" class="form-control" >
                </div>
            </div><br>
            <div class="d-grid gap-2 col-5 ">
                <button type="submit" name="btnAdd" class="btn btn-primary">Thêm</button>
            </div>
            </form>
        </div>
    </div>


<?php
    include("footer.php");
?>

<?php
	if(isset($_POST["btnAdd"]))
	{
		$name = $_POST['name'];
		$chucvu = $_POST['chucvu'];
		$donvi = $_POST['address'];
		$email = $_POST['email'];
		$didong = $_POST['phone_number'];
		
		$conn = mysqli_connect('localhost','root','','ql_danhba','3306');
         if(!$conn){
            die("không thể kết nối");
        }
		
		$sql = "INSERT INTO tbl_canbo SET 
				full_name = '$name',
				chucvu = '$chucvu',
				didong = '$didong',
				email = '$email',
				id_donvi = '$donvi' ";
		
		$result = mysqli_query($conn, $sql) ;
		
		if($result==TRUE)
		{
			header("location:".SITEURL.'admin/index.php');
		}
		else
		{
			header("location:".SITEURL.'admin/add.php');
		}
		 
	}
	
 ?>
