 <section id="main-content">
     <section class="wrapper">
         <div class="col-lg-12">
             <section class="panel">
                 <header class="panel-heading">
                     اضافه کردن محصولات

                 </header>
                 <div class="panel-body">
                     <div class="form">
                         <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" enctype="multipart/form-data" action="index.php?c=pro&a=edit&id=<?php echo $_GET['id']; ?>">
                             <div class="form-group ">
                                 <label for="name" class="control-label col-lg-2">عنوان</label>
                                 <div class="col-lg-10">
                                     <input class=" form-control" id="name" name="frm[name]" type="text" value="<?php echo $res_edit_list[0]['tittle'];  ?>">
                                 </div>
                             </div>
                             <div class="form-group ">
                                 <label for="image1" class="control-label col-lg-2">1تصویر</label>
                                 <div class="col-lg-10">
                                     <input class=" form-control" id="image1" name="image1" type="file">
                                 </div>
                                 <label for="image2" class="control-label col-lg-2">2تصویر</label>
                                 <div class="col-lg-10">
                                     <input class=" form-control" id="image2" name="image2" type="file">
                                 </div>
                                 <label for="image3" class="control-label col-lg-2">3تصویر</label>
                                 <div class="col-lg-10">
                                     <input class=" form-control" id="image3" name="image3" type="file">
                                 </div>
                             </div>
                             <div class="form-group ">
                                 <label for="firstname" class="control-label col-lg-2">دسته</label>
                                 <div class="col-lg-10">
                                     <select name="frm[cat_id]" class="form-control input-sm m-bot15">

                                         <?php foreach ($res as $key => $value) : ?>
                                             <option value="<?php echo $value['id']; ?>"><?php echo $value['tittle']; ?></option>
                                         <?php endforeach; ?>

                                     </select>
                                 </div>
                             </div>
                             <div class="form-group ">
                                 <label for="price" class="control-label col-lg-2">قیمت</label>
                                 <div class="col-lg-10">
                                     <input class=" form-control" id="price" name="frm[price]" type="text" value="<?php echo $res_edit_list[0]['price'];  ?>">
                                 </div>
                             </div>
                             <div class="form-group ">
                                 <label for="detials" class="control-label col-lg-2">تعداد</label>
                                 <div class="col-lg-10">
                                     <input class=" form-control" id="detials" name="frm[count]" type="text-area" value="<?php echo $res_edit_list[0]['count'];  ?>">
                                 </div>
                             </div>
                             <div class="form-group ">
                                 <label for="detials" class="control-label col-lg-2">توضیحات</label>
                                 <div class="col-lg-10">
                                     <input class=" form-control" id="detials" name="frm[detials]" type="text-area" value="<?php echo $res_edit_list[0]['detials'];  ?>">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-lg-offset-2 col-lg-10">
                                     <button class="btn btn-danger" type="submit">Save</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </section>
         </div>
     </section>
 </section>