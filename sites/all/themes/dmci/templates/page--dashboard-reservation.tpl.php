<div class="reservation-list large-11 columns large-centered">
  <table width="100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Unit</th>
        <th>Development</th>
        <th>Unit Type</th>
        <th>Reservation Date</th>
        <th>Reserved By</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Gilda Glatz</td>
        <td>101</td>
        <td>The Birchwood</td>
        <td>2 - Bedroom</td>
        <td>4 / 1 / 2014</td>
        <td>Zena Bumgardner</td>
        <td>APPROVED</td>
      </tr>

      <tr>
        <td>Cyndia Bengston</td>
        <td>102</td>
        <td>The Birchwood</td>
        <td>3 - Bedroom</td>
        <td>4 / 2 / 2014</td>
        <td>Zella Schuller</td>
        <td>DENIED</td>
      </tr>

      <tr>
        <td>Gilda Glatz</td>
        <td>103</td>
        <td>The Birchwood</td>
        <td>3 - Bedroom</td>
        <td>4 / 3 / 2014</td>
        <td>Zena Bumgardner</td>
        <td class="pending" data-reveal-id="myModal" class="myModal"><a href="#">PENDING</a></td>
      </tr>
    </tbody>
  </table>
</div>

<div id="myModal" class="reveal-modal tiny" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <div class="large-12 columns units approval large-centered">
    <div class="large-12 columns bldg">
      <center> SELECT ACTION </center>
    </div>
    <select class="large-12 columns">
      <option>APPROVED</option>
      <option>DECLINED</option>
      <option>DENIED</option>
      <option>SOLD</option>
    </select>

    <button class="large-12 columns right close-approval"> DONE </button>
    <div class="clear-both"></div>
  </div>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>