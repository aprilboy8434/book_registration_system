<form action="/book_registration/registration">

<div class="container">
	<div class="py-5 text-center">
		<h2>ลงทะเบียนหนังสือ</h2>
	</div>

	  <div class="row">
		<!-- <div class="col-md-4 order-md-2 mb-4">
		  <h4 class="d-flex justify-content-between align-items-center mb-3">
			<span class="text-muted">Your cart</span>
			<span class="badge badge-secondary badge-pill">3</span>
		  </h4>
		  <ul class="list-group mb-3">
			<li class="list-group-item d-flex justify-content-between lh-condensed">
			  <div>
				<h6 class="my-0">Product name</h6>
				<small class="text-muted">Brief description</small>
			  </div>
			  <span class="text-muted">$12</span>
			</li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
			  <div>
				<h6 class="my-0">Second product</h6>
				<small class="text-muted">Brief description</small>
			  </div>
			  <span class="text-muted">$8</span>
			</li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
			  <div>
				<h6 class="my-0">Third item</h6>
				<small class="text-muted">Brief description</small>
			  </div>
			  <span class="text-muted">$5</span>
			</li>
			<li class="list-group-item d-flex justify-content-between bg-light">
			  <div class="text-success">
				<h6 class="my-0">Promo code</h6>
				<small>EXAMPLECODE</small>
			  </div>
			  <span class="text-success">-$5</span>
			</li>
			<li class="list-group-item d-flex justify-content-between">
			  <span>Total (USD)</span>
			  <strong>$20</strong>
			</li>
		  </ul>

		  <form class="card p-2">
			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Promo code">
			  <div class="input-group-append">
				<button type="submit" class="btn btn-secondary">Redeem</button>
			  </div>
			</div>
		  </form>
		</div> -->
		<div class="col-md-12 order-md-1">
		  <h4 class="mb-3">ข้อมูลหนังสือ</h4>
		  <form class="needs-validation" novalidate>

		  	<div class="mb-3">
				<label for="registration_date">วันที่ลงทะเบียน</label>
				<input type="date" class="form-control" id="registration_date" placeholder="" value="" required>
				<div class="invalid-feedback">
					โปรดกรอกวันที่ลงทะเบียน
				</div>
			</div>

			<div class="mb-3">
				<label for="bookTitle">เลขทะเบียน</label>
				<input type="text" class="form-control" id="bookTitle" placeholder="" value="" required>
				<div class="invalid-feedback">
					โปรดกรอกเลขทะเบียน
				</div>
			</div>

			<div class="mb-3">
				<label for="book_title">ชื่อหนังสือ</label>
				<select class="custom-select d-block w-100" id="book_title" required>
				  <option value="">เลือกหนังสือ...</option>
				  	<?php foreach ($biblios as $biblio_item): ?>
					  <option><?= $biblio_item['title'] ?></option>
					<?php endforeach; ?>
				</select>
				<div class="invalid-feedback">
					โปรดเลือกหนังสือ
				</div>
			</div>

			<div class="mb-3">
				<label for="call_number">เลขเรียกหนังสือ</label>
				<input type="text" class="form-control" id="call_number" readonly>
			</div>

			<div class="mb-3">
				<label for="author">ผู้แต่ง</label>
				<input type="text" class="form-control" id="author" readonly>
			</div>

			<div class="mb-3">
				<label for="publisher">สำนักพิมพ์</label>
				<input type="text" class="form-control" id="publisher" readonly>
			</div>

			<div class="mb-3">
				<label for="edition">พิมพ์ครั้งที่</label>
				<input type="text" class="form-control" id="edition" readonly>
			</div>

			<div class="mb-3">
				<label for="publish_year">ปีที่พิมพ์</label>
				<input type="text" class="form-control" id="publish_year" readonly>
			</div>
			
			<div class="mb-3">
				<label for="price_thb">ราคา</label>
				<input type="number" class="form-control" id="price_thb" placeholder="" value="">
			</div>

			<div class="mb-3">
				<label for="note">หมายเหตุ</label>
				<textarea class="form-control" id="note" rows="3"></textarea>
			</div>
			
			<hr class="mb-4">
			<button class="btn btn-primary btn-lg btn-block" type="submit">ลงทะเบียน</button>
			<button class="btn btn-primary btn-lg btn-block" type="submit">ยกเลิก</button>
		  </form>
		</div>
	  </div>


	<!-- <div class="row">
		<div class="col-md-4 order-md-2 mb-4">

			<label for="title">ชื่อหนังสือ</label>
			<input type="input" name="title" /><br/>

			<label for="note">หมายเหตุ</label>
			<textarea name="note"></textarea><br/>

			<input type="submit" name="register" value="ลงทะเบียน" />

		</div>

	</div> -->

</form>