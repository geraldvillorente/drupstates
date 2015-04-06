<?php
// Static RFO
$str1 = strtotime('now');
$str2 = strtotime('2019-06-01');
$year1 = date('Y', $str1);
$year2 = date('Y', $str2);
$month1 = date('m', $str1);
$month2 = date('m', $str2);
$diff = ($year2 - $year1) * 12;
print '<input type="hidden" value="'. $diff .'" id="month-spread-php">';
print '<input type="hidden" value="Jun - 19" id="end-of-dp-php">';
print '<input type="hidden" value="Mar - 19" id="rfo-date-php">';
?>

<div id="myModalUnit" class="reveal-modal bldg" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <div class="visual">
    <div class="row"><div class="left"><i><b>BUILDING UNIT</b></i></div></div>
    <center class="facing"><div>FACING</div> ANTIPOLO / MARIKINA <div>VIEW</div></center>
    <div class="floor-plan-layout">
      <p>
        <div class="room three-br available tile" data-type="2 Bedroom" data-unit="1201" data-facing="Facing Amenities" data-area="45" data-balcony="8.5" data-price="3400000"><span>1201</span></div>
        <div class="room two-br tile"><span>1202</span></div>
        <div class="room blank tile"><span></span></div>
        <div class="room two-br tile"><span>1203</span></div>
        <div class="room two-br tile"><span>1204</span></div>
        <div class="room two-br available tile"><span>1205</span></div>
        <div class="room two-br tile"><span>1206</span></div>
        <div class="room two-br tile"><span>1207</span></div>
        <div class="room two-br available tile"><span>1208</span></div>
        <div class="room two-br available tile"><span>1209</span></div>
        <div class="room three-br available tile"><span>1210</span></div>
        <div class="stair tile"></div>
      </p>
      <div class="clear-both hallway"> <b>HALLWAY</b> </div>
      <p>
        <div class="room three-br tile"><span>1211</span></div>
        <div class="room two-br available tile"><span>1212</span></div>
        <div class="room two-br tile"><span>1213</span></div>
        <div class="room two-br tile"><span>1214</span></div>
        <div class="room two-br tile"><span>1215</span></div>
        <div class="room two-br available tile"><span>1216</span></div>
        <div class="room two-br tile"><span>1217</span></div>
        <div class="room one-br tile"><span>1218</span></div>
        <div class="room one-br available tile"><span>1219</span></div>
        <div class="room blank tile"></div>
        <div class="room one-br tile"><span>1220</span></div>
        <div class="room one-br tile"><span>1221</span></div>
        <div class="room three-br available tile"><span>1222</span></div>
      </p>
      <div class="clear-both"></div>
      <center class="facing"><p><div>FACING AMENITIES</div> MANDALUYONG VIEW</p></center>
      <div class="legend large-3 columns">
        <div class="type one-br"><span class="color">&nbsp;</span><b>1 Bedroom</b></div>
        <div class="type two-br"><span class="color">&nbsp;</span><b>2 Bedroom</b></div>
        <div class="type three-br"><span class="color">&nbsp;</span><b>3 Bedroom</b></div>
        <div class="type stairs"><span class="color">&nbsp;</span><b>Stairs</b></div>
      </div>
      <div class="large-6 text-center columns">
        <h3 class="tower-label"></h3>
        <div>12TH FLOOR PLAN</div>
        <div>2013 NOV 12</div>
        <div>DESIGN - 12 - 11 - 005</div>
      </div>
      <div class="large-3 columns">
        <select>
          <option> 1ST FLOOR </option>
          <option> 2ND FLOOR </option>
          <option> 3RD FLOOR </option>
          <option> 4TH FLOOR </option>
          <option> 5TH FLOOR </option>
          <option> 6TH FLOOR </option>
          <option> 7TH FLOOR </option>
          <option> 8TH FLOOR </option>
          <option> 9TH FLOOR </option>
          <option> 10th FLOOR </option>
          <option> 11th FLOOR </option>
          <option selected> 12th FLOOR </option>
        </select>
        <p class="table-units"><a href="#"> list of available units </a></p>
      </div>
    </div>
  </div>
  <div class="clear-both"></div>
  <div class="available-units">
    <p class="table-back"><a href="#">Back</a></p>
    <table width="100%">
      <thead>
        <tr>
          <th>Unit</th>
          <th>Type</th>
          <th>Floor</th>
          <th>Tower</th>
        </tr>
      </thead>
      <tbody>
        <tr class="available three-br" data-type="2 Bedroom" data-unit="1201" data-facing="Facing Amenities" data-area="45" data-balcony="8.5" data-price="3400000">
          <td>1201</td>
          <td>3 Bedroom</td>
          <td>12th Floor</td>
          <td>West Tower</td>
        </tr>

        <tr class="available one-br">
          <td>1205</td>
          <td>2 Bedroom</td>
          <td>12th Floor</td>
          <td>West Tower</td>
        </tr>

        <tr class="available two-br">
          <td>1208</td>
          <td>2 Bedroom</td>
          <td>12th Floor</td>
          <td>West Tower</td>
        </tr>

        <tr class="available two-br">
          <td>1209</td>
          <td>2 Bedroom</td>
          <td>12th Floor</td>
          <td>West Tower</td>
        </tr>

        <tr class="available three-br">
          <td>1210</td>
          <td>3 Bedroom</td>
          <td>12th Floor</td>
          <td>West Tower</td>
        </tr>
      </tbody>
    </table>
  </div>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<div id="myModalParking" class="reveal-modal bldg" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <div class="row"><div class="left"><i><b>PARKING AREA</b></i></div></div>
  <center class="facing"><div>FACING</div> ANTIPOLO / MARIKINA <div>VIEW</div></center>
  <div class="floor-plan-layout">
    <p>
      <div class="room parking available tile" data-type="" data-unit="501" data-facing="Parking" data-area="5" data-balcony="0" data-price="740000"><span>1201</span></div>
      <div class="room parking tile"><span>1202</span></div>
      <div class="room parking tile"><span>1203</span></div>
      <div class="room parking tile"><span>1204</span></div>
      <div class="room parking tile"><span>1205</span></div>
      <div class="room parking available tile"><span>1206</span></div>
      <div class="room parking tile"><span>1207</span></div>
      <div class="room parking tile"><span>1208</span></div>
      <div class="room parking available tile"><span>1209</span></div>
      <div class="room parking available tile"><span>1210</span></div>
      <div class="room parking available tile"><span>1211</span></div>
      <div class="stair tile"></div>
    </p>
    <div class="clear-both hallway"></div>
    <p>
      <div class="room parking tile"><span>1211</span></div>
      <div class="room parking available tile"><span>1212</span></div>
      <div class="room parking tile"><span>1213</span></div>
      <div class="room parking tile"><span>1214</span></div>
      <div class="room parking tile"><span>1215</span></div>
      <div class="room parking available tile"><span>1216</span></div>
      <div class="room parking tile"><span>1217</span></div>
      <div class="room parking tile"><span>1218</span></div>
      <div class="room parking available tile"><span>1219</span></div>
      <div class="room parking tile"><span>1220</span></div>
      <div class="room parking tile"><span>1221</span></div>
    </p>
    <div class="clear-both"></div>
    <center class="facing"><p><div>FACING AMENITIES</div> MANDALUYONG VIEW</p></center>
    <div class="legend large-3 columns">
      &nbsp;
    </div>
    <div class="large-6 text-center columns">
      <h3 class="tower-label"></h3>
      <div>5TH FLOOR PLAN</div>
      <div>2013 NOV 12</div>
      <div>DESIGN - 12 - 11 - 005</div>
    </div>
    <div class="large-3 columns">
      <select>
        <option> 1ST FLOOR </option>
        <option> 2ND FLOOR </option>
        <option> 3RD FLOOR </option>
        <option> 4TH FLOOR </option>
        <option selected> 5TH FLOOR </option>
      </select>
      <p><a href="#"> view available units </a></p>
    </div>
  </div>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<div class="bpc">
  <div class="row select-computation">
    <div class="large-4 columns active" data-select="Unit"><b>BUILDING UNIT</b></div>
    <div class="large-4 columns" data-select="Parking"><b>PARKING AREA</b></div>
    <div class="large-4 columns" data-select="Drying"><b>DRYING AREA</b></div>
  </div>
  <div class="sheet">
    <div class="row">
      <div class="large-6 columns">
        <table>
          <tbody>
            <tr>
              <td class="label">project</td>
              <td>Lumiere Residences</td>
            </tr>
            <tr>
              <td class="label">building</td>
              <td>
              <select id="select-bldg">
                 <option>-- Select Building --</option>
                 <option>West Tower</option>
                 <option>East Tower</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="label">unit</td>
              <td><a href="#" data-reveal-id="myModal" id="unit-selected">-- Select Unit--</a></td>
            </tr>
            <tr>
              <td class="label">area</td>
              <td id="unit-area"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="large-6 columns">
        <table>
          <tbody>
            <tr>
              <td class="label">rfo date</td>
              <td id="rfo-date"></td>
            </tr>
            <tr>
              <td class="label">end of dp</td>
              <td id="end-of-dp"></td>
            </tr>
            <tr>
              <td class="label">no. of months spread</td>
              <td id="month-spread"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row term">
      <div class="large-12 columns large-centered">
        <table>
          <tbody>
            <tr>
              <td class="label">terms</td>
              <td>
                <select id="select-term">
                  <option> -- Select Term -- </option>
                  <option value="6">30% in 48 Mos. 70% BANK FINANCING</option>
                  <option value="7">40% in 38 Mos. 60% BANK FINANCING</option>
                  <option value="8">50% in 28 Mos. 50% BANK FINANCING</option>
                  <option value="9">60% in 18 Mos. 40% BANK FINANCING</option>
                  <option value="10">70% in 08 Mos. 30% BANK FINANCING</option>
                </select>
                <input type="hidden" data-downpayment="30" data-bank="70" />
                <input type="hidden" data-downpayment="40" data-bank="60" />
                <input type="hidden" data-downpayment="50" data-bank="50" />
                <input type="hidden" data-downpayment="60" data-bank="40" />
                <input type="hidden" data-downpayment="70" data-bank="30" />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row calc">
      <div class="large-12 columns large-centered">
        <table>
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th>Unit</th>
              <th>Closing Fee</th>
              <th>Total</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><b class="highlight">unit price</b></td>
              <td></td>
              <td></td>
              <td><b id="calc-unit-price-amount"></b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Regular Discount</td>
              <td class="underline"><b id="calc-reg-discount-label"></b></td>
              <td></td>
              <td id="calc-reg-discount-amount"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b class="highlight">net</b></td>
              <td></td>
              <td></td>
              <td><b id="calc-net-amount"></b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Discount (PDC)</td>
              <td class="underline"><b id="calc-pdc-discount-label"></b></td>
              <td></td>
              <td id="calc-pdc-discount-amount"></td>
              <td><sub><i>Divided in DP Period</i></sub></td>
              <td></td>
            </tr>
            <tr>
              <td><b class="highlight">Total Contract Price</b></td>
              <td></td>
              <td></td>
              <td class="underline"><b id="calc-total-price"></b></td>
              <td><span id="calc-dp-period-label"></span> - <b id="calc-dp-period-amount"></b></td>
              <td></td>
            </tr>
            <tr>
              <td><b class="highlight">Downpayment</b></td>
              <td><b id="calc-downpayment-label"></b></td>
              <td></td>
              <td><b id="calc-downpayment-amount"></b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Additional Discount</td>
              <td></td>
              <td></td>
              <td class="underline"><b> - </b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b class="highlight">Net Downpayment</b></td>
              <td></td>
              <td></td>
              <td><b id="calc-net-downpayment-amount"></b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Less: Reservation Fee</td>
              <td></td>
              <td></td>
              <td class="underline" id="reservation-fee"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b class="highlight">Net Downpayment</b></td>
              <td></td>
              <td></td>
              <td><b id="calc-net-downpayment-amount-2"></b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b class="highlight">Payable in</b></td>
              <td><b id="calc_payable_in_label"></b></td>
              <td>Months</td>
              <td class="underline"><b class="calc_payable_in_amount"></b></td>
              <td><b>6,525.17</b></td>
              <td><b class="calc_payable_in_amount"></b> / Month</td>
            </tr>
            <tr>
              <td><b class="highlight">Balance</b></td>
              <td class="underline"><b id="balance_label"></b></td>
              <td></td>
              <td class="underline"><b id="balance_amount"></b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b class="highlight">Estimated Bank Financing</b></td>
              <td><b>10</b></td>
              <td>Years</td>
              <td><b>26,309.00</b></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="underline">
              <td></td>
              <td><b>15</b></td>
              <td>Years</td>
              <td><b>20,631.00</b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b class="highlight">Total Contract Price</b></td>
              <td></td>
              <td></td>
              <td><b class="total_contract_price_amount"></b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Downpayment Discount</td>
              <td></td>
              <td></td>
              <td class="underline"><b> - </b></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b class="highlight">net contract price</b></td>
              <td></td>
              <td></td>
              <td><b class="total_contract_price_amount"></b></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row important">
      <div class="large-12 columns large-centered">
        <ul>
          <i>
          <ol>
            <li>Reservation fee is NOW REFUNDABLE and valid for 30 days only. Failure to submit required documents within 30 days will cause AUTOMATIC CANCELLATION of reservation. (Please refer to ReservationAgreement for list of documents)</li>
            <ul class="child">
              <li>If reservation date is from <b>1st - 7th</b> of the month, downpayment will start on the <b>7th</b> of the succeeding month.</li>
              <li>If reservation date is from <b>8th - 15th</b> of the month, downpayment will start on the <b>15th</b> of the succeeding month.</li>
              <li>If reservation date is from <b>16th - 22nd</b> of the month, downpayment will start on the <b>22nd</b> of the succeeding month.</li>
              <li>If reservation date is from <b>23rd - 30th</b> of the month, downpayment will start on the <b>30th</b> of the succeeding month (or <b>28th if February</b>)</li>
            </ul>
            <li>Downpayment and Balance upon turnover should be fully covered by POST DATED CHECKS.</li>
            <li>CLOSING FEES: this covers Documentary Stamp Tax, Transfer Fees, Registration Fees, Notarial and documentation fees and other administrative and handling fees in order to transfer title to buyer's name.</li>
            <li>Condo dues: Upon unit turnover, buyer will be assessed of Joining fees, Meralco deposit, water meter deposit, association dues and other charges.</li>
            <li>Prices are subject to change without prior notice. Unit areas may change based on the final construction drawings.</li>
          </ol>
          </i>
        </ul>
      </div>
    </div>

  </div>
</div>