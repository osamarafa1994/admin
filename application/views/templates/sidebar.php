<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar .right-side">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-right image">
        <img src="<?php echo base_url(); ?>assets/dist/img/<?= $_SESSION['image'] ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-right info">
        <p><?= $_SESSION['fname'] ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <?php if ($_SESSION['role_id'] != 2): ?>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>لوحة المراقبة</span> <i class="fa fa-angle-left pull-left"></i>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="<?= base_url() ?>Admin/main"><i class="fa fa-circle-o"></i>الرئيسية</a></li>
            <li><a href="<?= base_url() ?>Admin/allMangers"><i class="fa fa-circle-o"></i>الإداريين</a></li>
            <li><a href="<?= base_url() ?>Admin/allMember"><i class="fa fa-circle-o"></i><span class="label label-primary pull-left"></span>المستخدمين</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>التقارير</span>
          <span class="label label-primary pull-left">4</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> تقارير المبيعات</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> تقارير المشتريات</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> تقارير أرباح</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> تقارير الخصومات</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> تقارير السندات</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> تقارير الإذون</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> تقارير الجرد</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> تقارير حساب وكلاء</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-cogs"></i> <span>الإعدادات</span>
          <small class="label pull-left bg-green">new</small>
        </a>
      </li>
    <?php endif; ?>
      <li>
        <a href="profile.html">
          <i class="fa fa-users"></i> <span>صفحة المستخدم</span>
          <small class="label pull-left bg-green"></small>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
