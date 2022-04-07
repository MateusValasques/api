$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $('#cadastrar_box_cd').click(function() {
        var box_cd = {
            id_box: 1,
            nome_box: 'Teste',
            total_no_box: 1,
            codigo_grava: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/box-cd/store-json",
            data: JSON.stringify(box_cd),
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

    $('#cadastrar_box_cd_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/box-cd/store-xml",
            data: "<xml><id_box>1</id_box><nome_box>Nome Teste</nome_box><total_no_box>1</total_no_box><codigo_grava>1</codigo_grava></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Cadastrado por XML com Sucesso");
            }
        });
    });
    $('#alterar_box_cd').click(function() {
        var box_cd = {
            id_box: 1,
            nome_box: 'Teste de Alteração',
            total_no_box: 1,
            codigo_grava: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/box-cd/update-json",
            data: JSON.stringify(box_cd),
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
    $('#alterar_box_cd_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/box-cd/update-xml",
            data: "<xml><id_box>1</id_box><nome_box>Nome de Alteração</nome_box><total_no_box>1</total_no_box><codigo_grava>1</codigo_grava></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Alterado por XML com Sucesso");
            }
        });
    });
    $('#excluir_box_cd').click(function() {
        var box_cd = {
            id_box: 1
        }
        $.ajax({
            type: "post",
            url: "http://api.local/box-cd/destroy-json",
            data: JSON.stringify(box_cd),
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
    $('#excluir_box_cd_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/box-cd/destroy-xml",
            data: "<xml><id_box>1</id_box><nome_box>Nome Teste</nome_box><total_no_box>1</total_no_box><codigo_grava>1</codigo_grava></xml>",
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
