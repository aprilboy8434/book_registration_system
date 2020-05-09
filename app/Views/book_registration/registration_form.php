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
				<label for="book_title">ชื่อหนังสือ</label>
				<input type="text" class="form-control" id="book_title" placeholder="" value="" required>
				<div class="invalid-feedback">
					โปรดกรอกชื่อหนังสือ
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
				<label for="call_number_id">เลขเรียกหนังสือ</label>
				<input type="text" class="form-control" id="call_number_id" placeholder="" value="" required>
				<div class="invalid-feedback">
					โปรดกรอกเลขเรียกหนังสือ
				</div>
			</div>

			<div class="mb-3">
				<label for="author_id">ผู้แต่ง</label>
				<select class="custom-select d-block w-100" id="author_id" required>
				  <option value="">เลือกผู้แต่ง...</option>
				  <option>พบบุญ มหาชนะวงศ์</option>
				</select>
				<div class="invalid-feedback">
					โปรดเลือกผู้แต่ง
				</div>
			</div>

			<div class="mb-3">
				<label for="publisher_id">สำนักพิมพ์</label>
				<select class="custom-select d-block w-100" id="publisher_id" required>
				  <option value="">เลือกสำนักพิมพ์...</option>
				  <option>สำนักพิมพ์มหาชนะวงศ์</option>
				</select>
				<div class="invalid-feedback">
					โปรดเลือกสำนักพิมพ์
				</div>
			</div>

			<div class="mb-3">
				<label for="edition">ครั้งที่พิมพ์</label>
				<input type="number" class="form-control" id="edition" placeholder="" value="" required>
				<div class="invalid-feedback">
					โปรดกรอกเลขเรียกหนังสือ
				</div>
			</div>

			<div class="mb-3">
				<label for="year">ปีที่พิมพ์</label>
				<input type="number" class="form-control" id="year" placeholder="" value="" required>
				<div class="invalid-feedback">
					โปรดกรอกเลขเรียกหนังสือ
				</div>
			</div>

			<div class="mb-3">
				<label for="price_thb">ราคา</label>
				<input type="number" class="form-control" id="price_thb" placeholder="" value="" required>
				<div class="invalid-feedback">
					โปรดกรอกเลขเรียกหนังสือ
				</div>
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