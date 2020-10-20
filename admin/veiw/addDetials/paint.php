<?php?>
<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Information Form

            </header>
            <div class="panel-body">
                <form class="form-inline" role="form">
                    <leabel>FullName:</leabel>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">FullName</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter FullName">
                    </div>


                </form>

            </div>
          
            <label class="" style="margin-right: 10px; font-family: Geneva, Tahoma, sans-serif">Insert Resume:</label>
            <div id="Mycontainer">
                <div id="toolbar">
                    <div id="color">Colors:<input type="color" value="#000" name="myColor" id="myColor"></div>
                    <div id="range" style="color: aliceblue;">Size:50 <input type="range" name="myRange" id="myRange" value="1" min="1" max="50">1</div>
                    <button id="brush">
                        <img id="imgicon" src="../public/admin/img/pen.png">
                    </button>
                    <button id="erase">
                        <img id="imgicon" src="../public/admin/img/erase2.png">
                    </button>
                    <button id="save" class="">Save</button>
                    <button id="reset">Reset</button>
                </div>
                <canvas id="canvas" width="796px" height="535px"></canvas>
            </div>
        </section>

    </section>
</section>

<?php?>