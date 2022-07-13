</form>

<div id="WPCSSJSCODE_wrap_form" class="wp_css_js_globals">


<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>SELECT THEME EDITOR</h4>
<input type="hidden" value="1" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_code_theme" name="meta_key" />
<div>
<?php 
    $editortheme = WPCSSJSCODE_POSTMETA_GET( 1, '_WPCSSJSCODE_code_theme'); 
    $editortheme = $editortheme && in_array( $editortheme, WPCSSJSCODE_editorthemelists() ) ? $editortheme : "material"; 
?>
    <select name="wp_css_js_code" value="<?php echo $editortheme; ?>">
        <?php foreach( WPCSSJSCODE_editorthemelists() as $theme ): ?>
            <option <?php echo $theme === $editortheme ? 'selected' : ''; ?>><?php echo $theme; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="html" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
<p>
    <a href="javascript:window.location.reload(true)" >click here</a> to reload theme.
</p>
</form>
</div>


<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Insert HTML before GLOBAL &lt;body&gt; tag</h4>
<input type="hidden" value="1" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_code_global_header" name="meta_key" />
<textarea name="wp_css_js_code" placeholder="Insert your custom HTML code" class="_wp_css_default_code WPCSSJSCODE_HTML" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( 1, "_WPCSSJSCODE_code_global_header" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="html" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>


<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Insert HTML after GLOBAL &lt;body&gt; tag</h4>
<input type="hidden" value="1" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_code_global_bodytag" name="meta_key" />
<textarea name="wp_css_js_code" placeholder="Insert your custom HTML code" class="_wp_css_default_code WPCSSJSCODE_HTML" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( 1, "_WPCSSJSCODE_code_global_bodytag" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="html" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>


<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Insert HTML in GLOBAL FOOTER</h4>
<input type="hidden" value="1" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_code_global_footer" name="meta_key" />
<textarea name="wp_css_js_code" placeholder="Insert your custom HTML code" class="_wp_css_default_code WPCSSJSCODE_HTML" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( 1, "_WPCSSJSCODE_code_global_footer" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="html" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>


<h3>GLOBAL CSS</h3>
<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<input type="hidden" value="1" name="post_id">
<input type="hidden" value="_WPCSSJSCODE_css_default_code_global" name="meta_key">
<textarea name="wp_css_js_code" class="_wp_css_default_code WPCSSJSCODE_CSS" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( 1, "_WPCSSJSCODE_css_default_code_global" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="css" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>


<h3>GLOBAL JAVASCRIPT</h3>
<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Javascript Header.</h4>
<input type="hidden" value="1" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_js_code_header_global" name="meta_key" />
<textarea name="wp_css_js_code" class="_wp_css_default_code WPCSSJSCODE_JS" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( 1, "_WPCSSJSCODE_js_code_header_global" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="js" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>

<div class="separator_">
<form id="WPCSSJSCODE_code_form">
<h4>Javascript Footer.</h4>
<input type="hidden" value="1" name="post_id" />
<input type="hidden" value="_WPCSSJSCODE_js_code_footer_global" name="meta_key" />
<textarea name="wp_css_js_code" class="_wp_css_default_code WPCSSJSCODE_JS" rows="10" style="width: 100%;"><?=WPCSSJSCODE_POSTMETA_GET( 1, "_WPCSSJSCODE_js_code_footer_global" )?></textarea>
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp-css-js-code-nonce") ?>" />
<input type="hidden" name="get_type" value="js" />
<input type="submit" value="Save" class="button button-primary button-large wp_css_js_code_btn" />
</form>
</div>


</div>