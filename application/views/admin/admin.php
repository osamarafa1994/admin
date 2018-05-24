<?php

  if ($_SESSION['role_id'] == 2) {
    redirect("Users/profile/".$_SESSION['user_id']);
  }

 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="height:800px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <?php //var_dump($_SESSION); ?>
    <h1>
      
      لوحة المراقبة
      <small>الرئيسية</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> لوحة المراقبة</a></li>
      <li class="active">االرئيسية</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>

            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">عرض المزيد<i class="fa fa-arrow-circle-left"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">عرض المزيد<i class="fa fa-arrow-circle-left"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?= count($users) ?></h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <a href="<?= base_url() ?>Admin/add_member"><i class="ion ion-person-add"></i></a>
          </div>
          <a href="<?= base_url() ?>Admin/allMember" class="small-box-footer">عرض المزيد<i class="fa fa-arrow-circle-left"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">عرض المزيد <i class="fa fa-arrow-circle-left"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
