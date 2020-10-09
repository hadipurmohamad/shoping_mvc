   <section id="main-content">
       <section class="wrapper">

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
                   <?php foreach ($res as $key => $value) {
                        echo "<tr>
                <td><a href='#'>$value[tittle]</a></td>
            <td class='hidden-phone'>$value[id]</td>
            <td>$value[name] </td>
            <td><span class='label label-info label-mini'>$value[status]</span></td>
            <td>
                <button class='btn btn-success btn-xs'><i class='icon-ok'></i></button>
                <button class= 'btn btn-success btn-xs'><i class='icon-pencil'></i></button>
                <button class= 'btn btn-success btn-xs'><i class='icon-trash '></i></button>
            </td>
        </tr>";
                    }  ?>
               </tbody>
           </table>
           </section>
          </section>