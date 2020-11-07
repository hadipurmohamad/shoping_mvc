   <section id="main-content">
       <section class="wrapper">
           <div class="col-lg-12">
               <section class="panel">
                   <header class="panel-heading">
                       Procat List
                   </header>
                   <table class="table table-striped table-advance table-hover">
                       <thead>
                           <tr>
                               <th><i class="icon-bullhorn"></i>عنوان دسته بندی</th>
                               <th class="hidden-phone"><i class="icon-question-sign"></i>شماره</th>
                               <th><i class="icon-bookmark"></i>نام</th>
                               <th><i class="icon-bookmark"></i>تغیرات</th>
                             
                              
                           </tr>
                       </thead>
                       <tbody>
                           <?php foreach ($bascketList as $key => $value) : ?>
                               <tr>
                                   <td><a href='#'><?php echo $value['id']; ?></a></td>
                                   <td class='hidden-phone'><?php echo $value['product_id']; ?></td>
                        
                                   <td><?php echo $value['user_id']; ?></td>
                                   <td>
                                       <button class='btn btn-success btn-xs'><i class='icon-ok'></i></button>
 <a href='index.php?c=bascket&a=delete&delete_id=<?php echo $value['id']; ?>'> <button class='btn btn-success btn-xs'><i class='icon-trash'></i></button></a>
                                   </td>
                               </tr>

                           <?php endforeach; ?>
                       </tbody>
                   </table>

               </section>
           </div>
       </section>
   </section>