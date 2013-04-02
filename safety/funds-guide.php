<?php
  // Configure page headers
  $pageTitle   = "Donations";
  $pageContent = "Finding funding for the Fairbanks Community Band";
  $pageKeywords= "donate,contribute,support,grant";
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
      <li>Localize</li>
      <li>Verify with Treasurer</li>
    </ul>
    ';
  $pageNav = 'funds-nav.php';
  require_once 'page-sidebar.inc';
?>

  <div id="content"> <!-- page content -->
        
  <h1 id="donation">How the band solicits and recognizes donation</h1>

    <p>This document may assist members in soliciting donations or in writing grant applications. It describes the uses we make of donations, how we acknowledge them, how we manage donated funds, and the uses to which donations of various types can but put.</p>

    <h2 id="donations">Donations</h2>

    <p>Instead of a cash contribution, often there can be significant tax advantages by donating securities or other assets directly to the Band. Another creative contribution method is to include us in your estate plans. (Contact your accountant or your attorney for details.)</p>

    <p>Furthermore, many companies have a Matching Gifts Program. Check with your employer to see if they can multiply the value of your gift through such a program.</p>

    <p>Donations may be directed to any combination of</p>

    <ol>
      <li>the general fund (unrestricted), used for day to day operations of the Band</li>
      <?php
      if($endow) {
      echo '<li>our new endowment fund (permanently restricted), which will provide sustainable income for the Band</li>';
      }
      ?>
      <li>the music fund (Board restricted), used to purchase music held by the Band for performance</li>
    </ol>

    <h3 id="generalfund">General Fund</h3>

    <p>The general fund pays for day to day operation of the Band. Use of the general fund is unrestricted and may be spent at the discretion of the Board.</p>

<?php
  if($endow) {
  echo 
    '<h3 id="endowmentfund">Endowment Fund</h3>

    <p>In an effort to ensure long-term, self-sustaining, independent financing, we have proposed an Endowment Fund, with an initial target of $200,000. At the target level, the yield generated from the endowment alone would be sufficient to finance much of the Band’s operations, as well as modestly augmenting the principal each year to guard against inflation. The principal of the endowment fund is permanently restricted and may not be spent for operations.</p>';
  }
?>

    <h3 id="musicfund">Music Fund</h3>

    <p>The music fund is restricted by the Board to expenditures for music, including commissioning new compositions or arrangements.</p>

    <h2 id="acknowledgingdonations">Acknowledging donations</h2>

    <p>As a thank you, donors will receive:</p>

    <ol>
      <li>A personal thank you letter from the Band</li>

      <li>A receipt for your donation for tax purposes</li>

      <li>Your name in our list of donors for that year (in programs and on web site)</li>

      <li>Mention in applause section of the Daily News-Miner</li>

    </ol>

    <h3 id="thankyouletter">Thank you letter</h3>

    <p>The thank you letter should include:</p>
    <ul>
      <li>The value of the contribution</li>
      <li>What was donated (music, goods, services, for example)</li>
      <li>How the donor will be recognized (in programs, on web site, for example)</li>
      <li>A reminder that donations are tax deductible</li>
      <li>The tax identification number of the  <?php echo $org." (".$EIN.")";?>.
    </ul>

  <?php require_once ("footer.inc"); ?>
  </div><!-- end content -->
</body>
</html>
