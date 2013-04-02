

<?php  
  $event = array(
    'event_date'  => '10/7/2012 3:00pm',
    'show_from'   => '9/12/2012',
    'show_until'  => '+1 hour,event'
     );
   if( getDisplayStatus($event,$setDisplayParams) ) : ?>
    <h1>Concert: Sunday, October 7, 3:00 pm</h1>
  <p>
    
    At the <a href="http://firstpresflorence.org/" title="First Presbyterian Church Florence, AL">First Presbyterian Church of Florence</a> in the fellowship hall. The address is <br>
    <blockquote>
      <addr>
        224 E. Mobile St.<br>
        Florence, AL 35630
      </addr>
    </blockquote>
    Please join us for live concert band music.
  </p>
<?php endif ;  ?>

  <?php  
    $event = array(
      'event_date'  => '12/2/2012 3:00pm',
      'show_from'   => '9/12/2012',
      'show_until'  => '+1 hour,event'
       );
     if( getDisplayStatus($event,$setDisplayParams) ) : ?>
      <h1>Concert: Sunday, December 2, 3:00 pm</h1>
    <p>
      At the <a href="http://firstpresflorence.org/" title="First Presbyterian Church Florence, AL">First Presbyterian Church of Florence</a> in the fellowship hall. The address is <br>
      <blockquote>
        <addr>
          224 E. Mobile St.<br>
          Florence, AL 35630
        </addr>
      </blockquote>
      Join us for our annual concert featuring music of the Christmas season.
    </p>
    
<?php endif ;  ?>

<?php  
  $event = array(
    'event_date'  => '7/26/2012 7:00pm',
    'show_from'   => '7/21/2012',
    'show_until'  => '+1 hour,event'
     );
   if( getDisplayStatus($event,$setDisplayParams) ) : ?>
    <h1>Coming Concert</h1>
  <p>
    At the <a href="http://http://magnoliacoc.org/">Magnolia Church of Christ</a>. The address is <br>
    <blockquote>
      <addr>
        224 East Mobile St.<br>
        Florence, AL 35630
      </addr>
    </blockquote>
    Please join us for live concert band music.
  </p>

<?php endif ;  ?>

  <?php  
    $event = array(
      'event_date'  => '7/31/2011 3:00 pm',
      'show_from'   => 'now',
      'show_until'  => '+2 hours,event'
       );
     if( getDisplayStatus($event,$setDisplayParams) ) : ?>
  <li><a href="http://www.wchandymusicfestival.org/" title="W.C. Handy Music Festival -
  Official Website">W.C. Handy week performances</a>. All concerts are free to the public.
    <ol>
      <li>July 24, 2011 3:00 pm First Presbyterian church of Florence</li>
      <li>July 26, 2011 7:00 pm Magnolia Church of Christ</li>
    </ol>
  </li>
  <?php endif ;  ?>
  <!-- <li>To be announced</li> -->
</ul>

 
  <?php  
    $event = array(
      'event_date'  => '4/11/2010 3:00 pm',
      'show_from'   => '4/1/2010',
      'show_until'  => '+2 hours,event'
       );
     if( getDisplayStatus($event,$setDisplayParams) ) : ?>
     <?php include 'programs/program-100411.php'; ?>
  <?php endif ;  ?>

