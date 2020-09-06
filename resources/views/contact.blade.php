@extends('layouts.golden')



@section('content')


    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-wrap text-center" style="background-image: url('{{ asset('frontend') }}/images/golden2.jpg');" data-stellar-background-ratio="0.5">
            <div class="hero-contents">
              <h2>Get In Touch</h2>
              <p><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>Contact</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
    <div class="container">
      <div class="row">



        <div class="col-lg-4">
          <h4><span style="color:#1D428A"><strong>Contact</span> <span style="color:#FDB927">Golden State Warriors</strong></span></h4>
          <div class="p-4 mb-3 bg-white">
            <!-- <h4 class="h5 text-black mb-3">Contact Golden Stat Warriors</h4> -->
            <p class="mb-0 font-weight-bold text-black">Address</p>
            <p class="mb-4 text-black"> 1 Warriors Way <br>CA 94158, San Francisco, California, USA</p>

            <p class="mb-0 font-weight-bold text-black">Phone</p>
            <p class="mb-4">(415) 388-0100</p>

            <p class="mb-0 font-weight-bold text-black">Email Address</p>
            <p class="mb-0"><a href="#">membershipservices@warriors.com</a></p>
            <br>
            <p class="mb-4 text-black">If you have any questions , please contact us by using the form. We’ll get back to you as soon as we can!</p>

          </div>


        </div>

        <div class="col-md-12 col-lg-7 mb-5" style="padding-left:8em">


          <form action="{{ url('/contact') }}" class="contact-form" method="post">
            {{ csrf_field() }}

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Full Name</label>
                <input type="text" id="fullname" class="form-control" name="name" placeholder="Full Name">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email Address">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Subject</label>
                <input type="text" id="subject" class="form-control" name="subject" placeholder="Enter Subject">
              </div>
            </div>


            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Comments / Questions</label>
                <textarea name="question" id="message" cols="30" rows="5" class="form-control"
                  placeholder="Write a comment..."></textarea>
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <div style="float:right;">
                <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4">
              </div>
              </div>
            </div>


          </form>
        </div>
      </div>
    </div>

  </div>

  @endsection



<!-- <div class="et_pb_row et_pb_row_10 contrast-light contrast-light-section">
<div class="et_pb_column et_pb_column_2_5 et_pb_column_18 et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_4 et_pb_text_align_left et_pb_bg_layout_light is-visible" style="visibility: visible;">
<div class="et_pb_text_inner">
  <h1>Contact <strong>G2 Esports</strong></h1>
</div>
</div>
<div class="et_pb_module et_pb_text et_pb_text_5 et_pb_text_align_left et_pb_bg_layout_light is-visible" style="visibility: visible;">
  <div class="et_pb_text_inner">
    <p><strong>G Esports Holding GmbH</strong></p>
    <p><i class="fas fa-map-marker-alt"></i> Schellingstraße 1<br> 10785 Berlin<br> Germany</p>
    <p> <i class="fas fa-phone-alt"></i> <a href="tel:+49-030-12088383" target="_blank" rel="noopener noreferrer"><span>+49 030-12088383</span></a><a href="mailto:info@g2esports.com"></a><br> <i class="fas fa-at"></i> <a href="mailto:info@g2esports.com">info@g2esports.com</a></p>
  </div>
</div>
<div class="et_pb_module et_pb_text et_pb_text_6 et_pb_text_align_left et_pb_bg_layout_light is-visible" style="visibility: visible;">
  <div class="et_pb_text_inner">
    <p><span>If you have any questions related to our club or any of our teams, please contact us by using the form below. We’ll get back to you as soon as we can!</span></p>
  </div>
