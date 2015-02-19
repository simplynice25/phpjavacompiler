// JavaScript Document

(function(){

    var document_ = $(document);

    var funcConf = {
        compileExec: '.compile-execute',
        outPutWrapper: '.output-theater',
    }
    
    var funcInit = {
        compileExec: function() {
            return this.delegate(funcConf.compileExec, "click", function(){
                var self = $(this),
                    code = editor.getSession().getValue();

                self.children('i.fa').addClass('fa-spin');
                $(funcConf.outPutWrapper).html( '<i class="fa fa-fw fa-spinner fa-spin"></i> Compiling and Executing ....' );

                $.get("compiler.php", { code: code })
                .done(function( data ) {
                    data = $.parseJSON(data);
                    $(funcConf.outPutWrapper).html( data.message );
                })
                .fail(function() {
                    console.log('Failed to process ...');
                })
                .always(function() {
                    self.children('i.fa').removeClass('fa-spin');
                })
            })
        }
    }
    
    $.extend(document_, funcInit);
    document_.compileExec();

})(jQuery,window,document)