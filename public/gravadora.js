$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $('#cadastrar_gravadora').click(function() {
        var gravadora = {
            codigo_grava: 1,
            nome_grava: 'Teste',
            detalhes_grava: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/gravadora/store-json",
            data: JSON.stringify(gravadora),
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

    $('#cadastrar_gravadora_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/gravadora/store-xml",
            data: "<xml><codigo_grava>1</codigo_grava><nome_grava>Nome Teste</nome_grava><detalhes_grava>1</detalhes_grava></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Cadastrado por XML com Sucesso");
            }
        });
    });
    $('#alterar_gravadora').click(function() {
        var gravadora = {
            codigo_grava: 1,
            nome_grava: 'Teste de Alteração',
            detalhes_grava: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/gravadora/update-json",
            data: JSON.stringify(gravadora),
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
    $('#alterar_gravadora_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/gravadora/update-xml",
            data: "<xml><codigo_grava>1</codigo_grava><nome_grava>Nome de Alteração</nome_grava><detalhes_grava>1</detalhes_grava></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Alterado por XML com Sucesso");
            }
        });
    });
    $('#excluir_gravadora').click(function() {
        var gravadora = {
            codigo_grava: 1
        }
        $.ajax({
            type: "post",
            url: "http://api.local/gravadora/destroy-json",
            data: JSON.stringify(gravadora),
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
    $('#excluir_gravadora_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/gravadora/destroy-xml",
            data: "<xml><codigo_grava>1</codigo_grava><nome_grava>Nome de Alteração</nome_grava><detalhes_grava>1</detalhes_grava></xml>",
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
