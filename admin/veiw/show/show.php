<section id="main-content">
    <section class="wrapper">
        <?php
    
        for ($i = 0; $i < count($resualt); $i++) : ?>
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        <?php echo $resualt[$i]['name']; ?>

                    </header>
                    <div class="panel-body">
                        <div id="hero-donut" class="graph">
                            <img  width="400px" height="400px" src="  <?php echo $resualt[$i]['URL']; ?>">
                        </div>
                    </div>
                </section>
            </div>
        <?php endfor; ?>
    </section>
</section>