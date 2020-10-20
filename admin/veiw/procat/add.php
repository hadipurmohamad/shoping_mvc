 <section id="main-content">
     <section class="wrapper">
         <div class="col-lg-12">
             <section class="panel">
                 <header class="panel-heading">
                     Advanced Form validations

                 </header>
                 <div class="panel-body">
                     <div class="form">
                         <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post"  novalidate="novalidate" action="index.php?c=procat&a=add">
                             <div class="form-group ">
                                 <label for="firstname" class="control-label col-lg-2">Name</label>
                                 <div class="col-lg-10">
                                     <input class=" form-control" id="firstname" name="frm[name]" type="text">
                                 </div>
                             </div>
                             <div class="form-group ">
                                 <label for="firstname" class="control-label col-lg-2">Tittle</label>
                                 <div class="col-lg-10">
                                     <select name="frm[id]" class="form-control input-sm m-bot15">
                                         <option value="0">سرگروه</option>
                                         <?php foreach ($res as $key => $value) : ?>
                                             <option value="<?php echo $value['id']; ?>"><?php echo $value['tittle']; ?></option>
                                         <?php endforeach; ?>

                                     </select>
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