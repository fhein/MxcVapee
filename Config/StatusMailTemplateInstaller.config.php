<?php

return array (
    'sORDERSTATEMAIL9' =>
        array (
            'name' => 'sORDERSTATEMAIL9',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Der aktuelle Status Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} lautet:

                             {$sOrder.cleared_description}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Statusänderung zu Ihrer Bestellung  {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 9,
        ),
    'sORDERSTATEMAIL10' =>
        array (
            'name' => 'sORDERSTATEMAIL10',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Der aktuelle Status Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} lautet:

                             {$sOrder.cleared_description}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Statusänderung zu Ihrer Bestellung  {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 10,
        ),
    'sORDERSTATEMAIL13' =>
        array (
            'name' => 'sORDERSTATEMAIL13',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

sicher haben Sie die Fälligkeit unserer Rechnung zu Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} übersehen.
Wir möchten Sie freundlich darum bitten, den ausstehnenden Betrag zu bezahlen.

Die Details Ihrer Bestellung:
=============================
{foreach item=details key=position from=$sOrderDetails}
{$position+1|fill:3}      {$details.articleordernumber}     {$details.name|fill:30}     {$details.quantity} x {$details.price|string_format:"%.2f"} {$sOrder.currency}
{/foreach}

Versandkosten: {$sOrder.invoice_shipping|string_format:"%.2f"} {$sOrder.currency}
Netto-Gesamt: {$sOrder.invoice_amount_net|string_format:"%.2f"} {$sOrder.currency}
Gesamtbetrag inkl. MwSt.: {$sOrder.invoice_amount|string_format:"%.2f"} {$sOrder.currency}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Zahlungserinnerung zu Ihrer Bestellung  {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 13,
        ),
    'sORDERSTATEMAIL16' =>
        array (
            'name' => 'sORDERSTATEMAIL16',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

bedauerlicherweise haben Sie auf unsere Zahlungserinnerung und unsere Mahnungen nicht reagiert. Wir haben deshalb ein Inkasso-Unternehmen damit beauftragt, unseren berechtigten Anspruch auf Zahlung durchzusetzen.
Die Kosten für die Arbeit dieses Unternehmens gehen zu Ihren Lasten, da Sie mit der Zahlung in Verzug sind.

Die Details Ihrer Bestellung:
=============================
{foreach item=details key=position from=$sOrderDetails}
{$position+1|fill:3}    {$details.articleordernumber|fill:15}    {$details.name|fill:30}    {$details.quantity|fill:5} x {$details.price|string_format:"%.2f"|fill:8} {$sOrder.currency}
{/foreach}

Versandkosten: {$sOrder.invoice_shipping|string_format:"%.2f"} {$sOrder.currency}
Netto-Gesamt: {$sOrder.invoice_amount_net|string_format:"%.2f"} {$sOrder.currency}
Gesamtbetrag inkl. MwSt.: {$sOrder.invoice_amount|string_format:"%.2f"} {$sOrder.currency}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Information über Inkassoauftrag betreffend Ihre Bestellung  {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 16,
        ),
    'sORDERSTATEMAIL15' =>
        array (
            'name' => 'sORDERSTATEMAIL15',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

wir bitten Sie letztmalig um Bezahlung unserer Rechnung zu Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"}.
Wir weisen Sie darauf hin, dass wir ein Inkasso-Unternehmen beauftragen werden, sollten Sie dieser Zahlungsaufforderung nicht nachkommen.

Details zu Ihrer Bestellung:
============================
{foreach item=details key=position from=$sOrderDetails}
{$position+1|fill:3}      {$details.articleordernumber}     {$details.name|fill:30}     {$details.quantity} x {$details.price|string_format:"%.2f"} {$sOrder.currency}
{/foreach}

Versandkosten: {$sOrder.invoice_shipping|string_format:"%.2f"} {$sOrder.currency}
Netto-Gesamt: {$sOrder.invoice_amount_net|string_format:"%.2f"} {$sOrder.currency}
Gesamtbetrag inkl. MwSt.: {$sOrder.invoice_amount|string_format:"%.2f"} {$sOrder.currency}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => '3. Mahnung zu Ihrer Bestellung {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 15,
        ),
    'sORDERSTATEMAIL14' =>
        array (
            'name' => 'sORDERSTATEMAIL14',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

wir bitten Sie heute erneut um Bezahlung unserer Rechnung zu Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"}.

Details zu Ihrer Bestellung:
============================
{foreach item=details key=position from=$sOrderDetails}
{$position+1|fill:3}      {$details.articleordernumber}     {$details.name|fill:30}     {$details.quantity} x {$details.price|string_format:"%.2f"} {$sOrder.currency}
{/foreach}

Versandkosten: {$sOrder.invoice_shipping|string_format:"%.2f"} {$sOrder.currency}
Netto-Gesamt: {$sOrder.invoice_amount_net|string_format:"%.2f"} {$sOrder.currency}
Gesamtbetrag inkl. MwSt.: {$sOrder.invoice_amount|string_format:"%.2f"} {$sOrder.currency}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => '2. Mahnung zu Ihrer Bestellung {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 14,
        ),
    'sORDERSTATEMAIL12' =>
        array (
            'name' => 'sORDERSTATEMAIL12',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Wir bestätigen den Eingang Ihrer Zahlung zu Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"}.
Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Ihre Bestellung {$sOrder.ordernumber} bei {config name=shopName} wurde bezahlt',
            'status' => 12,
        ),
    'sORDERSTATEMAIL17' =>
        array (
            'name' => 'sORDERSTATEMAIL17',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Der aktuelle Status Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} lautet:

                             {$sOrder.status_description}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Statusänderung zu Ihrer Bestellung {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 17,
        ),
    'sORDERSTATEMAIL18' =>
        array (
            'name' => 'sORDERSTATEMAIL18',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Der aktuelle Status Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} lautet:

                             {$sOrder.status_description}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Statusänderung zu Ihrer Bestellung  {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 18,
        ),
    'sORDERSTATEMAIL19' =>
        array (
            'name' => 'sORDERSTATEMAIL19',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Der aktuelle Status Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} lautet:

                             {$sOrder.status_description}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Die Lieferung zu Ihrer Bestellung  {$sOrder.ordernumber} bei {config name=shopName} verzögert sich',
            'status' => 19,
        ),
    'sORDERSTATEMAIL20' =>
        array (
            'name' => 'sORDERSTATEMAIL20',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Der aktuelle Status Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} lautet:

                             {$sOrder.status_description}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Gutschrift zu Ihrer Bestellung  {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 20,
        ),
    'sORDERSTATEMAIL1' =>
        array (
            'name' => 'sORDERSTATEMAIL1',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Ihre Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} ist nun in Bearbeitung.
Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Guten Tag {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      vielen Dank für Ihre Bestellung vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} bei {config name=shopName}.
                                      <br><br>
                                      Wir haben Ihre Zahlung erhalten, vielen Dank. Ihre Bestellung mit der Nummer {$sOrder.ordernumber} ist nun in Bearbeitung. 
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Ihre Bestellung {$sOrder.ordernumber} bei {config name=shopName} ist in Bearbeitung!',
            'status' => 1,
        ),
    'sORDERSTATEMAIL2' =>
        array (
            'name' => 'sORDERSTATEMAIL2',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Der Prozess zu Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} ist nun abgeschlossen.
Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Guten Tag {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      anbei erhalten Sie die Rechnung zu Ihrer Bestellung mit der Bestellnummer {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d.%m.%Y"}.
                                      <br><br>
                                      Wir bedanken uns für Ihr Vertrauen und wünschen Ihnen viel Freude an Ihren Artikeln.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Rechnung zu Ihrer Bestellung {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 2,
        ),
    'sORDERSTATEMAIL11' =>
        array (
            'name' => 'sORDERSTATEMAIL11',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Der aktuelle Status Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} lautet:

                             {$sOrder.status_description}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Hallo {$sUser.billing_salutation|salutation} {$sUser.billing_firstname} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun {$sOrder.cleared_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Statusänderung zu Ihrer Bestellung  {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 11,
        ),
    'sORDERSTATEMAIL5' =>
        array (
            'name' => 'sORDERSTATEMAIL5',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Die von Ihnen mit Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} angeforderten Artikel sind nun fertig zum Versand.
Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Guten Tag {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun: {$sOrder.status_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Ihre Bestellung {$sOrder.ordernumber} bei {config name=shopName} ist versandfertig!',
            'status' => 5,
        ),
    'sORDERSTATEMAIL3' =>
        array (
            'name' => 'sORDERSTATEMAIL3',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Der Prozess zu Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} ist nun teilweise abgeschlossen.
Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}
',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Guten Tag {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Der Status Ihrer Bestellung mit der Bestellnummer: {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:" %d-%m-%Y"} hat sich geändert.
                                      <br><br>
                                      Der neue Status lautet nun: {$sOrder.status_description}.
      																</multiline>
      															</td>
      														</tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Ihre Bestellung {$sOrder.ordernumber} bei {config name=shopName} ist teilweise abgeschlossen',
            'status' => 3,
        ),
    'sORDERSTATEMAIL8' =>
        array (
            'name' => 'sORDERSTATEMAIL8',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Es gibt Klärungsbedarf zu Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"}. Wir werden uns diesbezüglich mit Ihnen in Verbindung setzen.
Gern stehen wir Ihnen zur Verfügung, wenn Sie Ihrerseits Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Guten Tag {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Sie haben für Ihre Bestellung {$sOrder.ordernumber} Zahlung per Vorkasse gewählt.
                                      <br><br>
                                      Damit Sie Ihre Artikel rasch bekommen, beachten Sie bitte, dass wir Ihre Bestellung erst nach Eingang Ihrer Zahlung weiter bearbeiten können.
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
                                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                                      <multiline>
                                      Den aktuellen Status Ihrer Bestellung  können Sie auch jederzeit auf unserer Webseite im  Bereich "Mein Konto" - "Meine Bestellungen" abrufen.
                                      </multiline>
                                    </td>
                                  </tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Information zu Ihrer Bestellung {$sOrder.ordernumber} bei {config name=shopName} - Vorkasse',
            'status' => 8,
        ),
    'sORDERSTATEMAIL4' =>
        array (
            'name' => 'sORDERSTATEMAIL4',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Ihre Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} wurde storniert.
Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Guten Tag {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      der Bestellstatus für Ihre Bestellung {$sOrder.ordernumber} hat sich geändert!
                                      <br><br>
                                      Die Bestellung hat jetzt den Status: {$sOrder.status_description}.
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
                                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                                      <multiline>
                                      Den aktuellen Status Ihrer Bestellung  können Sie auch jederzeit auf unserer Webseite im  Bereich "Mein Konto" - "Meine Bestellungen" abrufen.
                                      <br><br>
                                      Sollten Sie allerdings den Kauf ohne Registrierung, also ohne Anlage eines Kundenkontos, gewählt haben, steht Ihnen diese Möglichkeit nicht zur Verfügung.
                                      </multiline>
                                    </td>
                                  </tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Stornierung Ihrer Bestellung {$sOrder.ordernumber} bei {config name=shopName}',
            'status' => 4,
        ),
    'sORDERSTATEMAIL6' =>
        array (
            'name' => 'sORDERSTATEMAIL6',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

vielen Dank für Ihr Vertrauen. Die Artikel Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} wurden teilweise ausgeliefert.
Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
															  <multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Guten Tag {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      der Bestellstatus für Ihre Bestellung {$sOrder.ordernumber} hat sich geändert!
                                      <br><br>
                                      Die Bestellung hat jetzt den Status: {$sOrder.status_description}.
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
                                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                                      <multiline>
                                      Den aktuellen Status Ihrer Bestellung  können Sie auch jederzeit auf unserer Webseite im  Bereich "Mein Konto" - "Meine Bestellungen" abrufen.
                                      <br><br>
                                      Sollten Sie allerdings den Kauf ohne Registrierung, also ohne Anlage eines Kundenkontos, gewählt haben, steht Ihnen diese Möglichkeit nicht zur Verfügung.
                                      </multiline>
                                    </td>
                                  </tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Ihre Bestellung {$sOrder.ordernumber} bei {config name=shopName} wurde teilweise versandt!',
            'status' => 6,
        ),
    'sORDERSTATEMAIL7' =>
        array (
            'name' => 'sORDERSTATEMAIL7',
            'type' => 3,
            'is_html' => true,
            'content_text' => '{include file="string:{config name=emailheaderplain}"}Sehr geehrte{if $sUser.billing_salutation == "mr"}r{/if} {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},

die Artikel zu Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} sind auf dem Weg zu Ihnen.
Über den Link unten können Sie Ihre Sendung verfolgen.

Versanddienstleister: DHL
Link zur Sendungsverfolgung: https://nolp.dhl.de/nextt-online-public/de/search?piececode={$sOrder.trackingcode}

Gern stehen wir Ihnen zur Verfügung, wenn Sie Fragen zum Angebot von vapee.de oder zu dieser Bestellung haben.

{include file="string:{config name=emailfooterplain}"}',
            'content_html' => '<!DOCTYPE HTML>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

  <!-- Define Charset -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

      <style type="text/css">


  	    body{
              width: 100%;
              background-color: #ffffff;
              margin:0;
              padding:0;
              -webkit-font-smoothing: antialiased;
          }

          p,h1,h2,h3,h4{
  	        margin-top:0;
      			margin-bottom:0;
      			padding-top:0;
      			padding-bottom:0;
          }

          span.preheader{
            display: none; font-size: 1px;}

          html{
              width: 100%;
          }

          table{
              font-size: 14px;
              border: 0;
          }

          td{
            color: #808080;
          }

          td.main-header{
            color: #5d6775;
          }

          /* ----------- responsivity ----------- */
          @media only screen and (max-width: 640px){
  			/*------ top header ------ */
              .header-bg{
                width: 440px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 420px !important; height: 5px !important;}
              .main-header{
                line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 400px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 400px !important; height: auto !important;}
  			.main-text-container{
          width: 340px !important; height: auto !important;}

  			/*-------- container --------*/
  			.container600{
          width: 440px !important;}
  			.container580{
          width: 420px !important;}
  			.container560{
          width: 400px !important;}
  			.container540{
          width: 380px !important;}
  			.main-content{
          width: 418px !important;}


  			/*-------- secions ----------*/

  			.section-item{
          width: 380px !important;}
              .section-img{
                width: 380px !important; height: auto !important;}

        .order--article-container{
          width: 250px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:30px;}

        .order--article-title{
          text-align: center;}

  		}

  		@media only screen and (max-width: 479px){


  			/*------ top header ------ */
              .header-bg{
                width: 280px !important; height: auto !important;}
              .rounded-edg-bg{
                width: 260px !important; height: 5px !important;}
              .main-header{
                font-size: 24px !important; line-height: 28px !important;}
              .main-subheader{
                line-height: 28px !important;}

              /*--------logo-----------*/
              .logo{
                width: 240px !important;}
  			/*----- main image -------*/
  			.main-image{
          width: 240px !important; height: auto !important;}
  			.main-text-container{
          width: 180px !important;}

  			/*-------- container --------*/
  			.container600{
          width: 280px !important;}
  			.container580{
          width: 260px !important;}
  			.container560{
          width: 240px !important;}
  			.container540{
          width: 220px !important;}
  			.main-content{
          width: 258px !important;}

  			/*-------- secions ----------*/
  			.section-item{
          width: 220px !important;}
              .section-img{
                width: 220px !important; height: auto !important;}
              .section-title{
                line-height: 28px !important; font-size: 16px !important;}

        .order--article-container{
          width: 180px !important;float:none;margin: 0 auto;}
          .article--content{
            margin-left:0;}
            .article--text-left{
              width: 60px;}
            .article--text-right{
              width: 120px;}
              .article--text-inner{
                float:right;}

              /*-------- footer ----------*/
              .footer{
                width: 280px !important;}
  		}

  	</style>
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  		<tr>
  			<td align="center">
  				<table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr><td height="40"></td></tr>
  					<tr>
  						<td align="center">
  							<table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container560">
  								<tr>
  									<td>
  										<table border="0" align="center" cellpadding="0" cellspacing="0" >
                  			<tr>
                  				<td align="center">
                  					<a href="{$sShopURL}" style="display: block; border-style: none !important; border: 0 !important;">
                            <img editable="true" mc:edit="logo" height="150" width="inherit" border="0" style="display: block;" src="https://vapee.de/media/image/f1/b3/00/vapee-logo-500x480.png" alt="logo" /></a>
                  				</td>
                  			</tr>
                  		</table>
  									</td>
  								</tr>
  							</table>
  						</td>
  					</tr>
  				</table>
  			</td>
  		</tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">
            <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container600">

            <tr>
              <td>
                <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="container580">

                  <tr>
                    <td>
                      <table border="0" align="center" width="578" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">
      
											<!----------- main section ----------->
											<repeater>
											<layout label="main-section">
											<tr>
												<td>
													<table border="0" align="center" width="560" cellpadding="0" cellspacing="0" class="container560">
														<tr><td height="40"></td></tr>
														<tr>
															<td align="center" mc:edit="title1" style="font-size: 28px; font-family: Helvetica, Arial, sans-serif;" class="main-header">
																<multiline>
																	Ihre Bestellung bei {config name=shopName}
																</multiline>
															</td>
														</tr>

														<tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                            <tr>
                              <td>
                                <table width="80%" align="center">
      														<tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      Guten Tag {$sUser.billing_salutation|salutation} {$sUser.billing_lastname},
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
      															<td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
      																<multiline>
                                      die Artikel zu Ihrer Bestellung {$sOrder.ordernumber} vom {$sOrder.ordertime|date_format:"%d.%m.%Y"} sind auf dem Weg zu Ihnen.
                                      <br><br>
                                      Link zur Sendungsverfolgung bei DHL: <a href="https://nolp.dhl.de/nextt-online-public/de/search?piececode={$sOrder.trackingcode}">{$sOrder.trackingcode}</a>
      																</multiline>
      															</td>
      														</tr>

                                  <tr><td height="20"></td></tr>

                                  <tr>
                                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                                      <multiline>
                                      Den aktuellen Status Ihrer Bestellung  können Sie auch jederzeit auf unserer Webseite im  Bereich "Mein Konto" - "Meine Bestellungen" abrufen.
                                      </multiline>
                                    </td>
                                  </tr>

                                </table>
                              </td>
                            </tr>
													</table>
												</td>
											</tr><!----------- end main section ----------->

                  </repeater>

                  <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="40"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="40"></td></tr>
                    </table>
                  </td>
                </tr>

                  <tr>
                    <td align="center" mc:edit="subtitle1" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif;" class="main-subheader">
                      <multiline>
                      Mit freundlichen Grüßen,<br>
    Ihr Team von {config name=shopName}
                      </multiline>
                    </td>
                  </tr>
                  <tr><td height="30"></td></tr>

                </table>
              </td>
              </tr>
              </table>
              </td>
              </tr>

              <tr>
                  <td>
                    <table border="0" width="240" align="center" cellpadding="0" cellspacing="0" class="container">
                      <tr><td height="20"></td></tr>
                      <tr>
                        <td align="center">
                          <img src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/divider.png" editable="true" width="240" height="4" style="display: block;" alt="divider" />
                        </td>
                      </tr>
                      <tr><td height="20"></td></tr>
                    </table>
                  </td>
                </tr>

			        <tr>
    						<td align="center">
    							<table border="0" align="center" cellpadding="0" cellspacing="0">

    								<tr><td height="30"></td></tr>
    								<tr>
    									<td>
    										<table border="0" width="140" align="center" cellpadding="0" cellspacing="0">
    											<tr>
                          <td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.facebook.com/vapee.de/" title="Facebook"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/facebook.png" alt="Facebook" /></a>
          </td><td>
            <a style="display: block; width: 30px; border-style: none !important; border: 0 !important; margin: 0 auto;" href="https://www.instagram.com/vapee.de/" title="Instagram"><img editable="true" width="30" height="30" border="0" style="display: block;" src="https://www.vapee.de/custom/plugins/MxcVapee/Resources/images/instagram.png" alt="Instagram" /></a>
          </td>
    											</tr>
    										</table>
    									</td>

        						</tr>
        						<tr><td height="30"></td></tr>

    							</table>
    						</td>
    			        </tr>

    				</table>
    			</td>
    		</tr>

    		<tr><td height="40"></td></tr>

    	</table>

    </body>
    </html>',
            'from_mail' => 'info@vapee.de',
            'from_name' => '{config name=shopName}',
            'subject' => 'Ihre Bestellung {$sOrder.ordernumber} bei {config name=shopName} wurde versandt!',
            'status' => 7,
        ),
);