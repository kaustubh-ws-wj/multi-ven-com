<?php $this->load->view('emails/email_head'); ?>
<div class="layout one-col fixed-width" style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 173000px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;">
    <div class="layout__inner" style="border-collapse: collapse;display: table;width: 100%;background-color: #ffffff;" emb-background-style>
        <!--[if (mso)|(IE)]><table align="center" cellpadding="0" cellspacing="0" role="presentation"><tr class="layout-fixed-width" emb-background-style><td style="width: 600px" class="w560"><![endif]-->
        <div class="column" style='text-align: left;color: #8f8f8f;font-size: 16px;line-height: 24px;font-family: "Open Sans",sans-serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);'>

            
            <div style="Margin-left: 20px;Margin-right: 20px;">
                <div style="line-height:10px;font-size:1px">&nbsp;</div>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;text-align:justify;">

                <h2 style="Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;color: #706f70;font-size: 18px;line-height: 26px;font-family: Cabin,Avenir,sans-serif;">Hello .. </h2><p style="Margin-top: 16px;Margin-bottom: 0;"></p>
<!--                <p style="Margin-bottom: 0;">Hit reply to this email and tell us which company is your dream company where you wish to get placed and why. Let us know and we will further assist you.</p>-->
                <p style="Margin-bottom: 20px;">Hello <?php echo $userdetails['username']; ?><i class="fa fa-bitcoin fa-2x" style="color:#F9A01B; font-size: 14px;"></i></p><br>
                <p style="Margin-bottom: 20px;">Subject <?php echo $userdetails['subject']; ?><i class="fa fa-bitcoin fa-2x" style="color:#F9A01B; font-size: 14px;"></i></p><br>
                <p style="Margin-bottom: 20px;">Message <?php echo $userdetails['message']; ?><i class="fa fa-bitcoin fa-2x" style="color:#F9A01B; font-size: 14px;"></i></p><br>
                <p style="Margin-bottom: 20px;">click here</p>
            </div>

            <div style="Margin-left: 20px;Margin-right: 20px;">
                <div style="line-height:10px;font-size:1px">&nbsp;</div>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;">
                <div class="btn btn--flat btn--large" style="Margin-bottom: 20px;text-align: center;">
                    <![if !mso]><a style="border-radius: 4px;display: inline-block;font-size: 14px;font-weight: bold;line-height: 24px;padding: 12px 24px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #fff;background-color: #e45d6b;font-family: 'Open Sans', sans-serif;" href="<?= site_url() ?>">Click Here for More Search!</a><![endif]>
                    <!--[if mso]><p style="line-height:0;margin:0;">&nbsp;</p><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" href="http://test.com" style="width:123px" arcsize="9%" fillcolor="#E45D6B" stroke="f"><v:textbox style="mso-fit-shape-to-text:t" inset="0px,11px,0px,11px"><center style="font-size:14px;line-height:24px;color:#FFFFFF;font-family:sans-serif;font-weight:bold;mso-line-height-rule:exactly;mso-text-raise:4px">Click Here!</center></v:textbox></v:roundrect><![endif]--></div>
            </div>
        </div>
        
        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </div>
</div>
<?php $this->load->view('emails/email_footer'); ?>