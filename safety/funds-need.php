  <?php
    // Configure page headers
    $pageTitle   ="Funding and Donations";
    $pageContent ="Steps in seeking funding for the band";
    $pageKeywords="funding, grants, donations";
    $pageStyle   ="";
    $dataFile    = "";
    $download    = false;
    $sortTable   = false;

    require_once 'site.inc';  // site-wide definitions
    
    // Add local configuration for the page
    $pageNotes = 
      '<h2>ToDo List</h2>
      <p>For this page</p>
      <ul>
        <li>Get annual operating cost</li>
        <li>Get IRS tax number (EIN)</li>
        <li>Revise PDF donor form</li>
        <li>Localize or remove newspaper reference</li>
        <li>Verify funds structure with Treasurer</li>
      </ul>
      ';
    $pageNav = 'funds-nav.php';
    require_once 'page-sidebar.inc';
  ?>

  </div><!-- end sidebar -->

  <div id="content"> <!-- page content -->
    
  <h1 id="how_we_pay_for_the_band">How We Pay for the Band</h1>

<p>Some of our funding comes from concert proceeds, dues and other contributions from members.</p>

<p>We also receive grants from various individuals and organizations.</p>

<p>Our major source of funding, however, is from YOU. With an annual operating budget of 
   <?php echo $opBudget;?>
   we depend on your generous contributions to our organization towards General Operating Support.</p>

<!-- <p>Additionally, in an effort to ensure long-term, self-sustaining, independent financing, we have established an Endowment Fund, with a target of $200,000. The yield alone generated from this endowment would be sufficient to finance much of the Band&#8217;s operations, as well as modestly augmenting the principal each year to guard against inflation.</p> -->

<p>Instead of a cash contribution, often there can be significant tax advantages by donating securities or other assets directly to the Band. Another creative contribution method is to include us in your estate plans. (Contact your accountant or your attorney for details.)</p>

<p>Furthermore, many companies have a Matching Gifts Program. Check with your employer to see if they can multiply the value of your gift through such a program.</p>

<p>We thank you for any contribution you can make.</p>

<p>Remember that your donation is tax-deductible. We are a non-profit, tax-exempt organization under IRS &#167; 501(c)(3). 
Our Tax ID is <?php echo $EIN;?>. We will provide a receipt for anyone who provides us a name and address with their contribution.</p>

<p>Contributions should be made to:</p>

<p><?php echo $addressMail;?></p>

<p>Click to download and view a <a href="donate.pdf">donor form</a>. Print and fill in the form, following the instructions on the page.</p>

  <?php require_once ("footer.inc"); ?>
</div> <!-- end content -->

</body>
</html>