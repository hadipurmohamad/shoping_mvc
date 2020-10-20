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
                               <th><i class=" icon-edit"></i>وضعیت</th>
                               <th></th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php foreach ($res as $key => $value) : ?>
                               <tr>
                                   <td><a href='#'><?php echo $value['tittle']; ?></a></td>
                                   <td class='hidden-phone'><?php echo $value['id']; ?></td>
                                   <td><?php echo $value['name']; ?></td>
                                   <td><span class='label label-info label-mini'><?php echo $value['status']; ?></span></td>
                                   <td>
                                       <button class='btn btn-success btn-xs'><i class='icon-ok'></i></button>
                                       <a href='index.php?c=procat&a=edit&id=<?php echo $value['id']; ?>'> <button class='btn btn-success btn-xs'><i class='icon-pencil'></i></button></a>
                                       <a href='index.php?c=procat&a=delete&id=<?php echo $value['id']; ?>'> <button class='btn btn-success btn-xs'><i class='icon-trash'></i></button></a>
                                   </td>
                               </tr>

                           <?php endforeach; ?>
                       </tbody>
                   </table>

               </section>
           </div>
       </section>
   </section>