<?= \Config\Services::validation()->listErrors(); ?>

<form action="/book_registration/registration">

    <label for="title">ชื่อหนังสือ</label>
    <input type="input" name="title" /><br/>

    <label for="note">หมายเหตุ</label>
    <textarea name="note"></textarea><br/>

    <input type="submit" name="register" value="ลงทะเบียน" />

</form>