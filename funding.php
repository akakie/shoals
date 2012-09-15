<?php
  // Configure page headers
  $pageTitle   = "Funding and Donations";
  $pageContent = "Finding funding for the Fairbanks Community Band";
  $pageKeywords= "funding, grants, donations";
  $pageStyle   = "";
  $dataFile    = "";
  $download    = false;
  $sortTable   = false;

  require_once 'site.inc';  // site-wide definitions
  
  // Add local configuration for the page
  $pageNotes = 
    '<h2>ToDo List</h2>
    <p>For this page</p>
    <ul>
      <li>Need EIN</li>
      <li>Confirm location of IRS letter</li>
      <li>Review and revise as needed</li>
    </ul>
    ';
  $pageNav = 'funds-nav.php';
  require_once 'page-sidebar.inc';
?>


  <div id="content"> <!-- page content -->

  <h1 id="raising_funds">Raising funds</h1>
  <p>
    As a non-profit corporation, the band is dependent on donations from individuals and businesses, and on grants for foundations and government. We have developed some guidelines, available from this page, which tell both band members and prospective donors what to expect from the fundraising process.
  </p>

  <p>
    Band members and supporters are encouraged to be aware of opportunities to seek grants to support our activities. Requests for funds made in the name of the band must be approved by the board. They must be signed by an officer of the board. Anyone is welcome to put together a grant request and submit it to the board for review. To aid this process, we provide sources for the supporting information needed by most granting agencies.
  </p>

  <h2 id="first_steps">First Steps</h2>
  <p>Before proceeding, please read the pages below:</p>
  <ul>
    <li><a href="funds-need.php">Paying for the band</a></li>
    <li><a href="funds-guide.php">Guidelines for donations</a></li>
  </ul>

  <dl>
    <dt>Tax exempt status</dt>
    <dd>
      Our status as a 501(c)(3) tax exempt organization is documented by a letter from the IRS. A copy of the letter is available from the Board <a href="contacts.php">Secretary</a>. Granting agencies will also want our Tax ID Number, known as TIN or EIN, which is 
      <?php echo $EIN;?>.
    </dd>
    <dt>Financial statements</dt>
    <dd>
      <p>Budget for the current year to date</p>
      <p>For the prior year</p>
      <ul>
        <li>Balance sheet (Statement of Financial Position)</li>
        <li>Income statement</li>
        <li>Cash flow (not usually requested)</li>
      </ul>
      <p>These are available by email from the Board <a href="contacts.php">Treasurer</a>.</p>
    </dd>
    <dt>Purpose of the grant</dt>
    <dd>Grant requests are for something specific that we need to support our mission. That mission is summarized at the top of our <a href="http://communityband.org/">home page</a>. We purchase music and equipment, including percussion instruments and stands, music stands, folders for music, and other commonly used gear. We also seek support for activities to improve our performance such as clinics and workshops, and attendance at local festivals for members. Ask the Board.
    </dd>
    <dt>About the band</dt>
    <dd>
      The website includes a brief history, our articles of incorporation and bylaws, lists of music we play or want to play, a performance history including recent programs, and our current schedule.
    </dd>

  </dl>

<?php require_once $pageEnd; ?>