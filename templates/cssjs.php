<?php $postid = get_the_ID(); ?>
</form>

<div id="WPCSSJSCODE_wrap_form">

<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Insert HTML before &lt;body&gt; tag</h4>
<input type="hidden" value="1" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_specific_html_before_body" name="meta_key" />
<textarea name="wp_css_js_code" placeholder="Insert your custom HTML code" class="_wp_css_default_code WPCSSJSCODE_HTML" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_specific_html_before_body" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="html" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>


<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Insert HTML after &lt;body&gt; tag</h4>
<input type="hidden" value="1" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_specific_html_after_body" name="meta_key" />
<textarea name="wp_css_js_code" placeholder="Insert your custom HTML code" class="_wp_css_default_code WPCSSJSCODE_HTML" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_specific_html_after_body" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="html" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>


<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Insert HTML in FOOTER</h4>
<input type="hidden" value="1" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_specific_html_footer" name="meta_key" />
<textarea name="wp_css_js_code" placeholder="Insert your custom HTML code" class="_wp_css_default_code WPCSSJSCODE_HTML" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_specific_html_footer" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="html" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>


<h3>POST CSS</h3>
<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<input type="hidden" value="<?= $postid ?>" name="post_id">
<input type="hidden" value="_WPCSSJSCODE_css_default_code" name="meta_key">
<textarea name="wp_css_js_code" class="_wp_css_default_code WPCSSJSCODE_CSS" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_css_default_code" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="css" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>


<h3>POST JAVASCRIPT</h3>
<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Javascript Header.</h4>
<input type="hidden" value="<?= $postid ?>" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_js_code_header" name="meta_key" />
<textarea name="wp_css_js_code" class="_wp_css_default_code WPCSSJSCODE_JS" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_js_code_header" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="js" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>

<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Javascript Footer.</h4>
<input type="hidden" value="<?= $postid ?>" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_js_code" name="meta_key" />
<textarea name="wp_css_js_code" class="_wp_css_default_code WPCSSJSCODE_JS" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( $postid, "_WPCSSJSCODE_js_code" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="js" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>

</div>