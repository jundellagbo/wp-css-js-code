jQuery( document ).ready( function() { 
    
    function editorMode( selector, mode ) {
        var editors = document.querySelectorAll(selector);
        editors.forEach(elem => {
            CodeMirror.fromTextArea(elem, {
                lineNumbers: true,
                mode: mode,
                gutters: ["CodeMirror-lint-markers"],
                theme: wpcssjscode_themeeditor ? wpcssjscode_themeeditor : "material",
                lint: true,
            });
        });
    }

    setTimeout( function() {
        editorMode( ".WPCSSJSCODE_CSS", "css" );
        editorMode( ".WPCSSJSCODE_JS", "javascript" );
        editorMode( ".WPCSSJSCODE_HTML", "xml" );
    });

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
                    alert( "CSS JAVASCRIPT AND HTML: SAVED!" );
                },
                error: function( error ) {
                    alert( error );
                }
            })
        }, 1000)

    });

} );
