<?php $postid = get_the_ID(); ?>
</form>

<h2 style="color: green; font-weight: 500; font-size: 15px;">Happy Coding everyone :), If you are willing to help me to continue creating a free plugins. Feel free to <a href="https://www.paypal.me/jundellagbo" target="_blank"><img style="width: 100px;" src="<?= WPCSSJSCODE_plugin_url ?>images/button-PayPal-donate.png" alt=""></a></h2><br>


<div id="WPCSSJSCODE_wrap_form">

<h3>JAVASCRIPT</h3>
<p>Insturction: Enter your javascript code without "script" tag.</p>

<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Insert Javascript Footer.</h4>
<input type="hidden" value="<?= $postid ?>" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_js_code" name="meta_key" />
<textarea name="wp_css_js_code" class="_wp_css_default_code" id="WPCSSJSCODE_js_metabox" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_js_code" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="js" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
<p><i><a href="https://javascript-minifier.com/" target="_blank">Click here</a> and paste the code to minify.</i></p>
<p><i><a href="https://beautifier.io/" target="_blank">Click here</a> and paste the code and select "Beutify Javascript" to beautify.</i></p>
</div>

<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Insert Javascript Header.</h4>
<input type="hidden" value="<?= $postid ?>" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_js_code_header" name="meta_key" />
<textarea name="wp_css_js_code" class="_wp_css_default_code" id="WPCSSJSCODE_js_metabox_header" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_js_code_header" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="js" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
<p><i><a href="https://javascript-minifier.com/" target="_blank">Click here</a> and paste the code to minify.</i></p>
<p><i><a href="https://beautifier.io/" target="_blank">Click here</a> and paste the code and select "Beutify Javascript" to beautify.</i></p>
</div>

<h3>CSS</h3>
<p>Insturction: Enter your css code without "style" tag.</p>
<p>If you want to create your own <i>Media Query Breakpoints</i> you can add it to "Default CSS Styling"</p>

<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Default CSS Styling.</h4>
<input type="hidden" value="<?= $postid ?>" name="post_id">
<input type="hidden" value="_WPCSSJSCODE_css_default_code" name="meta_key">
<textarea name="wp_css_js_code" class="_wp_css_default_code" id="WPCSSJSCODE_css_code_default" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_css_default_code" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="css" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
<p><i><a href="https://cssminifier.com/" target="_blank">Click here</a> and paste the code to minify.</i></p>
<p><i><a href="https://beautifier.io/" target="_blank">Click here</a> and paste the code and select "Beutify CSS" to beautify.</i></p>
</div>

<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Extra small devices (smartphones portrait, less than 479px)</h4>
<input type="hidden" value="<?= $postid ?>" name="post_id">
<input type="hidden" value="_WPCSSJSCODE_css_xs_code" name="meta_key">
<textarea name="wp_css_js_code" class="_wp_css_xs_code" id="WPCSSJSCODE_css_code_responsive_xs" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_css_xs_code" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="css" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
<p><i><a href="https://cssminifier.com/" target="_blank">Click here</a> and paste the code to minify.</i></p>
<p><i><a href="https://beautifier.io/" target="_blank">Click here</a> and paste the code and select "Beutify CSS" to beautify.</i></p>
</div>

<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Small devices (smartphones landscape, less than 767px)</h4>
<input type="hidden" value="<?= $postid ?>" name="post_id">
<input type="hidden" value="_WPCSSJSCODE_css_sm_code" name="meta_key">
<textarea name="wp_css_js_code" class="_wp_css_sm_code" id="WPCSSJSCODE_css_code_responsive_small" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_css_sm_code" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="css" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
<p><i><a href="https://cssminifier.com/" target="_blank">Click here</a> and paste the code to minify.</i></p>
<p><i><a href="https://beautifier.io/" target="_blank">Click here</a> and paste the code and select "Beutify CSS" to beautify.</i></p>
</div>

<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Medium devices (tablets, less than 980px)</h4>
<input type="hidden" value="<?= $postid ?>" name="post_id">
<input type="hidden" value="_WPCSSJSCODE_css_md_code" name="meta_key">
<textarea name="wp_css_js_code" class="_wp_css_md_code" id="WPCSSJSCODE_css_code_responsive_medium" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_css_md_code" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="css" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
<p><i><a href="https://cssminifier.com/" target="_blank">Click here</a> and paste the code to minify.</i></p>
<p><i><a href="https://beautifier.io/" target="_blank">Click here</a> and paste the code and select "Beutify CSS" to beautify.</i></p>
</div>

</div>