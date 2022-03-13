<?php
if (isset($_POST['search'])) {
	$keyword = intval($_POST['keyword']);
?>
	<div>
		<h2>Result</h2>
		<hr style="border-top:2px dotted #ccc;" />
		<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `mytable` WHERE `INDEX_NO`='$keyword'") or die(mysqli_error());
		if ($fetch = mysqli_fetch_array($query)) {
		?>
			<div style="word-wrap:break-word;">
				<h1><?php echo $fetch['STUDENT_NAME'] ?></h1>
				<h3><?php echo $fetch['INDEX_NO'] ?></h3>
				<h4><?php echo $fetch['SCHOOL_NAME'] ?></h4>

			</div>


						<table class="table">
				<thead>
					<!-- <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
     
    </tr> -->
				</thead>
				<tbody>
					<tr>
						<th scope="row"><?php echo $fetch['Subject_1_Name'] ?></th>
						<td><?php echo $fetch['Subject_1_grade'] ?></td>


					</tr>
					<tr>
						<th scope="row"><?php echo $fetch['Subject_2_name'] ?></th>
						<td><?php echo $fetch['Subject_2_grade'] ?></td>


					</tr>
					<tr>
						<th scope="row"><?php echo $fetch['Subject_3_name'] ?></th>
						<td><?php echo $fetch['Subject_3_grade'] ?></td>


					</tr>
					<tr>
						<th scope="row">Z Score</th>
						<td><?php echo $fetch['ZSCORE'] ?></td>


					</tr>
					<tr>
						<th scope="row">Rank</th>
						<td><?php echo $fetch['RANK'] ?></td>


					</tr>
				</tbody>
			</table>







			<hr style="border-bottom:1px solid #ccc;" />
		<?php
		} else {
		?>
			<div>
				<h4>No Result Found</h4>
			</div>
		<?php
		}
		?>
	</div>
<?php
}
?>

<!-------"SELECT * FROM `blog` WHERE `title` LIKE '%$keyword%' ORDER BY `title`"------->