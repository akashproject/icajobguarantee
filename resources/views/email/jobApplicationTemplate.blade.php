<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--[if mso]>
				<xml>
					<o:OfficeDocumentSettings>
						<o:PixelsPerInch>96</o:PixelsPerInch>
						<o:AllowPNG/>
					</o:OfficeDocumentSettings>
				</xml>
				<![endif]-->
    <style>
      * {
        box-sizing: border-box
      }

      body {
        margin: 0;
        padding: 0
      }

      a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: inherit !important
      }

      #MessageViewBody a {
        color: inherit;
        text-decoration: none
      }

      p {
        line-height: inherit
      }

      .desktop_hide,
      .desktop_hide table {
        mso-hide: all;
        display: none;
        max-height: 0;
        overflow: hidden
      }

      .image_block img+div {
        display: none
      }

      @media (max-width:740px) {

        .desktop_hide table.icons-inner,
        .social_block.desktop_hide .social-table {
          display: inline-block !important
        }

        .icons-inner {
          text-align: center
        }

        .icons-inner td {
          margin: 0 auto
        }

        .fullMobileWidth,
        .image_block img.big,
        .row-content {
          width: 100% !important
        }

        .mobile_hide {
          display: none
        }

        .stack .column {
          width: 100%;
          display: block
        }

        .mobile_hide {
          min-height: 0;
          max-height: 0;
          max-width: 0;
          overflow: hidden;
          font-size: 0
        }

        .desktop_hide,
        .desktop_hide table {
          display: table !important;
          max-height: none !important
        }
      }
    </style>
  </head>
  <body style="margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none;background-color:#fff">
      <table cellpadding="0" cellspacing="0" width="600" class="w320">
        <tr>
          <td style="padding: 30px 20px !important;">
            <table cellspacing="0" cellpadding="0" width="100%">
              <tr style="background: #eee;">
            
                <td  style="text-align: left;border-bottom: 1px solid #cccccc;color: #4d4d4d;font-weight: 700;padding: 10px 5px;"  width="163">
                  Field
                </td>
                <td  style="text-align: left;border-bottom: 1px solid #cccccc;color: #4d4d4d;font-weight: 700;padding: 10px 5px;"  width="97">
                  Value
                </td>
              </tr> 
              <tr>
                <td style="padding-top: 20px;text-align: left;vertical-align: top;">
                  Name : 
                </td>
                <td class="item-col quantity">
                  {{$name}}
                </td>
              </tr>
              <tr>
                <td style="padding-top: 20px;text-align: left;vertical-align: top;">
                  Email : 
                </td>
                <td class="item-col quantity">
                  {{$email}}
                </td>
              </tr>
              <tr>
                <td style="padding-top: 20px;text-align: left;vertical-align: top;">
                  Mobile : 
                </td>
                <td class="item-col quantity">
                  {{$mobile}}
                </td>
              </tr>
              <tr>
                <td style="padding-top: 20px;text-align: left;vertical-align: top;">
                  Address : 
                </td>
                <td class="item-col quantity">
                  {{$address}}
                </td>
              </tr>
              <tr>
                <td style="padding-top: 20px;text-align: left;vertical-align: top;">
                  Experience : 
                </td>
                <td class="item-col quantity">
                     {{$year}} Year {{$month}} Month
                </td>
              </tr>
            </table>
          </td>
        </tr>
    </table>
  </body>
</html>