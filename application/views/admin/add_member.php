<div class="content-wrapper" style="height:800px;">
  <!-- Content Header (Page header) -->
<div class="register-box-body">
  <p class="login-box-msg">اضافة عضوية مستخدم جديد</p>
  <?php if ($error != null): ?>
    <div class="callout callout-danger">
          <h5><?= $error ?></h5>
    </div>
  <?php endif; ?>
  <form action="<?= base_url(); ?>Admin/add_member" method="post" enctype="multipart/form-data">
    <div class="form-group has-feedback">
      <label>اسم العضو</label>
      <div class="row">
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control" name="fname" placeholder="الاول" required>
          </div>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control" name="lname" placeholder="الاخير" required>
          </div>
          <!-- /input-group -->
        </div>
        <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
    </div>
    <div class="form-group has-feedback">
      <input type="text" class="form-control" name="username" placeholder="أسم المستخدم" required>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <label>نوع الصلاحية</label>
      <select class="form-control select2" name="role" style="width: 100%;">
        <option >اختارالدور </option>
        <?php foreach ($roles as $role): ?>
          <option value="<?= $role->role_id ?>" > <?= $role->name ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group has-feedback">
      <label for="exampleInputFile">اختار صورة المستخدم</label>
      <input type="file" name="userfile">
    </div>
    <div class="row">
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">اضافة</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
</div>
<!-- /.form-box -->
</div>
