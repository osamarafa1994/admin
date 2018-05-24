<?php
if ($_SESSION['user_id'] != 1) {
  if ($_SESSION['user_id'] != $user->user_id) {
    redirect("Users/profile/".$_SESSION['user_id']);
  }
}

 ?>
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"> الصفحة الشخصية</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>الشركة</label>
                                                <input type="text" class="form-control" disabled placeholder="الشركة" value="Creative Code Inc.">
                                            </div>
                                        </div>

                                    </div>

                                    <form action="<?= base_url().'Users/updateUser/'.$user->user_id ?>" method="post">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>الأسم الأول</label>
                                                  <input type="text" class="form-control" name="fname" placeholder="الاول" value="<?= $user->first_name ?>">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>الأسم الأخير</label>
                                                  <input type="text" class="form-control" name="lname" placeholder="الاخير" value="<?= $user->last_name ?>">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <label>كلمة السر</label>
                                                 <input type="password" class="form-control" name="pass" placeholder="ادخل كلمة السر الجديده" value="">
                                             </div>
                                         </div>
                                     </div>
                                      <button type="submit" class="btn btn-info btn-fill pull-left">تحديث المعلومات</button>
                                    </form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>عن المستخدم</label>
                                                <h1>اسم المستخدم </h1>
                                                <h3><?= $user->username ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="<?= base_url() ?>assets/dist/img/<?= $user->img_name ?>" alt="..."/>

                                      <h4 class="title"><?= $user->first_name ?> <?= $user->last_name ?><br/>
                                         <small>مطور برمجيات</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

  </div>
