

<!DOCTYPE html>
<html>
<head>
    <title>Mafama.com</title>

</head>
<body>
    <div id="pdf_details">
        <div id="pdf" style="padding: 0 20px;">
            <div style="padding: 0 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <div style="padding: 15px 0px;">

                            <?php echo $details['banner']->preview; ?>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div style="width:49%; float: left; margin-right: 2%;">
                            <div style="border: 1px solid #da291c; padding: 10px">
                                  <b>Client Name: </b> <span id="in_client_name"><?php echo e($details['name']); ?></span><br>
                                  <b>Client Phone: </b> <span id="in_client_phone"><?php echo e($details['phone']); ?></span><br>
                                  <b>Client Address</b> <span id="in_client_address"><?php echo e($details['address']); ?></span>
                              </div>
                        </div>
                        <div style="width:49%;  float: left">
                            <div style="border: 1px solid #da291c; padding: 10px">
                                  <b>Client Email: </b> <span id="in_client_email"><?php echo e($details['email']); ?></span><br>
                                  <b>Company Name: </b> <span id="in_client_company"><?php echo e($details['company']); ?></span><br>
                                  <b>Work Phone: </b> <span id="in_company_phone"><?php echo e($details['work_phone']); ?></span>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <h4 style="color: #da291c !important; font-size: 18px; font-weight: bold;padding-top: 82px; margin-bottom: 2px;">Invoice Details</h4>
                      <table style="width: 100%">
                          <thead style="border: 1px solid #da291c">
                              <tr>
                                  <th><div style="border: 1px solid #da291c; padding: 10px;color: #ffffff !important; background: #da291c !important">Transaction Date</div></th>
                                  <th><div style="border: 1px solid #da291c; padding: 10px;color: #ffffff !important; background: #da291c !important">Accounts / Description</div></th>
                                  <th><div style="border: 1px solid #da291c; padding: 10px;color: #ffffff !important; background: #da291c !important">Amount</div></th>
                              </tr>
                              <tr>
                                <td style="padding: 8px;line-height: 1.42857143;vertical-align: middle; border: 1px solid red;background-color: white;color: black; text-align: center"><?php echo e($details['date']); ?></td>
                                <td style="padding: 8px;line-height: 1.42857143;vertical-align: middle; border: 1px solid red;background-color: white;color: black; text-align: center"><?php echo e($details['acc']); ?></td>
                                <td style="padding: 8px;line-height: 1.42857143;vertical-align: middle; border: 1px solid red;background-color: white;color: black; text-align: center"><?php echo e($details['total']); ?></td>
                            </tr>
                          </thead>
                          <tbody id="in_tbody">

                          </tbody>
                          <tfoot style="border: 1px solid #da291c !important; padding: 10px; background-color: #aee9f3 !important; color: #041777 !important;">
                              <td colspan="3">
                                  <table style="width: 100%; padding: 10px;">
                                      <tr>
                                          <td colspan="2" style="text-align: right">
                                              <b> Charged/Bill: </b>
                                          </td>
                                          <td style="text-align: right; padding-right: 10px;">
                                              <span id="in_charged"><?php echo e($details['bill']); ?></span>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" style="text-align: right">
                                            <b> Discount: </b>
                                        </td>
                                        <td style="text-align: right; padding-right: 10px;">
                                            <span id="in_charged"><?php echo e($details['discount']); ?></span>
                                        </td>
                                    </tr>
                                      <tr>
                                          <td colspan="2" style="text-align: right">
                                              <b> Tax: </b>
                                          </td>
                                          <td style="text-align: right; padding-right: 10px;">
                                              <span id="in_tax"><?php echo e($details['tax']); ?></span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" style="text-align: right">
                                              <b> Shipping: </b>
                                          </td>
                                          <td style="text-align: right;  padding-right: 10px;">
                                              <span id="in_shipping"><?php echo e($details['shipping']); ?></span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" style="text-align: right">
                                              <b> Total Amount: </b>
                                          </td>
                                          <td style="text-align: right;  padding-right: 10px;">
                                              <span id="in_total"><?php echo e($details['total']); ?></span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" style="text-align: right">
                                              <b> Amount Paid: </b>
                                          </td>
                                          <td style="text-align: right; padding-right: 10px;">
                                              <span id="in_paid_amount"><?php echo e($details['amt']); ?></span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2" style="text-align: right">
                                              <b> Balance: </b>
                                          </td>
                                          <td style="text-align: right; padding-right: 10px;">
                                              <span id="in_balance"><?php echo e($details['blnc']); ?></span>
                                          </td>
                                      </tr>
                                    </table>
                              </td>
                          </tfoot>
                      </table>
                  </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php /**PATH /home/mafamatest/public_html/resources/views/emails/InvoiceMail.blade.php ENDPATH**/ ?>