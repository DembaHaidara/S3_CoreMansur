<?php require "view_begin.php" ?>


<div class="lookbook">
  <div class="box-look">
    <div class="look 1">
      <img src="./Content/img/galerie/1.jpg" />
      <img src="./Content/img/galerie/2.jpg" />
      <img src="./Content/img/galerie/3.jpg" />
      <img src="./Content/img/galerie/4.jpg" />
      <img src="./Content/img/galerie/5.jpg" />
    </div>
    <div class="look 2">
      <img src="./Content/img/galerie/6.jpg" />
      <img src="./Content/img/galerie/7.jpg" />
      <img src="./Content/img/galerie/8.jpg" />
      <img src="./Content/img/galerie/9.jpg" />
      <img src="./Content/img/galerie/10.jpg" />
    </div>
    <div class="look 3">
      <img src="./Content/img/galerie/11.jpg" />
      <img src="./Content/img/galerie/12.jpg" />
      <img src="./Content/img/galerie/13.jpg" />
      <img src="./Content/img/galerie/14.jpg" />
      <img src="./Content/img/galerie/15.jpg" />
    </div>
  </div>
</div>
<style type="text/css">
    
    /* debut css lookbook */
.lookbook {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin: 8% 200px 0 200px;
}

.lookbook .box-look {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.lookbook .box-look .look {
  display: flex;
  flex-direction: column;
  width: 32.5%;
  /* box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.19); */
}
.lookbook .box-look .look img {
  width: 100%;
  padding-bottom: 15px;
  border-radius: 0px;
}

@media only screen and (max-width: 769px) {
  .lookbook .box-look {
    flex-direction: column;
  }

  .lookbook .box-look .look {
    width: 100%;
  }
}
/* fin css lookbook */
</style>

<?php require "view_end.php" ?>