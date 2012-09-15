<div class='pgmIntro'>
<hr>
  <p>
    PRESENTING THE
    <h1><?php echo $pgm['group'] ?></h1>
    IN<br />
    <h1><cite><?php echo $pgm['title'] ?></cite></h1>
    <h2>CONDUCTOR<br/><?php echo $pgm['director'] ?></h2>
  </p>

  <h2><?php echo $pgm['location'] ?><br />
      <?php echo date('F d, Y',$pgm['date']).' at '.date('g:i a T',$pgm['date']) ?>
  </h2>
</div>