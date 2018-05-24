<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        لوحة المراقبة
        <small>الادرايين</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> لوحة المراقبة</a></li>
        <li class="active">الاداريين</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">عرض الإداريين</h3>

          <div class="box-tools pull-left">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="margin-bottom inline-block">
            <div class="addNew col-xs-2">
                <a href="<?= base_url() ?>Admin/add_member" class="btn btn-success btn-sm ">
                    <i class="fa fa-plus"></i>
                     جديد
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8 pull-left">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="بحث عن ...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm btn-flat" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
         <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>المسلسل </th>
                  <th>الأسم</th>
                  <th>اسم المستخدم</th>
                  <th>الصورة </th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user): ?>
                    <?php if ($user->role_id != 2): ?>
                <tr>
                  <td><?= $user->user_id ?></td>
                  <td><?= $user->first_name ?> <?= $user->last_name  ?></td>
                  <td><?= $user->username ?></td>
                  <td>
                    <div class="pull-right image">
                      <img style="width:30px;" src="<?php echo base_url(); ?>assets/dist/img/<?= $user->img_name ?>" class="img-circle" alt="User Image">
                    </div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; ?>
                </tbody>
              </table>
         </div>

        </div>
      </div>
      <!-- /.box -->
    </section>
  </div>