</div>
</div>
<div class="et_pb_column et_pb_column_3_5 et_pb_column_19 et_pb_css_mix_blend_mode_passthrough et-last-child">
  <div class="et_pb_module et_pb_code et_pb_code_0">
    <div class="et_pb_code_inner">
      <div class="caldera-grid" id="caldera_form_1" data-cf-ver="1.8.11" data-cf-form-id="CF5e6a23214e863">
        <div id="caldera_notices_1" data-spinner="https://g2esports.com/wp-admin/images/spinner.gif">

        </div>
        <form data-instance="1" class="CF5e6a23214e863 caldera_forms_form cfajax-trigger _tisBound" method="POST" enctype="multipart/form-data" id="CF5e6a23214e863_1" data-form-id="CF5e6a23214e863" aria-label="Contact Form" data-target="#caldera_notices_1" data-template="#cfajax_CF5e6a23214e863-tmpl" data-cfajax="CF5e6a23214e863" data-load-element="_parent" data-load-class="cf_processing" data-post-disable="0" data-action="cf_process_ajax_submit" data-request="https://g2esports.com/cf-api/CF5e6a23214e863" data-custom-callback="formhelperTriggerScrollTop" data-hiderows="true">
           <input type="hidden" id="_cf_verify_CF5e6a23214e863" name="_cf_verify" value="74564eec8e" data-nonce-time="1593982274">
           <input type="hidden" name="_wp_http_referer" value="/contact/">
           <div id="cf2-CF5e6a23214e863_1"></div>
           <input type="hidden" name="_cf_frm_id" value="CF5e6a23214e863">
           <input type="hidden" name="_cf_frm_ct" value="1">
           <input type="hidden" name="cfajax" value="CF5e6a23214e863">
           <input type="hidden" name="_cf_cr_pst" value="42904">
           <div class="hide" style="display:none; overflow:hidden;height:0;width:0;">
             <label>Web Site</label>
             <input type="text" name="web_site" value="" autocomplete="off">
           </div>
           <div id="CF5e6a23214e863_1-row-1" class="row first_row">
             <div class="col-sm-6 first_col">
               <div data-field-wrapper="fld_8768091" class="form-group" id="fld_8768091_1-wrap">
                 <label id="fld_8768091Label" for="fld_8768091_1" class="control-label">First Name
                   <span aria-hidden="true" role="presentation" class="field_required" style="color:#ee0000;">*</span>
                 </label>
                 <div class="">
                   <input required="" type="text" data-field="fld_8768091" class=" form-control" id="fld_8768091_1" name="fld_8768091" value="" data-type="text" aria-required="true" aria-labelledby="fld_8768091Label">
                 </div>
               </div>
             </div>
             <div class="col-sm-6 last_col">
               <div data-field-wrapper="fld_9970286" class="form-group" id="fld_9970286_1-wrap">
                  <label id="fld_9970286Label" for="fld_9970286_1" class="control-label">Last Name
                    <span aria-hidden="true" role="presentation" class="field_required" style="color:#ee0000;">*</span
                      ></label><div class=""> <input required="" type="text" data-field="fld_9970286" class=" form-control" id="fld_9970286_1" name="fld_9970286" value="" data-type="text" aria-required="true" aria-labelledby="fld_9970286Label"></div></div></div></div><div id="CF5e6a23214e863_1-row-2" class="row "><div class="col-sm-12 single"><div data-field-wrapper="fld_6009157" class="form-group" id="fld_6009157_1-wrap"> <label id="fld_6009157Label" for="fld_6009157_1" class="control-label">Email Address <span aria-hidden="true" role="presentation" class="field_required" style="color:#ee0000;">*</span></label><div class=""> <input required="" type="email" data-field="fld_6009157" class=" form-control" id="fld_6009157_1" name="fld_6009157" value="" data-type="email" aria-required="true" aria-labelledby="fld_6009157Label"></div></div></div></div><div id="CF5e6a23214e863_1-row-3" class="row "><div class="col-sm-12 single"><div data-field-wrapper="fld_4365148" class="form-group" id="fld_4365148_1-wrap"> <label id="fld_4365148Label" for="fld_4365148_1" class="control-label">Topic</label><div class=""> <div class="select-wrapper fleche"><select name="fld_4365148" value="" data-field="fld_4365148" class="form-control" id="fld_4365148_1" aria-labelledby="fld_4365148Label"><option value=""></option><option value="General Inquiry" data-calc-value="General Inquiry"> General Inquiry</option><option value="Press / Media" data-calc-value="Press / Media"> Press / Media</option> </select></div></div></div></div></div><div id="CF5e6a23214e863_1-row-4" class="row "><div class="col-sm-12 single"><div data-field-wrapper="fld_7683514" class="form-group" id="fld_7683514_1-wrap"> <label id="fld_7683514Label" for="fld_7683514_1" class="control-label">Comments / Questions <span aria-hidden="true" role="presentation" class="field_required" style="color:#ee0000;">*</span></label><div class=""><textarea name="fld_7683514" value="" data-field="fld_7683514" class="form-control" id="fld_7683514_1" rows="7" required="required" aria-labelledby="fld_7683514Label"></textarea></div></div></div></div><div id="CF5e6a23214e863_1-row-5" class="row "><div class="col-sm-12 single"><div data-field-wrapper="fld_947010" class="form-group" id="fld_947010_1-wrap"> <label id="fld_947010Label" for="fld_947010_1" class="control-label">Data Processing Consent <span aria-hidden="true" role="presentation" class="field_required" style="color:#ee0000;">*</span></label><div class=""><div class="checkbox"> <label for="fld_947010_1_opt1344747"> <input data-parsley-required="true" data-parsley-group="fld_947010_1" data-parsley-multiple="fld_947010_1" type="checkbox" data-label="By using this form you agree with the storage and handling of your data by this website according to our <a href=&quot;/privacy&quot;>privacy policy</a>." data-field="fld_947010" id="fld_947010_1_opt1344747" class="fld_947010_1 option-required" name="fld_947010[opt1344747]" value="By using this form you agree with the storage and handling of your data by this website according to our <a href=&quot;/privacy&quot;>privacy policy</a>." data-type="checkbox" data-checkbox-field="fld_947010_1" data-calc-value="By using this form you agree with the storage and handling of your data by this website according to our <a href=&quot;/privacy&quot;>privacy policy</a>."><span></span> By using this form you agree with the storage and handling of your data by this website according to our <a href="/privacy">privacy policy</a>. </label></div></div></div></div></div><div id="CF5e6a23214e863_1-row-6" class="row last_row"><div class="col-sm-6 first_col"><div data-field-wrapper="fld_9353761" class="form-group" id="fld_9353761_1-wrap"> <label id="fld_9353761Label" for="fld_9353761_1" class="control-label">recaptcha <span aria-hidden="true" role="presentation" class="field_required" style="color:#ee0000;">*</span></label><div class=""> <input required="" type="hidden" data-field="fld_9353761" class=" form-control" id="fld_9353761_1" name="fld_9353761" value="" data-type="recaptcha" aria-required="true" aria-labelledby="fld_9353761Label"><div id="capfld_9353761_1" class="g-recaptcha" data-sitekey="6LdkG-8UAAAAAIcEiBGzVFCvb-N6xcTpknOa_CS_"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdkG-8UAAAAAIcEiBGzVFCvb-N6xcTpknOa_CS_&amp;co=aHR0cHM6Ly9nMmVzcG9ydHMuY29tOjQ0Mw..&amp;hl=en&amp;v=NMoy4HgGiLr5NAQaEQa2ho8X&amp;theme=light&amp;size=normal&amp;cb=pzo9gzlnshb3" width="304" height="78" role="presentation" name="a-ndbh1hmekhjk" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div></div></div></div><div class="col-sm-6 last_col"><div class=""><p><div class="button-feedback-wrap"><button class="et_pb_button btn btn-default" type="submit">Send Message</button><div class="caldera-spinner-outer"><div class="dp-dfg-loader"><div class="my_custom_loader"></div></div></div></div></p></div></div></div></form></div></div></div></div></div> -->
