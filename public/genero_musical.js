$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $('#cadastrar_genero_musical').click(function() {
        var genero_musical = {
            
            codigo_gene: 1,
            descricao_genero: '1',
        }
        $.ajax({
            type: "post",
            url: "http://api.local/genero-musical/store-json",
            data: JSON.stringify(genero_musical),
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

    $('#cadastrar_genero_musical_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/genero-musical/store-xml",
            data: "<xml><codigo_gene>1</codigo_gene><descricao_genero>1</descricao_genero></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Cadastrado por XML com Sucesso");
            }
        });
    });
    $('#alterar_genero_musical').click(function() {
        var genero_musical = {
            
            codigo_gene: 1,
            descricao_genero: '2',
        }
        $.ajax({
            type: "post",
            url: "http://api.local/genero-musical/update-json",
            data: JSON.stringify(genero_musical),
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
    $('#alterar_genero_musical_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/genero-musical/update-xml",
            data: "<xml><codigo_gene>1</codigo_gene><descricao_genero>2</descricao_genero></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Alterado por XML com Sucesso");
            }
        });
    });
    $('#excluir_genero_musical').click(function() {
        var genero_musical = {
            
            codigo_gene: 1,
            descricao_genero: '1',
        }
        $.ajax({
            type: "post",
            url: "http://api.local/genero-musical/destroy-json",
            data: JSON.stringify(genero_musical),
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
    $('#excluir_genero_musical_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/genero-musical/destroy-xml",
            data: "<xml><codigo_gene>1</codigo_gene><descricao_genero>1</descricao_genero></xml>",
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
