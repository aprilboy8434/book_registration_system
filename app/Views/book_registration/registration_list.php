<?php if (! empty($books) && is_array($books)) : ?>
	
	<div class="main">
		<table border="1">
			<tr>
				<th>วันที่ เดือน ปี</th>
				<th>เลขทะเบียน</th>
				<th>ชื่อหนังสือ</th>
				<th>ครั้งที่พิมพ์</th>
				<th>ราคา</th>
				<th>ปีที่พิมพ์</th>
				<th>หมายเหตุ</th> 
			</tr>
			<?php foreach ($books as $book_item): ?>
				<tr>
				
				<th><?= $book_item['registration_date'] ?></h3>
				<th><?= $book_item['accession_number'] ?></h3>
				<th><?= $book_item['title'] ?></h3>
				<th><?= $book_item['edition'] ?></h3>
				<th><?= $book_item['price_thb'] ?></h3>
				<th><?= $book_item['year'] ?></h3>
				<th><?= $book_item['note'] ?></h3>
				</tr>
			</div>
			<?php endforeach; ?>
		</table>
	</div>

<?php else : ?>
	<main role="main" class="container">
		<div class="starter-template">
			<div class="d-flex justify-content-center">
				<h1>ไม่มีข้อมูลหนังสือลงทะเบียน</h1>
			</div>
			<form action="BookRegistration/create">
				<button class="btn btn-lg btn-primary btn-block" type="submit">เริ่มลงทะเบียนหนังสือ</button>
			</form>
			
		</div>
	</main>
<?php endif ?>