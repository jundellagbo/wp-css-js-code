jQuery( document ).ready( function() { 
    
    function editorMode( idname, mode ) {
        var id = document.getElementById(idname);
        if( id ) {
            CodeMirror.fromTextArea(id, {
                lineNumbers: true,
                mode: mode,
                gutters: ["CodeMirror-lint-markers"],
                lint: true,
                showTrailingSpace: true
            });
        }
    }

    setTimeout( function() {
        editorMode( "WPCSSJSCODE_css_code_default", "css" );
        editorMode( "WPCSSJSCODE_css_code_responsive_xs", "css" );
        editorMode( "WPCSSJSCODE_css_code_responsive_small", "css" );
        editorMode( "WPCSSJSCODE_css_code_responsive_medium", "css" );
        editorMode( "WPCSSJSCODE_css_code_responsive_large", "css" );
        editorMode( "WPCSSJSCODE_css_code_responsive_xl", "css" );
        editorMode( "WPCSSJSCODE_js_metabox", "javascript" );
        editorMode( "WPCSSJSCODE_js_metabox_header", "javascript" );
    }, 1000)

    jQuery("#WPCSSJSCODE_wrap_form").delegate( "#WPCSSJSCODE_code_form", "submit", function(e) {
        e.preventDefault();
        var form = jQuery( this );
        
        var inputs = form.serializeArray();
        inputs.push({ name: "action", value: "wp_css_code_postmeta" });

        var button = form.find('input[type="submit"]');
        button.val("Loading...");

        setTimeout( function() {
            button.val("Save");
            jQuery.ajax({
                url: wp_css_js_obj.ajax_url,
                type: "POST",
                data: inputs,
                success: function() {
                    alert( "Saved" );
                },
                error: function( error ) {
                    alert( error );
                }
            })
        }, 1000)

    });

} );
