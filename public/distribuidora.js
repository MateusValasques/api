$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $('#cadastrar_distribuidora').click(function() {
        var distribuidora = {
            
            codigo_dist: 1,
            descricao_dist: '1',
        }
        $.ajax({
            type: "post",
            url: "http://api.local/distribuidora/store-json",
            data: JSON.stringify(distribuidora),
            contentType: "application/json; charset=utf-8",
            processData: false,
            contentType: false,
            beforeSend: function() {
               
            },
            complete: function() {
                
            },
            success: function(data) { 
                
                alert("Cadastrado com Sucesso"); 
            },
        });
    });

    $('#cadastrar_distribuidora_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/distribuidora/store-xml",
            data: "<xml><codigo_dist>1</codigo_dist><descricao_dist>1</descricao_dist></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Cadastrado por XML com Sucesso");
            }
        });
    });
    $('#alterar_distribuidora').click(function() {
        var distribuidora = {
            
            codigo_dist: 1,
            descricao_dist: '2',
        }
        $.ajax({
            type: "post",
            url: "http://api.local/distribuidora/update-json",
            data: JSON.stringify(distribuidora),
            contentType: "application/json; charset=utf-8",
            processData: false,
            contentType: false,
            beforeSend: function() {
               
            },
            complete: function() {
                
            },
            success: function(data) { 
                
                alert("Alterado com Sucesso"); 
            },
        });
    });
    $('#alterar_distribuidora_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/distribuidora/update-xml",
            data: "<xml><codigo_dist>1</codigo_dist><descricao_dist>2</descricao_dist></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Alterado por XML com Sucesso");
            }
        });
    });
    $('#excluir_distribuidora').click(function() {
        var distribuidora = {
            
            codigo_dist: 1,
            descricao_dist: '1',
        }
        $.ajax({
            type: "post",
            url: "http://api.local/distribuidora/destroy-json",
            data: JSON.stringify(distribuidora),
            contentType: "application/json; charset=utf-8",
            processData: false,
            contentType: false,
            beforeSend: function() {
               
            },
            complete: function() {
                
            },
            success: function(data) { 
                
                alert("Excluido com Sucesso"); 
            },
        });
    });
    $('#excluir_distribuidora_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/distribuidora/destroy-xml",
            data: "<xml><codigo_dist>1</codigo_dist><descricao_dist>1</descricao_dist></xml>",
            contentType: "text/xml",
            dataType: "xml",
            processData: false,
            contentType: false,
            success: function(data) {
                alert("Excluido por XML com Sucesso");
            }
        });
    });
});


 //pega os dados do form
