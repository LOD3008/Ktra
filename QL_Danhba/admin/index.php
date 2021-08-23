<?php
    include("menu.php");
	

?>

    <div class="admin">
    <div class="container">
        
		
        <a href="add.php" class="btn  btn-outline-success btn-lg" >THÊM</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">STT</th>
                <th scope="col">HỌ VÀ TÊN</th>
                <th scope="col">CHỨC VỤ</th>
                <th scope="col">DI ĐỘNG</th>
				<th scope="col">EMAIL</th>
				<th scope="col">ID_ĐƠN VỊ</th>
				<th scope="col">TRẠNG THÁI</th>
                </tr>
            </thead>
			<?php
				$conn = mysqli_connect('localhost','root','','ql_danhba','3306');
				 if(!$conn){
					die("không thể kết nối");
				}
				$sql ="SELECT *FROM tbl_canbo";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)>0){
						while($rows =mysqli_fetch_assoc($result))
						{
							$id =$rows['id'];
							$name =$rows['full_name'];
							$chucvu = $rows['chucvu'];
							$didong = $rows['didong'];
							$email = $rows['email'];
							$donvi = $rows['id_donvi'];
							?>
								<tbody>
								<tr>
								<th scope="row"><?php echo $id; ?></th>
								<td><?php echo $name; ?></td>
								<td><?php echo $chucvu; ?></td>
								<td><?php echo $didong; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $donvi; ?></td>
								<td>
									<a href="http://localhost/QL_Danhba/admin/update.php?id=<?php echo $id; ?>" class="btn  btn-outline-success "> SỬA</a>  
									<a href="http://localhost/QL_Danhba/admin/delete.php?id=<?php echo $id; ?>" class="btn  btn-outline-success "> XÓA</a>
								</td>
								</tr>
								</tbody>
							<?php
						}
				
					
						
					}
					
				
			?>
            
        </table>
    </div>
    </div>

<?php
    include("footer.php");
?>